@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')
<div class="container mt-5 me-1">
    <div class="container mt-5">
  <h3 class="text-center mb-4">Medicine Details</h3>
  <table class="table table-bordered">
    <tr><th>Name</th><td>{{ $medicine->name }}</td></tr>
    <tr><th>Category</th><td>{{ $medicine->category }}</td></tr>
    <tr><th>Quantity</th><td>{{ $medicine->quantity }}</td></tr>
     <tr><th>Purchase Price</th><td>{{ $medicine->purchaseprice }}</td></tr>
    <tr><th>Sale Price</th><td>{{ $medicine->saleprice }}</td></tr>
    <tr><th>Total</th><td>{{ $medicine->total }}</td></tr>
    <tr><th>Issue Date</th><td>{{ $medicine->issue_date }}</td></tr>
    <tr><th>Expiry Date</th><td>{{ $medicine->expiry_date }}</td></tr>
  </table>
  <a href="{{ route('current.stock') }}" class="btn btn-secondary">Back</a>
</div>
</div>
@endsection
