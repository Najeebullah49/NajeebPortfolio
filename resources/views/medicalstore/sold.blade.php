@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sold Medicines - Inventory</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .search-box {
      max-width: 400px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body class="bg-light">

<div class="container mt-5 me-1">
  <h2 class="mt-5 text-center fw-bold text-success">💊 Sold Medicines</h2>

  <!-- 🔍 Search Bar -->
  <div class="d-flex justify-content-end">
    <input type="text" id="searchInput" class="form-control search-box" placeholder="🔍 Search by Name, Category, or Price">
  </div>

  <div class="card shadow-sm border-0 mt-3">
    <div class="card-body">
      <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
          <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Qty</th>
            <th>Price (Rs)</th>
            <th>Total (Rs)</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody id="medicineTable">
          @foreach($sold as $s)
          <tr>
            <td>{{ $s->medicine_name }}</td>
            <td>{{ $s->category }}</td>
            <td>{{ $s->quantity }}</td>
            <td>{{ $s->price }}</td>
            <td>{{ $s->total }}</td>
            <td>{{ $s->created_at->format('Y-m-d') }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- 🔍 Real-time Search Script -->
<script>
  document.getElementById('searchInput').addEventListener('keyup', function() {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#medicineTable tr');

    rows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(filter) ? '' : 'none';
    });
  });
</script>

</body>
</html>
@endsection
