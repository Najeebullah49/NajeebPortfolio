@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Medicine - Inventory</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4 mt-5 me-1">
  
  @if(session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
  @endif
  @if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @endif

  <h2 class="mb-4 text-center">Upload Medicine</h2>

  <!-- Medicine Upload Form -->
  <div class="card shadow-sm p-4 mb-4">
    <form action="{{ route('stock.store') }}" method="POST">
      @csrf
      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label">Medicine Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter medicine name" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Category</label>
          <select name="category" class="form-select" required>
            <option value="" selected disabled>Choose category...</option>
            <option value="Tablet">Tablet</option>
            <option value="Capsule">Capsule</option>
            <option value="Syrup">Syrup</option>
            <option value="Injection">Injection</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Quantity</label>
          <input type="number" name="quantity" class="form-control" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-6 col-md-3">
          <label class="form-label">Purchase Price</label>
          <input type="number" step="0.01" name="purchaseprice" class="form-control" required>
        </div>
        <div class="col-sm-6 col-md-3">
          <label class="form-label">Sale Price</label>
          <input type="number" step="0.01" name="saleprice" class="form-control" required>
        </div>
        <div class="col-sm-6 col-md-3">
          <label class="form-label">Issue Date</label>
          <input type="date" name="issue_date" class="form-control">
        </div>
        <div class="col-sm-6 col-md-3">
          <label class="form-label">Expiry Date</label>
          <input type="date" name="expiry_date" class="form-control">
        </div>
      </div>

      <button type="submit" class="btn btn-primary w-100">Add Medicine</button>
    </form>
  </div>

  <!-- Search Bar -->
  <div class="d-flex justify-content-end mb-1">
    <input type="text" id="searchInput" class="form-control text-center w-50" placeholder="🔍 Search by name, category, price, etc.">
  </div>

  <!-- Stock Table -->
  <div class="card shadow-sm p-4">
    <h4 class="mb-3">Current Stock</h4>
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
        </tr>
      </thead>
      <tbody id="medicineTableBody">
        @foreach($medicines as $med)
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
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<script>
  // 🔍 Search Filter
  document.getElementById('searchInput').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#medicineTable tbody tr');
    rows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(filter) ? '' : 'none';
    });
  });
</script>

</body>
</html>

@endsection
