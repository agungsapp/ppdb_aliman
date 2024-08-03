<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminDataBayarController;
use App\Http\Controllers\Admin\AdminDataBrosurController;
use App\Http\Controllers\Admin\AdminDataPesertaController;
use App\Http\Controllers\Admin\AdminDataSekolahController;
use App\Http\Controllers\Admin\AdminPembayaranController;
use App\Http\Controllers\Admin\AdminPengumumanController;
use App\Http\Controllers\Admin\AdminProfilController;
use App\Http\Controllers\Admin\AdminStaffController;
use App\Http\Controllers\Admin\AdminSyaratController;
use App\Http\Controllers\Api\ApiPembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Siswa\SiswaBerandaController;
use App\Http\Controllers\Siswa\SiswaDataAyahController;
use App\Http\Controllers\Siswa\SiswaDataController;
use App\Http\Controllers\Siswa\SiswaDataIbuController;
use App\Http\Controllers\Siswa\SiswaJadwalController;
use App\Http\Controllers\Siswa\SiswaPembayaranController;
use App\Http\Controllers\Siswa\SiswaPengumumanController;
use App\Http\Controllers\Siswa\SiswaSyaratController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to('/siswa/beranda');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::prefix('admin')->name('admin.')->group(function () {
    // Route::resource('dashboard', App\Http\Controllers\Admin\AdminDashboardController::class);
    // hanya admin
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('staff', AdminStaffController::class);
    });

    // admin dan staff bisa akses
    Route::middleware(['role:admin,staff'])->group(function () {
        Route::resource('brosur', AdminDataBrosurController::class);
        Route::resource('sekolah', AdminDataSekolahController::class);
        Route::resource('dashboard', AdminDashboardController::class);
        Route::resource('peserta', AdminDataPesertaController::class);
        Route::get('peserta-cetak/{id}', [AdminDataPesertaController::class, 'cetak'])->name('peserta-cetak');
        Route::resource('pembayaran', AdminPembayaranController::class);
        Route::resource('pengumuman', AdminPengumumanController::class);
        Route::resource('profil', AdminProfilController::class);
        Route::resource('pembayaran', AdminDataBayarController::class);
        Route::resource('syarat', AdminSyaratController::class);
    });
});


Route::prefix('siswa')->name('siswa.')->group(function () {
    Route::resource('beranda', SiswaBerandaController::class);
    Route::resource('data', SiswaDataController::class);
    Route::resource('data-ayah', SiswaDataAyahController::class);
    Route::resource('data-ibu', SiswaDataIbuController::class);
    Route::resource('pembayaran', SiswaPembayaranController::class);
    Route::resource('syarat', SiswaSyaratController::class);
    Route::resource('pengumuman', SiswaPengumumanController::class);
    Route::resource('jadwal', SiswaJadwalController::class);
});


// Route::post('/change-status/{id}', [ApiPembayaranController::class, 'changeStatus'])->name('api.changeStatus');


Route::post('updateStatus/{id}', [TestController::class, 'test'])->name('updateStatus');
