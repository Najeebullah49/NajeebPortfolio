@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Medicine - Inventory</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .search-box {
      max-width: 400px;
      width: 100%;
      margin-bottom: 20px;
    }
    .table-responsive {
      overflow-x: auto;
    }
  </style>
</head>

<body class="bg-light">
<div class="container mt-5 py-4 me-1">

 

  {{-- Flash Messages --}}
  @if(session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
  @endif
  @if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @endif

  {{-- Total Cost --}}
  <div class="d-flex justify-content-center text-center flex-wrap">
    <h4 class="fw-bold text-dark mb-3">
      🧾 Total Purchase:
      <span class="text-primary">{{ number_format($total, 2) }}</span> Rs
       🧾 Total Sold:
      <span class="text-primary">{{ number_format($soldtotal, 2) }}</span> Rs
        🧾 Profit:
      <span class="text-primary">{{ number_format($profit, 2) }}</span> Rs
    </h4>
  </div>
  
 <h2 class="mb-4 text-center text-primary fw-bold">💊 Current Stock</h2>
  {{-- Search Box --}}
  <div class="d-flex justify-content-center mt-3">
    <input type="text" id="searchInput" class="form-control search-box text-center" placeholder="🔍 Search by name, category, price, etc.">
  </div>

  {{-- Responsive Table --}}
  <div class="card shadow-sm p-3 mt-4">
    <h5 class="mb-3 fw-bold">📦 Current Stock</h5>
    <div class="table-responsive">
      <table class="table table-bordered table-striped align-middle text-center" id="medicineTable">
        <thead class="table-dark">
          <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Purchase Price</th>
             <th>Purchase Total</th>
            <th>Sale Price</th>
            <th>Sale Total</th>
            <th>Issue Date</th>
            <th>Expiry Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="medicineTableBody">
          @foreach($medicines->sortBy(fn($m) => strtolower($m->name)) as $med)
            @php
                $isExpired = $med->expiry_date <= now()->toDateString();
                $isOutOfStock = $med->quantity == 0;
            @endphp
            <tr class="{{ $isExpired ? 'table-danger' : ($isOutOfStock ? 'table-warning' : '') }}">
              <td>{{ $med->name }}</td>
              <td>{{ $med->category }}</td>
              <td>{{ $med->quantity }}</td>
              <td>{{ $med->purchaseprice }}</td>
               <td>{{ $med->purchasetotal }}</td>
              <td>{{ $med->saleprice }}</td>
              <td>{{ $med->total }}</td>
              <td>{{ $med->issue_date }}</td>
              <td>
                {{ $med->expiry_date }}
                @if($isExpired)
                  <div class="text-danger small fw-bold mt-1">⚠️ Expired!</div>
                @elseif($isOutOfStock)
                  <div class="text-warning small fw-bold mt-1">⚠️ Out of stock!</div>
                @endif
              </td>

              {{-- ✅ Action Buttons --}}
              <td class="text-center">
                <div class="d-flex flex-column flex-md-row justify-content-center gap-2">
                  <a href="{{ route('stock.show', $med->id) }}" class="btn btn-sm btn-info w-100 w-md-auto">View</a>
                  <a href="{{ route('stock.edit', $med->id) }}" class="btn btn-sm btn-warning w-100 w-md-auto">Edit</a>
                  <form action="{{ route('stock.destroy', $med->id) }}" method="POST" class="d-inline w-100 w-md-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger w-100 w-md-auto"
                      onclick="return confirm('Are you sure you want to delete this item?')">
                      Delete
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

{{-- 🔍 Search Filter --}}
<script>
  document.getElementById('searchInput').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#medicineTable tbody tr');
    rows.forEach(row => {
      row.style.display = row.textContent.toLowerCase().includes(filter) ? '' : 'none';
    });
  });
</script>

</body>
</html>
@endsection
