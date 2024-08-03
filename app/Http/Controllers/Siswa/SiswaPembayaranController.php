<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\PembayaranModel;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $findPembayaran = PembayaranModel::where('id_user', Auth::id())->first();


        if ($findPembayaran->status_pembayaran ?? false) {
            return view('siswa.pembayaran.success');
        } else {
            // dd($findPembayaran);
            return view('siswa.pembayaran.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nominal' => 'required|numeric',
            'bukti' => 'required|image|mimes:jpg,jpeg,png|max:5120', // Validasi file gambar
        ]);

        $lastPayment = PembayaranModel::latest()->first();
        $id_pembayaran = $lastPayment ? $lastPayment->id + 1 : 1;

        $today = now();
        $kode_transaksi = 'PPDB-' . $today->year . '-' . $today->format('m') . '-' . $today->format('d') . '-' . $id_pembayaran;

        try {
            $buktiFile = $request->file('bukti');
            $namaFile = time() . '_' . $buktiFile->getClientOriginalName();
            $path = $buktiFile->storeAs('public/upload/bukti', $namaFile);
            PembayaranModel::create([
                'kode_transaksi' => $kode_transaksi,
                'id_user' => Auth::user()->id,
                'nominal' => $request->nominal,
                'path' => $namaFile,
            ]);
            alert()->success('Berhasil', 'upload bukti pembayaran berhasil !');
            return redirect()->to(route('siswa.beranda.index'));
        } catch (\Throwable $th) {
            throw $th;
            alert()->error('Gagal', 'terjadi kesalahan pada server !');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.pembayaran.cetak', ['siswa' => $siswa]);
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
