<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role', '=', 'staff')->get();
        $data = [
            'staffs' => $users,
        ];

        return view('admin.staff.index', $data);
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
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users,email,username',
        ]);


        try {
            $staff = User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'email' => $request->email,
                'role' => 'staff',
                'password' => Hash::make('staff123'),
            ]);

            alert()->success('Berhasil', 'Simpan data staff berhasil !');
            return redirect()->to(route('admin.staff.index'));
        } catch (\Throwable $th) {
            //throw $th;
            alert()->error('Gagal', 'Terjadi kesalahan saat menyimpan data !');
            return redirect()->to(route('admin.staff.index'));
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
        $staff = User::find($id);

        // dd($staff);

        return view('admin.staff.edit', [
            'staff' => $staff
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);


        try {
            $staff = User::findOrFail($id);
            $staff->nama = $request->nama;
            $staff->username = $request->username;
            $staff->email = $request->email;
            if ($request->password) {
                $staff->password = Hash::make($request->password);
            }

            alert()->success('Berhasil', 'Update data staff berhasil !');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            alert()->error('Gagal', 'Terjadi kesalahan saat update data !');
            return redirect()->back();
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
