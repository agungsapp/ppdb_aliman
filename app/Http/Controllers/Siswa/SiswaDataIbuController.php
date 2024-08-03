<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\IbuModel;
use App\Models\OrangTua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaDataIbuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('siswa.data.ibu.index');
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
        // dd($request->all());
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
        ]);

        try {
            $siswa = new OrangTua();
            $siswa->id_siswa = Auth::id();
            $siswa->nik = $request->nik;
            $siswa->nama = $request->nama;
            $siswa->jenis_kelamin = 'l';
            $siswa->agama = $request->agama;
            $siswa->tempat_lahir = $request->tempat_lahir;
            $siswa->tanggal_lahir = $request->tanggal_lahir;
            $siswa->alamat = $request->alamat;
            $siswa->nomor_telepon = $request->nomor_telepon;
            $siswa->id_provinsi = $request->provinsi;
            $siswa->id_kabupaten = $request->kabupaten;
            $siswa->id_kecamatan = $request->kecamatan;
            $siswa->id_kelurahan = $request->kelurahan;
            // dd("eksekusi");
            $siswa->save();
            alert()->success('Berhasil', 'data orang tua anda berhasil di simpan !');
            return redirect()->to(route('siswa.beranda.index'));
        } catch (\Throwable $th) {
            throw $th;
            alert()->error('Error', 'terjadi kesalahan pada server !');
            return redirect()->back()->withInput();
        }
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
