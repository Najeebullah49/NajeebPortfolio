@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')
<div class="container mt-3 me-1">
  <div class="container my-5 ">
  <h3 class="text-center text-success fw-bold mb-4">💊 Sell Medicine</h3>

  <!-- Medicine & Customer Form -->
  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
      <form id="sellForm" class="row gy-3 gx-3 align-items-end">
        @csrf

        <!-- 🔍 Search + Select Medicine -->
        <div class="col-12">
          <label class="form-label fw-semibold">Select Medicine</label>
          <div class="row g-2 align-items-center">
            <!-- Search -->
            <div class="col-md-5 col-12">
              <div class="position-relative">
                <i class="bi bi-search position-absolute" style="left:12px; top:10px; color:#6c757d;"></i>
                <input type="text" id="searchMedicine" class="form-control ps-4"
                       placeholder="Search by name, category, or price...">
              </div>
            </div>

            <!-- Select -->
            <div class="col-md-7 col-12">
              <select id="medicineSelect" class="form-select" size="6" required>
                <option value="">Choose...</option>
                @foreach($medicines as $med)
                  <option value="{{ $med->id }}"
                          data-name="{{ $med->name }}"
                          data-price="{{ $med->saleprice }}"
                          data-category="{{ $med->category }}"
                          data-quantity="{{ $med->quantity }}">
                    {{ $med->name }} — Cat: {{ $med->category }} | Qty: {{ $med->quantity }} | Rs.{{ $med->saleprice }}
                 
                  </option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <!-- Customer Info -->
        <div class="col-md-4 col-12">
          <label class="form-label fw-semibold mt-3">Customer Name</label>
          <input type="text" id="customerName" class="form-control rounded-3" placeholder="Enter name" required>
        </div>

        <div class="col-md-4 col-12">
          <label class="form-label fw-semibold mt-3">Phone Number</label>
          <input type="text" id="customerPhone" class="form-control rounded-3" placeholder="03XXXXXXXXX" required>
        </div>

        <!-- Quantity / Discount / Sell -->
        <div class="col-md-2 col-12">
          <label class="form-label fw-semibold mt-3">Quantity</label>
          <div id="qtyError"></div>
          <input type="number" id="quantity" class="form-control rounded-3" min="1" required>
        </div>

        <div class="col-md-2 col-12">
          <label class="form-label fw-semibold mt-3">Discount (%)</label>
          <input type="number" id="rowDiscount" class="form-control rounded-3"
                 step="0.01" min="0" max="100" placeholder="e.g. 10.5">
        </div>

        <div class="col-md-2 col-12 d-grid mt-4 text-center">
          <button type="submit" class="btn btn-success rounded-pill fw-semibold mt-2">💊 Sell</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Invoice Table -->
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <h5 class="fw-bold text-success mb-3">🧾 Invoice</h5>
      <table class="table table-bordered align-middle text-center" id="invoiceTable">
        <thead class="table-success">
          <tr>
            <th>#</th>
            <th>Medicine</th>
            <th>Category</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Discount (%)</th>
            <th>Total</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>

      <!-- Totals Section -->
      <div class="mt-4">
        <div class="row mb-2">
          <div class="col-6 text-start fw-semibold">Subtotal:</div>
          <div class="col-6 text-end" id="subtotal">Rs. 0.00</div>
        </div>
        <div class="row mb-2">
          <div class="col-6 text-start fw-semibold">Discount:</div>
          <div class="col-6 text-end" id="subdiscount">Rs. 0.00</div>
        </div>
        <div class="row">
          <div class="col-6 text-start fw-bold fs-5">Grand Total:</div>
          <div class="col-6 text-end fw-bold fs-5 text-success" id="grandtotal">Rs. 0.00</div>
        </div>
      </div>

      <form id="finalForm" action="{{ route('invoice.store') }}" method="POST">
        @csrf
        <input type="hidden" name="invoice_data" id="invoiceDataInput">
        <div class="text-end mt-4">
          <button type="submit" class="btn btn-primary rounded-pill px-4">💾 Save Invoice</button>
          <button type="button" class="btn btn-outline-danger rounded-pill px-4" onclick="clearInvoice()">🧹 Clear</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- ✅ JavaScript Section -->
