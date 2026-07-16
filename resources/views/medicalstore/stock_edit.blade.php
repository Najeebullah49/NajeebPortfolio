@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')
<div class="container mt-5 me-1">
    <div class="container mt-5">
  <h3 class="text-center mb-4 text-success fw-bold">💊 Edit Medicine Details</h3>

  {{-- 🔴 Validation Errors --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- ✅ Success Message --}}
  @if (session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @endif

  <form action="{{ route('stock.update', $medicine->id) }}" method="POST" class="card p-4 shadow-sm border-0">
    @csrf
    @method('PUT')

    <table class="table table-bordered align-middle" text-sm-center>
      <tr>
        <th width="30%">Name</th>
        <td><input type="text" name="name" class="form-control" value="{{ old('name', $medicine->name) }}" required></td>
      </tr>

      <tr>
        <th>Category</th>
        <td><input type="text" name="category" class="form-control" value="{{ old('category', $medicine->category) }}"></td>
      </tr>

      <tr>
        <th>Quantity</th>
        <td><input type="number" name="quantity" class="form-control" value="{{ old('quantity', $medicine->quantity) }}" min="0" required></td>
      </tr>

      <tr>
        <th>Purchase Price</th>
        <td><input type="number" step="0.01" name="purchaseprice" class="form-control" value="{{ old('purchaseprice', $medicine->purchaseprice) }}" required></td>
      </tr>

      <tr>
        <th>Sale Price</th>
        <td><input type="number" step="0.01" name="saleprice" class="form-control" value="{{ old('saleprice', $medicine->saleprice) }}" required></td>
      </tr>

      <tr>
        <th>Total </th>
        <td><input type="number" step="0.01" name="total" class="form-control" value="{{ old('total', $medicine->total) }}" readonly></td>
      </tr>

      <tr>
        <th>Issue Date</th>
        <td><input type="date" name="issue_date" class="form-control" value="{{ old('issue_date', $medicine->issue_date) }}" required></td>
      </tr>

      <tr>
        <th>Expiry Date</th>
        <td><input type="date" name="expiry_date" class="form-control" value="{{ old('expiry_date', $medicine->expiry_date) }}"></td>
      </tr>
    </table>

   <div class="row mt-4 g-2">
  <div class="col-12 col-md-6">
    <a href="{{ route('current.stock') }}" class="btn btn-secondary w-100">
      ⬅ Back
    </a>
  </div>
  <div class="col-12 col-md-6">
    <button type="submit" class="btn btn-success w-100">
      💾 Update Medicine
    </button>
  </div>
</div>

  </form>
</div>

</div>
@endsection
