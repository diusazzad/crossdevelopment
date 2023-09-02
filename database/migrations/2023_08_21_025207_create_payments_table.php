<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('payments', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create payments table (for storing payment history)
        // Schema::create('payments', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->decimal('amount', 10, 2);
        //     $table->string('payment_method');
        //     $table->string('transaction_id');
        //     $table->timestamps();
        // });

        // // Create products table (for products available for purchase)
        // Schema::create('products', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->decimal('price', 10, 2);
        //     $table->timestamps();
        // });

        // // Create purchases table (for tracking user purchases)
        // Schema::create('purchases', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->foreignId('product_id')->constrained('products');
        //     $table->timestamps();
        // });
    }

    public function down()
    {
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('products');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('users');
    }
};
