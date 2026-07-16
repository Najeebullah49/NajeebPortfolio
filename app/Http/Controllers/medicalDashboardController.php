<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\MedicalUser;
use App\Models\Invoice  ;
use App\Models\Stock;
use App\Models\InvoiceItem;
use Illuminate\Support\Carbon;
class medicalDashboardController extends Controller
{
  
    public function showMedicalDashboard()
    {
        // Dashboard counts
        $totalC = MedicalUser::count(); // Total users
         $totalStock = Stock::count();
         $count = Invoice::all();
         $totalSold = $count->count();
        // $totalP = Order::where('status', 'pending')->count(); // Pending requests
    
        // Chart section
        $startOfMonth = now()->startOfMonth();
        $endOfMonth = now()->endOfMonth();
    
        // Initialize arrays
        $days = [];
        $dailyStock = [];
        $dailySold = [];
    
        // Loop through each day of the month
        for ($date = $startOfMonth; $date <= $endOfMonth; $date->addDay()) {
            $days[] = $date->format('d'); // Day of the month (e.g., 01, 02)
    
            // Calculate daily revenue and orders
           
              $CurrentStock = Stock::count(); 
                $stockquantity = Stock::sum('quantity'); 
               $SoldStockInvoice = InvoiceItem::count(); 
               $soldstockquantity = InvoiceItem::sum('quantity'); 
             $dailySoldStockInvoice = InvoiceItem::whereDate('created_at', $date)->count();
      $uploadSoldStock = Stock::whereDate('created_at', $date)->count();
           $dailyStock[] = $uploadSoldStock;
             $dailySold[] = $dailySoldStockInvoice;
        }
    
        // Customers data
        $customers = MedicalUser::where('type', 'Admin')->get();
    
        // Pass data to the view
        return view('medicalstore.medicaldashboard', compact(
            'totalStock',
            'stockquantity',
            'totalSold',
            'soldstockquantity',    
            'days',
            'dailyStock',
            'dailySold',
            'customers' // Corrected here
            
        ));
    }


}
