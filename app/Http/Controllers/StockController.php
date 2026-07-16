<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;

class StockController extends Controller
{
    // Show stock list
 // 🧾 Show stock list
public function index()
{
    $medicines = \App\Models\Stock::orderBy('name', 'asc')->get();
    return view('medicalstore.upload_medicine', compact('medicines'));
}



    // Store new medicine
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'quantity' => 'required|integer|min:0',
            'purchaseprice' => 'required|numeric|min:0',
            'saleprice' => 'required|numeric|min:0',
            'issue_date' => 'nullable|date',
            'expiry_date' => 'nullable|date|after_or_equal:issue_date',
        ]);

        // Calculate total
        $data['total'] = $data['quantity'] * $data['saleprice'];
 $data['purchasetotal'] = $data['quantity'] * $data['purchaseprice'];
        Stock::create($data);

        return redirect()->back()->with('success', 'Stock saved successfully.');
    }


   public function sold()
{
    $sold = \App\Models\InvoiceItem::orderBy('medicine_name', 'asc')
                ->latest()
                ->get();

    return view('medicalstore.sold', compact('sold'));
}


    public function showStock($id)
{
    $medicine = Stock::findOrFail($id);
    return view('medicalstore.stock_show', compact('medicine'));
}

public function editStock($id)
{
    $medicine = Stock::findOrFail($id);
    return view('admin.stock_edit', compact('medicine'));
}

public function destroyStock($id)
{
    $medicine = Stock::findOrFail($id);
    $medicine->delete();

    return redirect()->back()->with('success', 'Medicine deleted successfully!');
}


public function updateStock(Request $request, $id)
{
    // Validate input
    $validated = $request->validate([
        'name'          => 'required|string|max:255',
        'category'      => 'nullable|string|max:255',
        'quantity'      => 'required|numeric|min:0',
        'purchaseprice' => 'required|numeric|min:0',
        'saleprice'     => 'required|numeric|min:0',
        'issue_date'    => 'required|date',
        'expiry_date'   => 'nullable|date|after_or_equal:issue_date',
    ]);

    $medicine = Stock::findOrFail($id);

    $medicine->update([
        'name'          => $validated['name'],
        'category'      => $validated['category'] ?? $medicine->category,
        'quantity'      => $validated['quantity'],
        'purchaseprice' => $validated['purchaseprice'],
        'saleprice'     => $validated['saleprice'],
        'total'         => $validated['quantity'] * $validated['purchaseprice'],
        'issue_date'    => $validated['issue_date'],
        'expiry_date'   => $validated['expiry_date'] ?? $medicine->expiry_date,
    ]);

    return redirect()
        ->route('current.stock')
        ->with('success', 'Medicine updated successfully!');
}


}
