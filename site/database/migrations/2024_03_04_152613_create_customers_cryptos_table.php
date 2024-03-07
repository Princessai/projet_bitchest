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
        Schema::create('customers_cryptos', function (Blueprint $table) {
            $table->id();
            $table->date('purchase_date');
            $table->integer('purchased_amount');
            $table->foreignId('customer_id');
            $table->foreignId('crypto_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_cryptos');
    }
};
