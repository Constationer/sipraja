<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\PengajuanController as AdminPengajuanController;
use App\Http\Controllers\CaraPengaduanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang.index');
Route::get('/cara-pengaduan', [CaraPengaduanController::class, 'index'])->name('cara-pengaduan.index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard.index');
    Route::get('/admin/pengajuan', [AdminPengajuanController::class, 'index'])->name('admin-pengajuan.index');
    Route::get('/admin/galeri', [AdminGaleriController::class, 'index'])->name('admin-galeri.index');
    Route::get('/admin/galeri/create', [AdminGaleriController::class, 'create'])->name('admin-galeri.create');
    Route::get('/admin/galeri/edit/{id}', [AdminGaleriController::class, 'edit'])->name('admin-galeri.edit');
    Route::post('/admin/galeri', [AdminGaleriController::class, 'store'])->name('admin-galeri.store');
    Route::delete('/galeri/delete/{id}', [AdminGaleriController::class, 'delete'])->name('admin-galeri.delete');

});

require __DIR__.'/auth.php';
