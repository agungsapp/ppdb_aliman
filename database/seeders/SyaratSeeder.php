<?php

namespace Database\Seeders;

use App\Models\SyaratModel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SyaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'judul' => 'Syarat pendaftaran',
            'deskripsi' => '<p style="margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px;">Bagi Calon Siswa/i Baru Yang ingin mendaftar, sebaiknya melengkapi berkas-berkas <em>&nbsp;</em>agar memudahkan pendaftaran online sesuai dengan jalur yang dipilih. persyaratan-persyaratan masing-masing jalur ada dibawah ini :</p><p style="margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px;"><span style="text-decoration-line: underline;"><em>Jalur Zonasi</em></span></p><ul style="margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px;"><li><span class="fontstyle0">Kartu Keluarga (KK) paling singkat 1 (satu) tahun terakhir dan/atau<br>surat keterangan domisili yang keluarkan oleh lurah</span></li><li>Surat Keterangan Lulus (SKL)</li><li>Akte Kelahiran</li><li>Surat Pernyataan Keabsahan Dokumen(link unduhan di paling bawah)</li></ul><p style="margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px;">&nbsp;<span style="text-decoration-line: underline;"><em>Jalur Afirmasi/Siswa Tidak Mampu<br></em></span></p><ul style="margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px;"><li><span class="fontstyle0">Kartu Kartu Keluarga (KK) paling singkat 1 (satu) tahun terakhir dan/atau<br>surat keterangan domisili yang keluarkan oleh lurah</span></li><li>Surat Keterangan Lulus (SKL)</li><li>Kartu Indonesia Pintar dan sejenisnya/ Surat Keterangan Tidak Mampu Mengetahui Lurah</li></ul><p style="margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px;"><span style="text-decoration-line: underline;"><em>Jalur Prestasi<br></em></span></p><ul style="margin-bottom: 1rem; color: rgb(33, 37, 41); font-size: 16px;"><li><span class="fontstyle0">Kartu Kartu Keluarga (KK) paling singkat 1 (satu) tahun terakhir dan/atau<br>surat keterangan domisili yang keluarkan oleh lurah</span></li><li>Surat Keterangan Lulus (SKL)</li><li style="text-align: left;"><span class="fontstyle0">Piagam/Sertifikat prestasi dengan kriteria :</span><br style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: normal; text-align: -webkit-auto; text-size-adjust: auto;">- Bidang &nbsp;Akademik Piagam Prestasi Perorangan hasil perlombaan/Penghargaan pada&nbsp;&nbsp; tingkat Internasional, Nasional, Provinsi, dan/atau Kabupaten/Kota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -Non Akademik Piagaman Prestasi Perorangan hasil perlombaan penghargaan dibidang Event Olahraga dibawah Induk Organisasi Komite Olahraga Nasional Indonesia ( KONI )/Kemdikbud, baik pada tingkat Internasional, Nasional, Provinsi dan /atau Kabupaten/Kota.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -Sertifikat/piagam Haviz Qur’an minimal 3 juzz dari LPTQ Provinsi, Kabupaten/Kota/Kecamatan dan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; atau&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kepala&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Satuan Pendidikan/Pondok.</li><li>Surat Pernyataan Keabsahan Dokumen (link unduhan di paling bawah)</li></ul>',
            'thumbnail' => 'default.png',

        ];


        SyaratModel::create($data);
    }
}
