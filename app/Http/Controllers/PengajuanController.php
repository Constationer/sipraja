<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('pengajuan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'no_pelapor' => ['required', 'regex:/^\d{10,15}$/'],
            'nama_perkara' => 'required',
            'alamat_tersangka' => 'required',
            'polisi' => 'required|in:Polsek Bone,Polsek Sukamaju,Polsek Mappadeceng,Polsek Masamba,Polsek Baebunta,Polsek Malangke,Polsek Malangke Barat,Polsek Limbong,Polsek Sabbang',
            'deskripsi' => 'required',
        ], [
            'nama_pelapor.required'     => 'Nama Pelapor diperlukan',
            'no_pelapor.required'       => 'No Handphone diperlukan',
            'no_pelapor.regex'          => 'No Handphone tidak valid',
            'nama_perkara.required'     => 'Nama Perkara diperlukan',
            'alamat_tersangka.required' => 'Alamat Tersangka diperlukan',
            'polisi.required'           => 'Polisi/Polsek diperlukan',
            'deskripsi'                 => 'Deskripsi diperlukan'
        ]);

        Pengajuan::create([
            'nama_pelapor'    => $request->input('nama_pelapor'),
            'no_pelapor'    => $request->input('no_pelapor'),
            'nama_perkara'    => $request->input('nama_perkara'),
            'alamat_tersangka'    => $request->input('alamat_tersangka'),
            'polisi'    => $request->input('polisi'),
            'deskripsi'    => $request->input('deskripsi'),
        ]);

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
                'target' => $request->no_pelapor . '|' . $request->nama_pelapor . '|' . $request->nama_perkara . '|' . $request->status,
                'message' => "*Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan*\n\nData anda sudah diterima untuk melakukan pengajuan Restorative Justice dengan data sebagai berikut \n\nNama Pelapor: {name}\nNama Perkara: {var1}\nStatus: {var2}\n\nTerima kasih\n*Kejaksaan Negeri Luwu Utara*",
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

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan Restorative Justice Berhasil Diajukan.');
    }
}
