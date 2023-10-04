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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('hash');
            $table->integer('amount_paid');
            $table->string('reference');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('bank_type');
            $table->integer('status')->default(0);
            $table->integer('tranx_status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
