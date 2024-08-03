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
        Schema::create('orangtua', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('nik', 20)->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->text('alamat');
            $table->char('nomor_telepon', 16);
            $table->integer('id_kelurahan')->default(0);
            $table->integer('id_kecamatan')->default(0);
            $table->integer('id_provinsi')->default(0);
            $table->integer('id_kabupaten')->default(0);

            $table->unsignedBigInteger('id_siswa');

            $table->foreign('id_siswa')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orangtua');
    }
};
