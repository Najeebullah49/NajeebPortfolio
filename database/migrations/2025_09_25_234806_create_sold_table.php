<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('sold', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('stock_id');
    $table->string('name');
    $table->string('category');
    $table->integer('quantity');   // sold quantity
    $table->decimal('price', 10, 2);
    $table->decimal('total', 10, 2);
    $table->date('sale_date');
    $table->timestamps();

    $table->foreign('stock_id')->references('id')->on('stock')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sold');
    }
};
