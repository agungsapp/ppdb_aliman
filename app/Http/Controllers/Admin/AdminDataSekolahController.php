<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use App\Models\SekolahModel;
use Illuminate\Http\Request;

class AdminDataSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'sekolah' => Sekolah::find(1)
        ];

        return view('admin.sekolah.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json($request->all());
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

        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
        ]);


        // return response()->json($request->all());


        try {
            // Temukan data sekolah berdasarkan ID
            $sekolah = Sekolah::findOrFail($id);

            // Map data input ke kolom database yang sesuai
            $sekolah->nama = $request->nama;
            $sekolah->alamat = $request->alamat;
            $sekolah->id_provinsi = $request->provinsi;
            $sekolah->id_kabupaten = $request->kabupaten;
            $sekolah->id_kecamatan = $request->kecamatan;
            $sekolah->id_kelurahan = $request->kelurahan;

            // Simpan perubahan
            $sekolah->save();

            alert()->success('Berhasil', 'Update data berhasil !');
            return redirect()->to(route('admin.sekolah.index'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
