<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'customer_name',
        'customer_phone',
        'totalBeforeDisc',
        'subdiscount', // total discount amount (in Rs)
        'totalAfterDiscount',
    ];

    /**
     * Relationship — One Invoice has many InvoiceItems
     */
    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }

    /**
     * Auto-generate unique invoice number when creating
     */
    protected static function booted()
    {
        static::creating(function ($invoice) {
            $invoice->invoice_number = 'INV-' . strtoupper(uniqid());
        });
    }
}
