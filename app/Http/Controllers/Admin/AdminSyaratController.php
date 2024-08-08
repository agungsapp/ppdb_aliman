<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SyaratModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminSyaratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $syarat = SyaratModel::all()->first();
        $data['syarat'] = $syarat;

        return view('admin.syarat.index', $data);
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
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'nullable',
        ], [
            'judul.required' => 'judul tidak boleh kosong !',
            'deskripsi.required' => 'deskripsi tidak boleh kosong !',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessage = implode('<br>', $errors);
            Alert::html('Gagal', $errorMessage, 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $syarat = SyaratModel::find($id);
            $syarat->judul = ucwords($request->judul);
            $syarat->deskripsi = $request->deskripsi;

            // dd($request->hasFile('thumbnail'));


            // Simpan gambar jika ada
            if ($request->hasFile('thumbnail')) {
                // Hapus thumbnail lama jika ada
                if ($syarat->thumbnail != 'default.png') {
                    if ($syarat->thumbnail && Storage::exists('public/upload/syarat/' . $syarat->thumbnail)) {
                        Storage::delete('public/upload/syarat/' . $syarat->thumbnail);
                    }
                }

                $thumbnailFile = $request->file('thumbnail');
                $namaFile = time() . '_' . $thumbnailFile->getClientOriginalName();
                $path = $thumbnailFile->storeAs('public/upload/syarat/', $namaFile);

                $syarat->thumbnail = $namaFile;
            }

            $syarat->save();

            Alert::success('Berhasil', 'Syarat berhasil diperbarui!');
            return redirect()->route('admin.syarat.index');
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi kesalahan. Silakan coba lagi.');
            return redirect()->back()->withInput();
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
