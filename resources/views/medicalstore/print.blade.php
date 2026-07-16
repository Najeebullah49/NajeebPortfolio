<!DOCTYPE html>
<html>
<head>
  <title>Invoice #{{ $invoice->invoice_number }}</title>
  <style>
    body {
      font-family: monospace;
      width: 260px;
      margin: auto;
      background: #fff;
      font-size: 13px;
      line-height: 1.2;
    }
    .center { text-align: center; }
    hr { border: 1px dashed #000; margin: 4px 0; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 2px 0; text-align: left; }
    th { border-bottom: 1px dashed #000; }
    .totals { margin-top: 4px; }
    .totals-row {
      display: flex;
      justify-content: space-between;
      margin: 2px 0;
    }
    h3, h5, p {
      margin: 2px 0;
      padding: 0;
    }
    @media print {
      body {
        width: 100%;
        margin: 0;
      }
    }
  </style>
</head>
<body onload="window.print()">

  <div class="center">
    <h3>Younas Medicine Company</h3>
    <h5>Whole Sale Medicine Store</h5>
    <h5>Main Bazar Shop No 44</h5>
    <h5>Phone: 0305-9024545 - 0303-8533383</h5>
    <h5>Email: mirajbjr.04@outlook.com</h5>
    <hr>
  </div>

  <div>
    <h5>Customer:  {{ $invoice->customer_name }}</h5>
    <h5>Phone: {{ $invoice->customer_phone }}</h5>
    <h5>Date: <small>{{ now()->format('d-m-Y H:i') }}</small></h5>
  </div>

  <p><strong>Invoice No:</strong> {{ $invoice->invoice_number }}</p>
  <hr>

  <table>
    <thead>
      <tr>
        <th>Qty</th>
        <th>Product</th>
        <th>Price</th>
        <th>Disc%</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($invoice->items as $item)
        <tr>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->medicine_name }}</td>
          <td>{{ number_format($item->price, 2) }}</td>
          <td>{{ number_format($item->discount_percent ?? 0, 2) }}</td>
          <td>{{ number_format($item->total, 2) }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <hr>

  <div class="totals">
    <div class="totals-row">
      <strong>Subtotal:</strong>
      <span>{{ number_format($invoice->totalBeforeDisc, 2) }}</span>
    </div>
    <div class="totals-row">
      <strong>Discount:</strong>
      <span>{{ number_format($invoice->subdiscount, 2) }}</span>
    </div>
      <hr>
    <div class="totals-row">
      <strong>Grand Total:</strong>
      <span>{{ number_format($invoice->totalAfterDiscount, 2) }}</span>
    </div>
  
    <div class="totals-row">
      <strong>Previous Bill:</strong>
      <span></span>
    </div>
  </div>



  <div class="center">
    <p>Thank you for shopping! 💊</p>
  </div>

</body>
</html>
