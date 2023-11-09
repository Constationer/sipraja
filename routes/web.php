<?php

use App\Http\Controllers\Admin\CaraPengaduanController as AdminCaraPengaduanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DesaController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;
use App\Http\Controllers\Admin\PengajuanController as AdminPengajuanController;
use App\Http\Controllers\Admin\PermintaanController;
use App\Http\Controllers\Admin\SosialisasiController as AdminSosialisasiController;
use App\Http\Controllers\CaraPengaduanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang.index');
Route::get('/cara-pengaduan', [CaraPengaduanController::class, 'index'])->name('cara-pengaduan.index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
Route::get('/pencarian/{kode}', [PencarianController::class, 'akses'])->name('pencarian.akses');

// Route::get('/visitor-count', 'VisitorController@showCount');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard.index');

    //Admin Pengajuan
    Route::get('/admin/pengajuan-index', [AdminPengajuanController::class, 'index'])->name('admin-pengajuan.index');
    Route::get('/admin/pengajuan-admin/create', [AdminPengajuanController::class, 'create'])->name('admin-pengajuan.create');
    Route::post('/admin/pengajuan-admin', [AdminPengajuanController::class, 'store'])->name('admin-pengajuan.store');
    Route::get('/admin/pengajuan-masuk', [AdminPengajuanController::class, 'masuk'])->name('admin-pengajuan.masuk');
    Route::get('/admin/pengajuan-proses', [AdminPengajuanController::class, 'proses'])->name('admin-pengajuan.proses');
    Route::get('/admin/pengajuan-selesai', [AdminPengajuanController::class, 'selesai'])->name('admin-pengajuan.selesai');
    Route::get('/admin/pengajuan-ditolak', [AdminPengajuanController::class, 'ditolak'])->name('admin-pengajuan.ditolak');
    Route::put('/admin/pengajuan/proses/{id}', [AdminPengajuanController::class, 'sendProses'])->name('admin-pengajuan.sendProses');
    Route::put('/admin/pengajuan/ditolak/{id}', [AdminPengajuanController::class, 'sendDitolak'])->name('admin-pengajuan.sendDitolak');
    Route::put('/admin/pengajuan/selesai/{id}', [AdminPengajuanController::class, 'sendSelesai'])->name('admin-pengajuan.sendSelesai');

    //Admin Galeri
    Route::get('/admin/galeri', [AdminGaleriController::class, 'index'])->name('admin-galeri.index');
    Route::get('/admin/galeri/create', [AdminGaleriController::class, 'create'])->name('admin-galeri.create');
    Route::put('/admin/galeri/{id}', [AdminGaleriController::class, 'setVisible'])->name('admin-galeri.setVisible');
    Route::post('/admin/galeri', [AdminGaleriController::class, 'store'])->name('admin-galeri.store');
    Route::delete('/galeri/delete/{id}', [AdminGaleriController::class, 'delete'])->name('admin-galeri.delete');

    //Admin Cara Pengaduan
    Route::get('/admin/cara-pengaduan', [AdminCaraPengaduanController::class, 'index'])->name('admin-carapengaduan.index');
    Route::get('/admin/cara-pengaduan/create', [AdminCaraPengaduanController::class, 'create'])->name('admin-carapengaduan.create');
    Route::post('/admin/cara-pengaduan', [AdminCaraPengaduanController::class, 'store'])->name('admin-carapengaduan.store');
    Route::delete('/cara-pengaduan/delete/{id}', [AdminCaraPengaduanController::class, 'delete'])->name('admin-carapengaduan.delete');

    //Admin Kontak
    Route::get('/admin/kontak', [AdminKontakController::class, 'index'])->name('admin-kontak.index');
    Route::delete('/admin/kontak/delete/{id}', [AdminKontakController::class, 'delete'])->name('admin-kontak.delete');

    //Admin Sosialisasi
    Route::get('/admin/sosialisasi', [AdminSosialisasiController::class, 'index'])->name('admin-sosialisasi.index');
    Route::get('/admin/sosialisasi/create', [AdminSosialisasiController::class, 'create'])->name('admin-sosialisasi.create');
    Route::post('/admin/sosialisasi', [AdminSosialisasiController::class, 'store'])->name('admin-sosialisasi.store');
    Route::get('/admin/sosialisasi/edit/{id}', [AdminSosialisasiController::class, 'edit'])->name('admin-sosialisasi.edit');
    Route::put('/admin/sosialisasi{id}', [AdminSosialisasiController::class, 'update'])->name('admin-sosialisasi.update');
    Route::delete('/admin/sosialisasi/delete/{id}', [AdminSosialisasiController::class, 'delete'])->name('admin-sosialisasi.delete');

    //Admin Permintaan
    Route::get('/admin/permintaan', [PermintaanController::class, 'index'])->name('admin-permintaan.index');
    Route::get('/admin/permintaan/create', [PermintaanController::class, 'create'])->name('admin-permintaan.create');
    Route::post('/admin/permintaan', [PermintaanController::class, 'store'])->name('admin-permintaan.store');
    Route::get('/admin/permintaan/edit/{id}', [PermintaanController::class, 'edit'])->name('admin-permintaan.edit');
    Route::put('/admin/permintaan{id}', [PermintaanController::class, 'update'])->name('admin-permintaan.update');
    Route::delete('/admin/permintaan/delete/{id}', [PermintaanController::class, 'delete'])->name('admin-permintaan.delete');
    Route::put('/admin/permintaan/proses/{id}', [PermintaanController::class, 'sendProses'])->name('admin-permintaan.sendProses');
    Route::put('/admin/permintaan/ditolak/{id}', [PermintaanController::class, 'sendDitolak'])->name('admin-permintaan.sendDitolak');

    //Admin Sosialisasi
    Route::get('/admin/desa', [DesaController::class, 'index'])->name('admin-desa.index');
    Route::get('/admin/desa/edit/{id}', [DesaController::class, 'edit'])->name('admin-desa.edit');
    Route::get('/admin/desa/edit-password/{id}', [DesaController::class, 'editpw'])->name('admin-desa.editpw');
    Route::put('/admin/desa{id}', [DesaController::class, 'update'])->name('admin-desa.update');
    Route::put('/admin/desa/pw{id}', [DesaController::class, 'updatepw'])->name('admin-desa.updatepw');
});

require __DIR__ . '/auth.php';
