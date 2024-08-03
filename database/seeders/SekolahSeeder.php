<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'nama' => 'MTs Al-Iman',
            'alamat' => 'Jl. Lintas Timur Unit 2',
            'id_staff' => 1,
            'id_kelurahan' => 1808032009,
            'id_kecamatan' => 1808032,
            'id_kabupaten' => 1808,
            'id_provinsi' => 18,
        ];


        Sekolah::create($data);
    }
}
