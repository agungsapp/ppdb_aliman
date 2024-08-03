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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_staff')->nullable();
            $table->integer('nominal');
            $table->string('path');
            $table->boolean('status_pembayaran')->default(false);
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_staff')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
