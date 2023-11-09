<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Pengajuan;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
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
        $data = Galeri::all();

        return view('admin.galeri.index', compact('data', 'checker', 'checker2'));
    }

    public function create()
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $checker2 = Permintaan::where('status', 'Pending')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $checker2 = NULL;
        }
        return view('admin.galeri.create', compact('checker', 'checker2'));
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        if ($gambar) {
            $gambarPath = $gambar->store('public/data/galeri');
        }
        $gambarPath = str_replace('public/', '', $gambarPath);

        Galeri::create([
            'gambar'    => $gambarPath,
            'publish'   => $request->has('publish'),
        ]);

        return redirect()->route('admin-galeri.index')->with('success', 'Data saved successfully');
    }

    public function delete($id)
    {
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return redirect()->route('admin-galeri.index')->with('error', 'Foto tidak berhasil ditemukan');
        }

        $imagePath = 'public/data/galeri/' . $galeri->gambar;

        if (!is_null($galeri->gambar)) {
            Storage::delete($imagePath);
        }

        $galeri->delete();

        return redirect()->route('admin-galeri.index')->with('success', 'Foto berhasil dihapus');
    }

    public function edit($id)
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $checker2 = Permintaan::where('status', 'Pending')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $checker2 = NULL;
        }
        $data = Galeri::find($id);

        if (!$data) {
            return redirect()->route('admin-galeri.index')->with('error', 'Foto tidak berhasil ditemukan');
        }

        return view('admin.galeri.edit', compact('data', 'checker', 'checker2'));
    }

    public function setVisible(Request $request, $id)
    {
        $data = Galeri::findorFail($id);

        if (!$data) {
            return redirect()->route('admin-galeri.index')->with('error', 'Foto tidak berhasil ditemukan');
        }

        if ($data->publish == 0) {
            $data->publish = 1;
        } else if ($data->publish == 1) {
            $data->publish = 0;
        }

        $data->save();

        return redirect()->route('admin-galeri.index')->with('success', 'Setting publish berhasil diubah');
    }
}
