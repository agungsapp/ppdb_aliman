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
        Schema::create('syarat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_staff')->default(1);
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('thumbnail');
            $table->timestamps();

            $table->foreign('id_staff')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syarat');
    }
};
