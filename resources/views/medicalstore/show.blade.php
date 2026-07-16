@extends('medicalstore.adminlayouts.adminLayout')
@section('admincontent')
<div class="container mt-5 me-1">
  <div class="container ">
  <h3 class="mb-3 mt-5">Serial No: {{ $invoice->id }}</h3>
   <h5 class="mb-3">Invoice Number: {{ $invoice->invoice_number }}</h5>
  <small class="text-primary "><b class="text-dark">Customer:</b> {{$invoice->customer_name }}</small>
 <small class="text-primary ms-3"><b class="text-dark">Phone:</b> {{ $invoice->customer_phone }}</small>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product</th>
        <th>Category</th>
        <th>Qty</th>
        <th>Sale Price</th>
         <th>Sub Total</th>
        <th>Discount (%)</th>
         <th>Discount Amount</th>
        <th>Total After Discount</th>
      </tr>
    </thead>
    <tbody>
      @foreach($invoice->items as $item)
      <tr>
        <td>{{ $item->medicine_name }}</td>
        <td>{{ $item->category }}</td>
        <td>{{ $item->quantity }}</td>
        <td>{{ $item->price }}</td>
          <td>{{ $item->subtotal}}</td>
        <td>{{ $item->discount_percent }}</td>
          <td>{{ $item->discount_amount }}</td>
        <td>{{ $item->total }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <p><strong>Subtotal:</strong> Rs. {{ $invoice->totalBeforeDisc }}</p>
  <p><strong>Discount:</strong> {{ $invoice->subdiscount }}%</p>
  <p><strong>Total:</strong> Rs. {{ $invoice->totalAfterDiscount }}</p>

  <a href="{{ route('admin.invoice_list') }}" class="btn btn-secondary">Back</a>
</div>
</div>
@endsection
