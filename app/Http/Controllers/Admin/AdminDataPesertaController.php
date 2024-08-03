<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminDataPesertaController extends Controller
{



    public function cetak(string $id)
    {
        $data = [
            'siswa' => Siswa::where('id_user', $id)->first(),
        ];
        return view('admin.peserta.cetak', $data);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with(['siswa', 'orangTua'])->where('role', '=', 'siswa')->get();

        $data = [
            'siswas' => $users->map(function ($user) {
                $proses = [
                    'siswa' => $user->siswa()->exists(),
                    'ayah'  => $user->orangTua()->where('jenis_kelamin', 'l')->exists(),
                    'ibu'   => $user->orangTua()->where('jenis_kelamin', 'p')->exists(),
                ];

                // Menambahkan properti proses ke setiap user
                $user->proses = $proses;
                // $user->created_at = Carbon::parse($user->created_at)->format('d F Y H:i');

                return $user;
            })
        ];

        // dd($data);

        // dd($data['siswas'][0]->orangTua);

        return view('admin.peserta.index', $data);
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
        $siswa = User::with('siswa')->find($id);

        // dd($siswa);

        return view('admin.peserta.edit', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'username' => 'required|unique:users,username,' . $id,
        ]);
        // return response()->json($request->password == null);
        try {
            $siswa =  User::findOrFail($id);
            $siswa->nama = $request->nama;
            $siswa->email = $request->email;
            $request->password != null ? $siswa->password = Hash::make($request->password) : '';
            $siswa->save();
            // return response()->json($find);
            alert()->success('Berhasil', 'Update data siswa berhasil !');
            return redirect()->to(route('admin.peserta.index'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            alert()->success('Berhasil', 'hapus data siswa berhasil !');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            alert()->error('Gagal', 'hapus siswa gagal !');
            return redirect()->back();
        }
    }
}
