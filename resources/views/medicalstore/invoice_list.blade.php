@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Invoices - Medical Inventory</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .search-box {
      max-width: 400px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-4 mt-5 me-1">
  <h2 class="mb-4 text-center">📜 Invoices</h2>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  @if($invoices->isEmpty())
    <div class="alert alert-info">No invoices found.</div>
  @else

    <!-- 🔍 Search Bar -->
    <div class="d-flex justify-content-end mb-3">
      <input type="text" id="searchInput" class="form-control search-box" placeholder="🔍 Search by invoice #, date, or time">
    </div>

    <div class="accordion" id="invoiceAccordion">
      @foreach($invoices as $index => $invoice)
        <div class="accordion-item mb-2 shadow-sm rounded invoice-item">
          <h2 class="accordion-header" id="heading{{ $index }}">
            <button 
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapse{{ $index }}"
              aria-expanded="false"
              aria-controls="collapse{{ $index }}">
              <strong>Invoice #{{ $invoice->id }}</strong>
              <span class="ms-2 text-muted">Date: {{ $invoice->created_at->format('d M Y, h:i A') }}</span>
            </button>
          </h2>

          <div id="collapse{{ $index }}" class="accordion-collapse collapse">
            <div class="accordion-body">
              
              <table class="table table-bordered align-middle">
                <thead class="table-light">
                  <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Qty</th>
                    <th>Price (Rs)</th>
                     <th>Discount (%)</th>
                    <th>Total (Rs)</th>
                     <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @php $total = 0; @endphp
                  @foreach($invoice->items as $key => $item)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $item->medicine_name }}</td>
                      <td>{{ $item->category }}</td>
                      <td>{{ $item->quantity }}</td>
                      <td>{{ number_format($item->price, 2) }}</td>
                      <td>{{ number_format($item->discount_percent, 2) }}</td>
                      <td>{{ number_format($item->total, 2) }}</td>
                     <td>
  <a href="{{ route('admin.invoices.show', $invoice->id) }}" class="btn btn-success btn-sm">View</a>
  <a href="{{ route('admin.invoices.edit', $invoice->id) }}" class="btn btn-warning btn-sm">Edit</a>
  <form action="{{ route('admin.invoices.destroy', $invoice->id) }}" method="POST" class="d-inline">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this invoice?')">Delete</button>
  </form>
</td>
                      @php $total += $item->total; @endphp
                    </tr>
                  @endforeach
                </tbody>
              </table>

              <div class="text-end mt-3">
                <p><strong>Total:</strong> Rs. {{ number_format($invoice->totalBeforeDisc, 2) }}</p>
                <p><strong>Discount:</strong> Rs. {{ number_format($invoice->subdiscount, 2) }}</p>
                <p class="fs-5"><strong>Net Total:</strong> Rs. {{ number_format($invoice->totalAfterDiscount, 2) }}</p>
              </div>

            <div class="text-end">
                <a href="{{ route('admin.print', $invoice->id) }}" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-print"></i> Print
                </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- 🔍 Real-time Search Script -->
<script>
  document.getElementById('searchInput').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const invoices = document.querySelectorAll('.invoice-item');

    invoices.forEach(invoice => {
      const text = invoice.textContent.toLowerCase();
      invoice.style.display = text.includes(filter) ? '' : 'none';
    });
  });
</script>

<!-- 🖨️ Print Function -->
<script>
  function printInvoice(index, id) {
    const content = document.getElementById('collapse' + index).innerHTML;
    const w = window.open('', '', 'width=600,height=800');
    w.document.write('<html><head><title>Invoice #' + id + '</title>');
    w.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">');
    w.document.write('</head><body class="p-3">');
    w.document.write('<h4 class="text-center mb-3">Medical Invoice #' + id + '</h4>');
    w.document.write(content);
    w.document.write('</body></html>');
    w.document.close();
    w.print();
  }
</script>

<!-- ✅ Fix Accordion Toggle (click again to close) -->
<script>
  document.querySelectorAll('.accordion-button').forEach(button => {
    button.addEventListener('click', function() {
      const target = document.querySelector(this.dataset.bsTarget);
      const isShown = target.classList.contains('show');
      const all = document.querySelectorAll('.accordion-collapse.show');

      all.forEach(el => el.classList.remove('show')); // close all
      if (!isShown) target.classList.add('show'); // reopen if was closed
    });
  });
</script>

</body>
</html>
@endsection
