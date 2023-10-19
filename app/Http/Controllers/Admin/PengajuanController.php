<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(){
        return view('admin/pengajuan/index');
    }

    public function masuk(){
        return view('admin/pengajuan/masuk');
    }
    
    public function proses(){
        return view('admin/pengajuan/proses');
    }
    
    public function selesai(){
        return view('admin/pengajuan/selesai');
    }
    
    public function ditolak(){

        $data = Pengajuan::all();

        return view('admin/pengajuan/ditolak', compact('data'));
    }
}
