<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengumumanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pengumumans' => PengumumanModel::all()
        ];

        return view('admin.pengumuman.index', $data);
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
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'nullable|image',
        ], [
            'judul.required' => 'judul tidak boleh kosong !',
            'deskripsi.required' => 'deskripsi tidak boleh kosong !',
            'thumbnail.image' => 'thumbnail harus berupa gambar yang valid , jpg, jpeg, png'
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal', 'gagal. Silakan masukan data dengan benar !');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $pengumuman = new PengumumanModel();
            $pengumuman->judul = ucwords($request->judul);
            $pengumuman->deskripsi = $request->deskripsi;

            // Simpan gambar jika ada
            if ($request->hasFile('thumbnail')) {
                $thumbnailFile = $request->file('thumbnail');
                $namaFile = time() . '_' . $thumbnailFile->getClientOriginalName();
                $path = $thumbnailFile->storeAs('public/upload/pengumuman', $namaFile);

                $pengumuman->thumbnail = $namaFile;
            }

            $pengumuman->save();

            alert()->success('Berhasil', "Pengumuman berhasil di simpan !");
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "pl";
        $pengumuman = PengumumanModel::find($id);
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $pengumuman = PengumumanModel::find($id);

        $data = [
            'pengumuman' => $pengumuman,
        ];

        return view('admin.pengumuman.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'required',
        ], [
            'judul.required' => 'judul tidak boleh kosong !',
            'deskripsi.required' => 'deskripsi tidak boleh kosong !',
            'thumbnail.required' => 'gambar tidak boleh kosong !',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessage = implode('<br>', $errors);
            Alert::html('Gagal', $errorMessage, 'error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $pengumuman = PengumumanModel::find($id);
            $pengumuman->judul = ucwords($request->judul);
            $pengumuman->deskripsi = $request->deskripsi;

            // dd($request->hasFile('thumbnail'));


            // Simpan gambar jika ada
            if ($request->hasFile('thumbnail')) {
                // Hapus thumbnail lama jika ada
                if ($pengumuman->thumbnail != 'default.png') {
                    if ($pengumuman->thumbnail && Storage::exists('public/upload/pengumuman/' . $pengumuman->thumbnail)) {
                        Storage::delete('public/upload/pengumuman/' . $pengumuman->thumbnail);
                    }
                }

                $thumbnailFile = $request->file('thumbnail');
                $namaFile = time() . '_' . $thumbnailFile->getClientOriginalName();
                $path = $thumbnailFile->storeAs('public/upload/pengumuman', $namaFile);

                $pengumuman->thumbnail = $namaFile;
            }

            $pengumuman->save();

            Alert::success('Berhasil', 'Pengumuman berhasil diperbarui!');
            return redirect()->route('admin.pengumuman.index');
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
        $pengumuman = PengumumanModel::find($id);
        if ($pengumuman->thumbnail != 'default.png') {
            if ($pengumuman->thumbnail && Storage::exists('public/upload/pengumuman/' . $pengumuman->thumbnail)) {
                Storage::delete('public/upload/pengumuman/' . $pengumuman->thumbnail);
            }
        }
        $pengumuman->delete();

        Alert::success('Berhasil', 'Pengumuman berhasil hapus !');
        return redirect()->route('admin.pengumuman.index');
    }
}
