<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\SiswaModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswa.data.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nisn' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'sekolah_asal' => 'required',
            'tahun_lulus' => 'required',
            'nomor_telepon' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
        ]);

        try {
            $siswa = new Siswa();
            $siswa->id_user = Auth::id();
            $siswa->kode_registrasi = $this->generateKodeRegistrasi();
            $siswa->nik = $request->nik;
            $siswa->nisn = $request->nisn;
            $siswa->jenis_kelamin = $request->jk;
            $siswa->agama = $request->agama;
            $siswa->tempat_lahir = $request->tempat_lahir;
            $siswa->tanggal_lahir = $request->tanggal_lahir;
            $siswa->alamat = $request->alamat;
            $siswa->sekolah_asal = $request->sekolah_asal;
            $siswa->tahun_lulus = $request->tahun_lulus;
            $siswa->nomor_telepon = $request->nomor_telepon;
            $siswa->id_provinsi = $request->provinsi;
            $siswa->id_kabupaten = $request->kabupaten;
            $siswa->id_kecamatan = $request->kecamatan;
            $siswa->id_kelurahan = $request->kelurahan;

            $siswa->save();
            alert()->success('Berhasil', 'data anda berhasil di simpan !');
            return redirect()->to(route('siswa.data-ayah.index'));
        } catch (\Throwable $th) {
            // throw $th;
            alert()->error('Error', 'terjadi kesalahan pada server !');
            return redirect()->back()->withInput();
        }
    }

    private function generateKodeRegistrasi()
    {
        $tahun = Carbon::now()->format('y'); // Dua digit terakhir tahun (contoh: 24)
        $bulan = Carbon::now()->format('m'); // Bulan (contoh: 05)
        $tanggal = Carbon::now()->format('d'); // Tanggal (contoh: 23)
        $userId = Auth::id(); // ID pengguna yang sedang login
        return "REG-{$tahun}-{$bulan}-{$tanggal}-{$userId}";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
