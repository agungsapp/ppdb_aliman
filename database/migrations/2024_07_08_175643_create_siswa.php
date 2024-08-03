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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('kode_registrasi');
            $table->char('nik', 20)->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('nisn', 7);
            $table->string('agama');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->string('sekolah_asal');
            $table->text('alamat');
            $table->string('tahun_lulus');
            $table->char('nomor_telepon', 16);
            $table->integer('id_kelurahan')->default(0);
            $table->integer('id_kecamatan')->default(0);
            $table->integer('id_provinsi')->default(0);
            $table->integer('id_kabupaten')->default(0);

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
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
        Schema::dropIfExists('siswa');
    }
};
