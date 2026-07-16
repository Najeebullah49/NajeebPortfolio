<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;   // ✅ import Stock model
use App\Models\Sold;    // ✅ import Sold model
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Carbon\Carbon;
class InvoiceController extends Controller
{

public function dailyInvoices()
{
    $invoices = \App\Models\Invoice::with(['items' => function($query) {
        $query->orderBy('medicine_name', 'asc'); // Sort A → Z
    }])
    ->whereDate('created_at', \Carbon\Carbon::today())
    ->latest()
    ->get();

    return view('medicalstore.dailyinvoice', compact('invoices'));
}

public function weeklyInvoices()
{
    $invoices = \App\Models\Invoice::with(['items' => function($query) {
        $query->orderBy('medicine_name', 'asc'); // sort A → Z
    }])
    ->whereBetween('created_at', [
        \Carbon\Carbon::now()->startOfWeek(),
        \Carbon\Carbon::now()->endOfWeek(),
    ])
    ->latest()
    ->get();

    return view('medicalstore.weeklyinvoice', compact('invoices'));
}

// public function weeklyInvoices() {
//     $invoices = Invoice::whereBetween('created_at', [
//         Carbon::now()->startOfWeek(),
//         Carbon::now()->endOfWeek()
//     ])->latest()->get();
//     return view('admin.weeklyinvoice', compact('invoices'));
// }

public function monthlyInvoices()
{
    $invoices = \App\Models\Invoice::with(['items' => function($query) {
        $query->orderBy('medicine_name', 'asc'); // sort alphabetically A → Z
    }])
    ->whereMonth('created_at', \Carbon\Carbon::now()->month)
    ->whereYear('created_at', \Carbon\Carbon::now()->year)
    ->latest()
    ->get();

    return view('medicalstore.monthlyinvoice', compact('invoices'));
}


public function yearlyInvoices()
{
    $invoices = \App\Models\Invoice::with(['items' => function($query) {
        $query->orderBy('medicine_name', 'asc'); // sort alphabetically A → Z
    }])
    ->whereYear('created_at', \Carbon\Carbon::now()->year)
    ->latest()
    ->get();

    return view('medicalstore.yearlyinvoice', compact('invoices'));
}



public function index()
{
    // Fetch medicines where quantity > 0 and order by name A → Z (case-insensitive)
    $medicines = Stock::where('quantity', '>', 0)
        ->orderByRaw('LOWER(name) ASC')
        ->get();

    $invoices = Invoice::all();

    return view('medicalstore.invoice', compact('medicines', 'invoices'));
}


//    public function index() {
//  $medicines = Stock::where('quantity', '>', 0)->get();
// $invoices  = Invoice::all();
// return view('admin.invoice', compact('medicines', 'invoices'));
// }

