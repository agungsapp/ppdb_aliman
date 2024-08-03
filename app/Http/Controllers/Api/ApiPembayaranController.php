<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PembayaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiPembayaranController extends Controller
{
    public function changeStatus(string $id)
    {

        return response()->json("okeee", 200);

        // try {
        //     $pembayaran = PembayaranModel::find($id);
        //     if ($pembayaran->status_pembayaran) {
        //         $pembayaran->status_pembayaran = false;
        //     } else {
        //         $pembayaran->status_pembayaran = true;
        //     }
        //     $pembayaran->save();

        //     return response()->json(['message' => 'berhasil melakukan update status pembayaran', 'status' => 200], 200);
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     Log::info("error update status pembayaran api : " . $th->getMessage);
        //     return response()->json(['message' => 'terjadi kesalahan pada server : ' . $th->getMessage, 'status' => 500], 500);
        // }
    }
}
