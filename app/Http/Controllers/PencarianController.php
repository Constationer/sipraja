<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function akses($kode)
    {
        try {
            $data = Pengajuan::with('user')->where('kode', $kode)->firstOrFail();

            return view('pencarian', compact('data'));
        } catch (ModelNotFoundException $e) {
            $data = "none";
            return view('pencarian', compact('data')); // Replace with the name of your custom error page
        }
    }
}
