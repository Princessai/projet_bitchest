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
        Schema::create('crypto_wallet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crypto_id')->constrained();
            $table->foreignId('wallet_id')->constrained();
            $table->float('qte_crypto', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crypto_wallet');
    }
};
