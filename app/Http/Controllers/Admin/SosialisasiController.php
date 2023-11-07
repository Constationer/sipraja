<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\Sosialisasi;
use App\Models\User;
use Illuminate\Http\Request;

class SosialisasiController extends Controller
{
    public function index()
    {

        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
        }
        $data = Sosialisasi::with('user')->get();

        return view('admin.sosialisasi.index', compact('data', 'checker'));
    }

    public function create()
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
        }
        $data = User::where('role', 'user')->get();
        return view('admin.sosialisasi.create', compact('data', 'checker'));
    }

    public function store(Request $request)
    {
        Sosialisasi::create([
            'user_id'       => $request->user_id,
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi,
            'link'          => $request->link,
            'tanggal'       => $request->tanggal,
        ]);

        $data = User::where('id', $request->user_id)->first();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $data->handphone . ' | ' . $data->name . ' |' . $request->judul . '|' . $request->deskripsi . '|' . $request->link . '|' . $request->tanggal,
                'message' => "*Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan*\n\nHalo Pengelola {name},\nKegiatan zoom telah diagendakan, berdasarkan data berikut:\n\nJudul: {var1}\nDeskripsi: {var2}\nLink: {var3}\nTanggal: {var4}\n\nTerima kasih\n*Kejaksaan Negeri Luwu Utara*",
                'url' => $request->link,
                'typing' => false,
                'delay' => '2',
                'countryCode' => '62',
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: VyFngE4ZBU0IR6nhpXS@'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return redirect()->route('admin-sosialisasi.index')->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
        }
        $data           = User::all();
        $sosialisasi    = Sosialisasi::findoRFail($id);
        return view('admin.sosialisasi.edit', compact('data', 'checker', 'sosialisasi'));
    }

    public function update(Request $request, $id)
    {
        $data = Sosialisasi::findOrFail($id);

        $data->user_id      = $request->user_id;
        $data->judul        = $request->judul;
        $data->deskripsi    = $request->deskripsi;
        $data->link         = $request->link;
        $data->tanggal      = $request->tanggal;

        $data->update();

        return redirect()->route('admin-sosialisasi.index')->with('success', 'Data updated successfully');
    }

    public function delete($id)
    {
        $data = Sosialisasi::find($id);

        $data->delete();

        return redirect()->route('admin-sosialisasi.index')->with('success', 'Data sosialisasi dihapus');
    }
}
