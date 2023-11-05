<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaraPengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaraPengaduanController extends Controller
{
    public function index()
    {

        $data = CaraPengaduan::all();

        return view('admin.carapengaduan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.carapengaduan.create');
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('public/data/galeri');
        $gambarPath = str_replace('public/', '', $gambarPath);

        CaraPengaduan::create([
            'gambar'    => $gambarPath,
        ]);

        return redirect()->route('admin-carapengaduan.index')->with('success', 'Data saved successfully');
    }

    public function delete($id)
    {
        $galeri = CaraPengaduan::find($id);

        if (!$galeri) {
            return redirect()->route('admin-carapengaduan.index')->with('error', 'Foto tidak berhasil ditemukan');
        }

        $imagePath = 'public/data/carapengaduan/' . $galeri->gambar;

        if (!is_null($galeri->gambar)) {
            Storage::delete($imagePath);
        }

        $galeri->delete();

        return redirect()->route('admin-carapengaduan.index')->with('success', 'Foto berhasil dihapus');
    }
}
