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
        Schema::create('portfolio_contacts', function (Blueprint $table) {
              $table->id();
            $table->unsignedBigInteger('user_id'); // Add user_id column
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->text('message');
            $table->timestamps();

            // Add foreign key constraint (optional, assuming a users table exists)
            $table->foreign('user_id')->references('id')->on('portfolio_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_contacts');
    }
};
