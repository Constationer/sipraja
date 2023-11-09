<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\Permintaan;
use App\Models\User;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    public function index()
    {

        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $data = Permintaan::with('user')->orderBy('created_at', 'desc')->get();
            $checker2 = Permintaan::where('status', 'Pending')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $data = Permintaan::with('user')->orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->get();
            $checker2 = NULL;
        }

        return view('admin.permintaan.index', compact('data', 'checker', 'checker2'));
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
        $data = User::where('role', 'user')->get();
        return view('admin.permintaan.create', compact('data', 'checker', 'checker2'));
    }

    public function store(Request $request)
    {
        Permintaan::create([
            'user_id'       => auth()->user()->id,
            'judul'         => $request->judul,
            'keterangan'    => $request->keterangan,
        ]);

        return redirect()->route('admin-permintaan.index')->with('success', 'Data saved successfully');
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
        $data           = User::all();
        $permintaan    = Permintaan::findoRFail($id);
        return view('admin.permintaan.edit', compact('data', 'checker', 'permintaan', 'checker2'));
    }

    public function update(Request $request, $id)
    {
        $data = Permintaan::findOrFail($id);

        $data->user_id      = $request->user_id;
        $data->judul        = $request->judul;
        $data->deskripsi    = $request->deskripsi;
        $data->link         = $request->link;
        $data->tanggal      = $request->tanggal;

        $data->update();

        return redirect()->route('admin-permintaan.index')->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $data = Permintaan::find($id);

        $data->delete();

        return redirect()->route('admin-permintaan.index')->with('success', 'Data permintaan dihapus');
    }

    public function sendProses(Request $request, $id)
    {
        //082276095022
        $data = Permintaan::findorFail($id);
        if (!$data) {
            return redirect()->route('admin-permintaan.index')->with('error', 'Permintaan tidak berhasil ditemukan');
        }
        $data->status = 'Diproses';
        $data->save();

        return redirect()->route('admin-permintaan.index')->with('success', 'Permintaan berhasil diproses!');
    }

    public function sendDitolak(Request $request, $id)
    {
        //082276095022
        $data = Permintaan::findorFail($id);
        if (!$data) {
            return redirect()->route('admin-permintaan.index')->with('error', 'Permintaan tidak berhasil ditemukan');
        }
        $data->status = 'Ditolak';
        $data->save();

        return redirect()->route('admin-permintaan.index')->with('success', 'Permintaan berhasil ditolak!');
    }
}
