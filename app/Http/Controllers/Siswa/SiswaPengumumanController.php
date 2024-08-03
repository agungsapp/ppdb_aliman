<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\PengumumanModel;
use Illuminate\Http\Request;

class SiswaPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            $pengumuman = PengumumanModel::find($id);
            return view('siswa.pengumuman.show', [
                'pengumuman' => $pengumuman
            ]);
        } catch (\Throwable $th) {
            //throw $th;

            alert()->error('Gagal', 'data pengumuman tidak ditemukan');
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
