<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PembayaranModel;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class AdminDataBayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pembayarans' => PembayaranModel::all()
        ];

        // dd($data);

        return view('admin.bayar.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {

            $sekolah = Sekolah::all()->first();
            $pembayaran = PembayaranModel::find($id);

            // dd($sekolah);

            return view('admin.bayar.show', [
                'pembayaran' => $pembayaran,
                'sekolah' => $sekolah
            ]);
        } catch (\Throwable $th) {
            throw $th;
            alert()->error('Gagal !', 'Terjadi kesalahan pada server saat mengambil data!');
            return redirect()->back();
        }
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
