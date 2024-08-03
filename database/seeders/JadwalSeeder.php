<?php

namespace Database\Seeders;

use App\Models\JadwalModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'pembukaan PPDB online',
                'mulai' => '2024-07-16 23:53:41',
                'selesai' => '2024-07-21 03:21:09',
                'periode' => '2024/2025'
            ],
            [
                'judul' => 'penutupan PPDB online',
                'mulai' => '2024-07-21 23:53:41',
                'selesai' => '2024-07-21 03:21:09',
                'periode' => '2024/2025'
            ],
            [
                'judul' => 'pengumuman hasil penerimaan peserta didik',
                'mulai' => '2024-07-27 23:53:41',
                'selesai' => '2024-07-28 03:21:09',
                'periode' => '2024/2025'
            ],
        ];


        foreach ($data as $item) {
            JadwalModel::create($item);
        }
    }
}
