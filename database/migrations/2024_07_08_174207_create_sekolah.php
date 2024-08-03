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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat');
            $table->unsignedBigInteger('id_staff');
            $table->integer('id_kelurahan')->default(0);
            $table->integer('id_kecamatan')->default(0);
            $table->integer('id_provinsi')->default(0);
            $table->integer('id_kabupaten')->default(0);
            $table->timestamps();

            $table->foreign('id_staff')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