    public function sell(Request $request) {
        $request->validate([
            'stock_id' => 'required|exists:stocks,id', // ✅ check table name carefully
            'quantity' => 'required|integer|min:1'
        ]);

        $stock = Stock::findOrFail($request->stock_id);

        if ($request->quantity > $stock->quantity) {
            return back()->with('error', 'Not enough stock available.');
        }

        // Calculate
        $total = $stock->price * $request->quantity;

        // Save in Sold
        $sale = Sold::create([
            'stock_id' => $stock->id,
            'name'     => $stock->name,
            'category' => $stock->category,
            'quantity' => $request->quantity,
            'price'    => $stock->price,
            'total'    => $total,
            'sale_date'=> now(),
        ]);

        // Update stock
        $stock->quantity -= $request->quantity;
        if ($stock->quantity <= 0) {
            $stock->delete(); // remove item if empty
        } else {
            $stock->save();
        }

        // Redirect to print invoice
        return redirect()->route('admin.print', ['id' => $sale->id])
                         ->with('success', 'Sale completed');
    }

//   public function print($id)
// {
//     // Find the invoice by ID (or fail if not found)
//     $invoice = Invoice::with('items')->findOrFail($id);

//     // Pass the invoice (and its related items) to the view
//     return view('admin.print', compact('invoice'));
// }

public function print($id)
{
    // 🧾 Find the invoice with its related items
    $invoice = \App\Models\Invoice::with('items')->findOrFail($id);

    // 🔠 Sort the invoice items alphabetically by medicine name (A → Z)
    $invoice->items = $invoice->items->sortBy(fn($item) => strtolower($item->medicine_name))->values();

    // 📄 Pass the invoice to the view
    return view('medicalstore.print', compact('invoice'));
}


public function store(Request $request)
{
    // decode incoming JSON
    $data = json_decode($request->input('invoice_data'), true);

    if (!is_array($data) || empty($data['items'])) {
        return back()->with('error', 'Invalid invoice data.');
    }

    // normalize / default top-level fields
    $customerName = $data['customerName'] ?? null;
    $customerPhone = $data['customerPhone'] ?? null;
    $subtotal = floatval($data['subtotal'] ?? 0);
    $subdiscount = floatval($data['subdiscount'] ?? 0);
    $total = floatval($data['total'] ?? 0);

    // create invoice
    $invoice = \App\Models\Invoice::create([
        'customer_name' => $customerName,
        'customer_phone' => $customerPhone,
        'totalBeforeDisc' => $subtotal,
        'subdiscount' => $subdiscount,
        'totalAfterDiscount' => $total,
    ]);

    // save items (defensive)
    foreach ($data['items'] as $item) {
        // if expected fields missing, set sensible defaults
        $name = $item['name'] ?? ($item['medicine_name'] ?? 'Unknown');
        $category = $item['category'] ?? null;
        $quantity = intval($item['quantity'] ?? 0);
        $price = floatval($item['price'] ?? 0);
        $discountPercent = floatval($item['discount_percent'] ?? $item['discount'] ?? 0); // accept either
        $discountAmount = floatval($item['discount_amount'] ?? $item['discount'] ?? 0);
        $subtotalLine = floatval($item['subtotal'] ?? ($price * $quantity));
        $totalLine = floatval($item['total'] ?? ($subtotalLine - $discountAmount));

        \App\Models\InvoiceItem::create([
            'invoice_id' => $invoice->id,
            'medicine_name' => $name,
            'category' => $category,
            'quantity' => $quantity,
            'price' => $price,
            'discount_percent' => $discountPercent,
            'discount_amount' => $discountAmount,
            'subtotal' => $subtotalLine,
            'total' => $totalLine,
        ]);
    }

    return back()->with('success', 'Invoice saved successfully!');
}

public function invoice_list()
{
    $invoices = \App\Models\Invoice::with(['items' => function($query) {
        $query->orderBy('medicine_name', 'asc'); // sort alphabetically
    }])->latest()->get();

    return view('medicalstore.invoice_list', compact('invoices'));
}



// public function invoice_list()
// {
//     $invoices = \App\Models\Invoice::with('items')->latest()->get();
//     return view('admin/invoice_list', compact('invoices'));
    
// }

public function current_stock()
{
    $medicines = Stock::orderByRaw('LOWER(name) ASC')->get();
    $soldtotal = Stock::sum('total');
    $total = Stock::sum('purchasetotal');
    $profit =  $soldtotal - $total;
    return view('medicalstore.current_stock', compact('medicines', 'total','soldtotal','profit'));
}




    // 👁 View a single invoice
    public function show($id)
    {
        $invoice = Invoice::with('items')->findOrFail($id);
        return view('medicalstore.show', compact('invoice'));
    }

    // ✏️ Edit invoice
public function edit($id)
{
    $medicines = Stock::all();
    $invoice = Invoice::with('items')->findOrFail($id);
    return view('medicalstore.edit', compact('medicines', 'invoice'));
}



public function update(Request $request, $id)
{
    $payload = json_decode($request->input('invoice_data'), true);

    if (!is_array($payload)) {
        return redirect()->back()->with('error', 'Invalid invoice data.');
    }

    // Basic validation (you can expand)
    $items = $payload['items'] ?? [];
    if (!is_array($items)) {
        $items = [];
    }

    \DB::beginTransaction();
    try {
        $invoice = Invoice::findOrFail($id);

        // Update header fields
        $invoice->customer_name = $payload['customerName'] ?? $invoice->customer_name;
        $invoice->customer_phone = $payload['customerPhone'] ?? $invoice->customer_phone;
        $invoice->totalBeforeDisc = $payload['totalBeforeDisc'] ?? ($invoice->totalBeforeDisc ?? 0);
        $invoice->subdiscount = $payload['subdiscount'] ?? ($invoice->subdiscount ?? 0);
        $invoice->totalAfterDiscount = $payload['totalAfterDiscount'] ?? ($invoice->totalAfterDiscount ?? 0);
        $invoice->save();

        // Replace old items with new ones (delete & insert)
        $invoice->items()->delete();

        foreach ($items as $it) {
            // map fields defensively
            $invoice->items()->create([
                'medicine_name'    => $it['medicine_name'] ?? ($it['name'] ?? ''),
                'category'         => $it['category'] ?? '',
                'quantity'         => (int)($it['quantity'] ?? 0),
                'price'            => (float)($it['price'] ?? 0),
                'subtotal'         => (float)($it['subtotal'] ?? 0),
                'discount_percent' => (float)($it['discount_percent'] ?? 0),
                'discount_amount'  => (float)($it['discount_amount'] ?? 0),
                'total'            => (float)($it['total'] ?? 0),
            ]);
        }

        \DB::commit();
        return redirect()->route('admin.invoice_list')->with('success', 'Invoice updated successfully.');
    } catch (\Exception $e) {
        \DB::rollBack();
        \Log::error('Invoice update error: '.$e->getMessage());
        return redirect()->back()->with('error', 'Failed to update invoice. '.$e->getMessage());
    }
}


    // ❌ Delete invoice
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return redirect()->route('medicalstore.invoice_list')->with('success', 'Invoice deleted successfully!');
    }



}
