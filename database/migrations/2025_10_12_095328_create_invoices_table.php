<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique(); // Unique invoice ID like INV-ABC123
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            
            $table->decimal('totalBeforeDisc', 10, 2)->default(0);       // Before discount
            $table->decimal('subdiscount', 10, 2)->default(0);    // Discount in amount
            $table->decimal('discount_percent', 5, 2)->default(0); // Discount percentage
            $table->decimal('totalAfterDiscount', 10, 2)->default(0);          // After discount

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
