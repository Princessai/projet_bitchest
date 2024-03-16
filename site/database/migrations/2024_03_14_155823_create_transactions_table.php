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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crypto_id')->constrained();
            $table->foreignId('wallet_id')->constrained();
            $table->float('cours_achat');
            $table->string('type', 50);
            $table->timestamp('date');
            $table->integer('quantite');
            $table->float('montant');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
