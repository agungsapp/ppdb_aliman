<?php

namespace Database\Seeders;

use App\Models\PengumumanModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'penerimaan calon peserta didik baru',
                'deskripsi' => '<p>berikut ini adalah penerimaan calon peserta didik baru</p><p>simak tanggal dan waktunya</p>',
                'thumbnail' => 'default.png',
                'id_staff' => 1,
            ],
            [
                'judul' => 'perpanjangan waktu pendaftaran calon peserta didik baru',
                'deskripsi' => '<p>berikut ini adalah penerimaan calon peserta didik baru</p><p>simak tanggal dan waktunya</p>',
                'thumbnail' => 'default.png',
                'id_staff' => 1,
            ],
            [
                'judul' => 'pengumuman kelulusan calon peserta didik baru',
                'deskripsi' => '<p>berikut ini adalah penerimaan calon peserta didik baru</p><p>simak tanggal dan waktunya</p>',
                'thumbnail' => 'default.png',
                'id_staff' => 1,
            ],
        ];


        foreach ($data as $item) {
            PengumumanModel::create($item);
        }
    }
}
