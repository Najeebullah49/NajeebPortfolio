<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    // Set this to the actual DB table name. Most apps use 'stocks'
    protected $table = 'stock'; // <-- change to 'stock' ONLY if your table is named 'stock'

    protected $fillable = [
        'name',
        'category',
        'quantity',
         'purchaseprice',
          'purchasetotal',
        'saleprice',
        'total',
        'issue_date',
        'expiry_date',
    ];

    // Ensure numeric casting so multiplication works as expected
    protected $casts = [
        'quantity' => 'integer',
         'purchaseprice'    => 'decimal:2',
        'saleprice'    => 'decimal:2',
        'total'    => 'decimal:2',
        'issue_date'  => 'date',
        'expiry_date' => 'date',
    ];

    // Use booted() to set the total automatically before creating
    protected static function booted()
    {
        static::creating(function ($stock) {
            // force numeric values
            $qty = (int) $stock->quantity;
            $saleprice = (float) $stock->saleprice;
            $stock->total = $qty * $saleprice;
        });

        // also keep total correct on updates if you want
        static::updating(function ($stock) {
            $qty = (int) $stock->quantity;
            $saleprice = (float) $stock->saleprice;
            $stock->total = $qty * $saleprice;
        });
    }
}
