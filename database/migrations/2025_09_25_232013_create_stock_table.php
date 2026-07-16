<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->string('name');          // Medicine name
            $table->string('category');      // Tablet, Syrup, etc.
            $table->integer('quantity');     // Quantity
            $table->decimal('purchaseprice', 10, 2); // Price in Rs
              $table->decimal('purchasetotal', 10, 2);
            $table->decimal('saleprice', 10, 2); // Price in Rs
             $table->decimal('total', 10, 2);
            $table->date('issue_date');      // Issue date
            $table->date('expiry_date');     // Expiry date
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