<script>
let invoice = [];
const nameInput = document.getElementById('customerName');
const phoneInput = document.getElementById('customerPhone');

// 🧾 Sell Form Submit
document.getElementById('sellForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const selected = document.getElementById('medicineSelect').selectedOptions[0];
  if (!selected || !selected.value) {
    alert('⚠️ Please select a medicine.');
    return;
  }

  const name = selected.getAttribute('data-name');
  const price = parseFloat(selected.getAttribute('data-price'));
  const category = selected.getAttribute('data-category');
  const availableQty = parseInt(selected.getAttribute('data-quantity'));
  const quantity = parseInt(document.getElementById('quantity').value);
  const discountPercent = parseFloat(document.getElementById('rowDiscount').value) || 0;

  // ❗ Stock Check
  if (quantity > availableQty) {
    document.getElementById('qtyError').innerHTML = '<small class="text-danger">⚠️ Not enough stock!</small>';
    return;
  } else {
    document.getElementById('qtyError').innerHTML = '';
  }

  // 🧮 Calculate amounts
  const lineTotalBefore = price * quantity;
  const discountAmount = +((lineTotalBefore * discountPercent) / 100).toFixed(2);
  const lineTotalAfter = +(lineTotalBefore - discountAmount).toFixed(2);

  // ✅ Push to invoice array
  invoice.push({
    name,
    category,
    quantity,
    price,
    discount_percent: discountPercent,  // saved in percent
    discount_amount: discountAmount,    // saved in Rs (amount)
    subtotal: +lineTotalBefore.toFixed(2),
    total: lineTotalAfter
  });

  renderInvoice();
  document.getElementById('sellForm').reset();
});

// 🧾 Render Invoice Table
function renderInvoice() {
  const tbody = document.querySelector('#invoiceTable tbody');
  tbody.innerHTML = '';

  let subtotal = 0;
  let totalDiscount = 0;

  invoice.forEach((item, i) => {
    subtotal += item.subtotal;
    totalDiscount += item.discount_amount;

    tbody.innerHTML += `
      <tr>
        <td>${i + 1}</td>
        <td>${item.name}</td>
        <td>${item.category}</td>
        <td>${item.quantity}</td>
        <td>Rs. ${item.price.toFixed(2)}</td>
        <td>${item.discount_percent.toFixed(2)}%</td>
        <td>Rs. ${item.total.toFixed(2)}</td>
        <td><button class="btn btn-sm btn-danger" onclick="removeItem(${i})">X</button></td>
      </tr>`;
  });

  const grandTotal = subtotal - totalDiscount;

  // 💰 Update totals
  document.getElementById('subtotal').innerText = 'Rs. ' + subtotal.toFixed(2);
  document.getElementById('subdiscount').innerText = 'Rs. ' + totalDiscount.toFixed(2);
  document.getElementById('grandtotal').innerText = 'Rs. ' + grandTotal.toFixed(2);

  // 🧾 Save all data in hidden input for backend
  document.getElementById('invoiceDataInput').value = JSON.stringify({
    items: invoice,
    subtotal,
    subdiscount: totalDiscount,
    total: grandTotal,
    customerName: nameInput.value,
    customerPhone: phoneInput.value
  });
}

// ❌ Remove item
function removeItem(i) {
  invoice.splice(i, 1);
  renderInvoice();
}

// 🧹 Clear Invoice
function clearInvoice() {
  invoice = [];
  renderInvoice();
}

// 🔍 Search Filter
document.getElementById('searchMedicine').addEventListener('keyup', function() {
  const filter = this.value.toLowerCase();
  const options = document.querySelectorAll('#medicineSelect option');
  options.forEach(opt => {
    const text = opt.textContent.toLowerCase();
    opt.style.display = text.includes(filter) ? '' : 'none';
  });
});
</script>

@endsection
