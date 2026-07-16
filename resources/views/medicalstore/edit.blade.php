@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')
@php
    // Prepare invoice items for safe JSON use
    $dbItems = $invoice->items->map(function($i){
        return [
            'id' => $i->id,
            'medicine_name' => $i->medicine_name,
            'category' => $i->category,
            'price' => (float)$i->price,
            'quantity' => (int)$i->quantity,
            'discount_percent' => (float)$i->discount_percent,
            'subtotal' => (float)$i->subtotal,
            'discount_amount' => (float)$i->discount_amount,
            'total' => (float)$i->total,
        ];
    })->toArray();
@endphp

<div class="container mt-3 me-1">
  <div class="container my-5 ">
  <h3 class="text-center text-success fw-bold mb-4">🧾 Edit Invoice (ID: {{ $invoice->id }})</h3>

  <!-- Select & Add Product -->
  <div class="card mb-4">
    <div class="card-body">
      <form id="addProductForm" class="row g-2 align-items-end">
        @csrf

        <div class="col-md-4">
          <label class="form-label">🔍 Search Medicine</label>
          <input id="searchMedicine" type="text" class="form-control" placeholder="Search by name, category, or price...">
        </div>

        <div class="col-md-5">
          <label class="form-label">Choose medicine</label>
          <select id="medicineSelect" class="form-select">
            <option value="">-- Select Medicine --</option>
            @foreach($medicines as $med)
              <option value="{{ $med->id }}"
                      data-name="{{ $med->name }}"
                      data-price="{{ $med->saleprice }}"
                      data-category="{{ $med->category }}">
               
                {{ $med->name }} — Cat: {{ $med->category }} | Qty: {{ $med->quantity }} | Rs.{{ $med->saleprice }}
                 
              </option>
            @endforeach
          </select>
        </div>

        <div class="col-md-1">
          <label class="form-label">Qty</label>
          <input id="addQty" type="number" min="1" class="form-control" value="1">
        </div>

        <div class="col-md-2">
          <label class="form-label">Discount %</label>
          <input id="addDiscount" type="number" step="0.01" min="0" max="100" class="form-control" placeholder="0">
        </div>

        <div class="col-md-12 mt-2 text-end mt-3">
          <button type="button" id="btnAddToLocal" class="btn btn-success">🧾 Add to Invoice</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Customer Info -->
  <div class="card mb-4">
    <div class="card-body row g-2">
      <div class="col-md-6">
        <label class="form-label">Customer Name</label>
        <input id="customerName" name="customerName" class="form-control" value="{{ $invoice->customer_name }}">
      </div>
      <div class="col-md-6">
        <label class="form-label">Customer Phone</label>
        <input id="customerPhone" name="customerPhone" class="form-control" value="{{ $invoice->customer_phone }}">
      </div>
    </div>
  </div>

  <!-- Invoice Table -->
  <div class="card">
    <div class="card-body">
      <table class="table table-bordered" id="invoiceTable">
        <thead class="table-success">
          <tr>
            <th>#</th>
            <th>Medicine</th>
            <th>Category</th>
            <th>Price (Rs)</th>
            <th>Qty</th>
            <th>Discount %</th>
            <th>Subtotal</th>
            <th>Discount Amt</th>
            <th>Total</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>

      <div class="row mt-3">
        <div class="col-md-4 offset-md-4 text-end fw-semibold">Subtotal:</div>
        <div class="col-md-2 text-end" id="subtotalText">Rs. 0.00</div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-4 text-end fw-semibold">Total Discount:</div>
        <div class="col-md-2 text-end" id="discountText">Rs. 0.00</div>
      </div>
      <div class="row mb-3">
        <div class="col-md-4 offset-md-4 text-end fw-bold fs-5">Grand Total:</div>
        <div class="col-md-2 text-end fw-bold fs-5 text-success" id="grandTotalText">Rs. 0.00</div>
      </div>

      <!-- Save Form -->
      <form id="saveForm" action="{{ route('invoice.update', $invoice->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="invoice_data" id="invoice_data">
        <div class="text-end">
          <button type="hidden" id="btnClearLocal" class="btn btn-outline-light me-2"></button>
          <button type="submit" class="btn btn-primary">💾 Update Invoice</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- SCRIPT SECTION -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const STORAGE_KEY = 'edit_invoice_{{ $invoice->id }}';
  const dbItems = @json($dbItems);
  let invoiceItems = JSON.parse(localStorage.getItem(STORAGE_KEY)) || dbItems || [];

  const tableBody = document.querySelector('#invoiceTable tbody');
  const customerName = document.getElementById('customerName');
  const customerPhone = document.getElementById('customerPhone');

  function recalcItem(item) {
    item.price = Number(item.price) || 0;
    item.quantity = parseInt(item.quantity) || 0;
    item.discount_percent = Number(item.discount_percent) || 0;

    item.subtotal = +(item.price * item.quantity);
    item.discount_amount = +((item.subtotal * item.discount_percent) / 100);
    item.total = +(item.subtotal - item.discount_amount);

    item.subtotal = +item.subtotal.toFixed(2);
    item.discount_amount = +item.discount_amount.toFixed(2);
    item.total = +item.total.toFixed(2);
  }

  function render() {
    tableBody.innerHTML = '';
    let subtotalSum = 0, discountSum = 0, totalSum = 0;

    invoiceItems.forEach((it, idx) => {
      recalcItem(it);
      subtotalSum += it.subtotal;
      discountSum += it.discount_amount;
      totalSum += it.total;

      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${idx + 1}</td>
        <td><input data-idx="${idx}" data-field="medicine_name" class="form-control" value="${escapeHtml(it.medicine_name)}"></td>
        <td><input data-idx="${idx}" data-field="category" class="form-control" value="${escapeHtml(it.category)}"></td>
        <td><input data-idx="${idx}" data-field="price" type="number" step="0.01" class="form-control" value="${it.price}"></td>
        <td><input data-idx="${idx}" data-field="quantity" type="number" class="form-control" min="0" value="${it.quantity}"></td>
        <td><input data-idx="${idx}" data-field="discount_percent" type="number" step="0.01" class="form-control" min="0" max="100" value="${it.discount_percent}"></td>
        <td><input class="form-control" readonly value="${it.subtotal.toFixed(2)}"></td>
        <td><input class="form-control" readonly value="${it.discount_amount.toFixed(2)}"></td>
        <td><input class="form-control" readonly value="${it.total.toFixed(2)}"></td>
        <td><button type="button" class="btn btn-sm btn-danger btn-remove" data-idx="${idx}">X</button></td>`;
      tableBody.appendChild(row);
    });

    document.getElementById('subtotalText').innerText = 'Rs. ' + subtotalSum.toFixed(2);
    document.getElementById('discountText').innerText = 'Rs. ' + discountSum.toFixed(2);
    document.getElementById('grandTotalText').innerText = 'Rs. ' + totalSum.toFixed(2);

    updateHiddenInput();
    attachInputListeners();
  }

  function attachInputListeners() {
    const inputs = tableBody.querySelectorAll('input[data-idx]');
    inputs.forEach(inp => {
      inp.onchange = function () {
        const idx = Number(this.dataset.idx);
        const field = this.dataset.field;
        let val = this.value;
        if (['price','quantity','discount_percent'].includes(field)) val = Number(val) || 0;
        invoiceItems[idx][field] = val;
        if (['price','quantity','discount_percent'].includes(field)) recalcItem(invoiceItems[idx]);
        saveToLocal(); render();
      };
    });

    const removes = tableBody.querySelectorAll('.btn-remove');
    removes.forEach(btn => {
      btn.onclick = function () {
        invoiceItems.splice(Number(this.dataset.idx), 1);
        saveToLocal(); render();
      };
    });
  }

  function saveToLocal() {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(invoiceItems));
  }

  function updateHiddenInput() {
    const payload = {
      customerName: customerName.value,
      customerPhone: customerPhone.value,
      items: invoiceItems,
      totalBeforeDisc: invoiceItems.reduce((s, it) => s + (it.subtotal || 0), 0),
      subdiscount: invoiceItems.reduce((s, it) => s + (it.discount_amount || 0), 0),
      totalAfterDiscount: invoiceItems.reduce((s, it) => s + (it.total || 0), 0),
    };
    document.getElementById('invoice_data').value = JSON.stringify(payload);
  }

  function escapeHtml(str) {
    return String(str || '').replace(/[&<>"']/g, m => ({
      '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'
    }[m]));
  }

  document.getElementById('btnAddToLocal').addEventListener('click', function () {
    const sel = document.getElementById('medicineSelect');
    if (!sel.value) return alert('Select a medicine');
    const opt = sel.selectedOptions[0];
    const name = opt.dataset.name || opt.textContent.trim();
    const category = opt.dataset.category || '';
    const price = parseFloat(opt.dataset.price) || 0;
    const qty = parseInt(document.getElementById('addQty').value) || 1;
    const discount_percent = parseFloat(document.getElementById('addDiscount').value) || 0;

    const newItem = { medicine_id: sel.value, medicine_name: name, category, price, quantity: qty, discount_percent };
    recalcItem(newItem);
    invoiceItems.push(newItem);
    saveToLocal(); render();

    sel.selectedIndex = 0;
    document.getElementById('addQty').value = 1;
    document.getElementById('addDiscount').value = '';
  });

  document.getElementById('btnClearLocal').addEventListener('click', function () {
    if (!confirm('Clear local changes?')) return;
    localStorage.removeItem(STORAGE_KEY);
    invoiceItems = dbItems.slice(); render();
  });

  document.getElementById('saveForm').addEventListener('submit', function () {
    updateHiddenInput();
  });

  // 🔍 Search filter for medicines
  const searchInput = document.getElementById('searchMedicine');
  const medicineSelect = document.getElementById('medicineSelect');
  searchInput.addEventListener('input', function() {
    const search = this.value.toLowerCase();
    const options = medicineSelect.querySelectorAll('option');
    options.forEach(opt => {
      if (opt.value === '') return;
      const name = opt.dataset.name?.toLowerCase() || '';
      const category = opt.dataset.category?.toLowerCase() || '';
      const price = String(opt.dataset.price || '').toLowerCase();
      opt.style.display = (name.includes(search) || category.includes(search) || price.includes(search)) ? '' : 'none';
    });
  });

  render();
});
</script>

@endsection
