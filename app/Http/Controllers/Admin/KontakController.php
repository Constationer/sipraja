<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use App\Models\Pengajuan;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {

        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $checker2 = Permintaan::where('status', 'Pending')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $checker2 = NULL;
        }
        $data = Kontak::all();

        return view('admin.kontak.index', compact('data', 'checker', 'checker2'));
    }

    public function delete($id)
    {
        $data = Kontak::find($id);

        $data->delete();

        return redirect()->route('admin-kontak.index')->with('success', 'Data Pertanyaan Kontak dihapus');
    }
}
