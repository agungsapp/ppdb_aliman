<?php

namespace App\Http\Controllers;

use App\Models\PembayaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function test(string $id)
    {
        try {
            $pembayaran = PembayaranModel::find($id);
            if ($pembayaran->status_pembayaran) {
                $pembayaran->status_pembayaran = false;
            } else {
                $pembayaran->status_pembayaran = true;
            }
            $pembayaran->save();

            return response()->json(['message' => 'berhasil melakukan update status pembayaran', 'status' => 200], 200);
        } catch (\Throwable $th) {
            //throw $th;
            Log::info("error update status pembayaran api : " . $th->getMessage());
            return response()->json(['message' => 'terjadi kesalahan pada server : ' . $th->getMessage(), 'status' => 500], 500);
        }
    }
}
