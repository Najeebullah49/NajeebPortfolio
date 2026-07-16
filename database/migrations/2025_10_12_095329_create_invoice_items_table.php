<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade');

            $table->string('medicine_name');
            $table->string('category');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);

            $table->decimal('subtotal', 10, 2)->default(0);          // before discount
            $table->decimal('discount_percent', 5, 2)->default(0);   // discount in %
            $table->decimal('discount_amount', 10, 2)->default(0);   // discount in Rs
            $table->decimal('total', 10, 2)->default(0);             // after discount

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
