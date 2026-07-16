<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',       // Link to invoice
        'medicine_id',      // Link to medicine
        'medicine_name',    // Name of the medicine
        'category',         // Tablet, Syrup, etc.
        'quantity',         // Quantity sold
        'price',            // Sale price per unit
        'discount_percent', // Discount applied in percent
        'discount_amount',  // Discount amount in Rs
        'subtotal',         // Total before discount
        'total',            // Total after discount
    ];

    /**
     * Relationship: each item belongs to an invoice
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    /**
     * Relationship: each item belongs to a medicine record
     */
    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
