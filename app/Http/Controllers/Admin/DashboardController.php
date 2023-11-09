<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\Permintaan;
use App\Models\Sosialisasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $masuk = Pengajuan::where('status', 'Masuk')->count();
            $proses = Pengajuan::where('status', 'Proses')->count();
            $selesai = Pengajuan::where('status', 'Selesai')->count();
            $tolak = Pengajuan::where('status', 'Ditolak')->count();
            $sosialisasi = Sosialisasi::where('tanggal', '>', now())->get();
            $check = Sosialisasi::where('tanggal', '>', now())->count();
            $checker2 = Permintaan::where('status', 'Pending')->count();
            $permintaan = Permintaan::where('status', 'Pending')->count();
            $data = Sosialisasi::all();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $masuk = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $proses = Pengajuan::where('status', 'Proses')->where('desa_tersangka', auth()->user()->id)->count();
            $selesai = Pengajuan::where('status', 'Selesai')->where('desa_tersangka', auth()->user()->id)->count();
            $tolak = Pengajuan::where('status', 'Ditolak')->where('desa_tersangka', auth()->user()->id)->count();
            $sosialisasi = Sosialisasi::where('user_id', auth()->user()->id)->where('tanggal', '>', now())->get();
            $check = Sosialisasi::where('user_id', auth()->user()->id)->where('tanggal', '>', now())->count();
            $checker2 = NULL;
            $permintaan = NULL;
            $data = Sosialisasi::where('user_id', auth()->user()->id)->get();
        }

        return view('admin/dashboard', compact('masuk', 'proses', 'selesai', 'tolak', 'sosialisasi', 'data', 'check', 'checker', 'permintaan', 'checker2'));
    }
}
