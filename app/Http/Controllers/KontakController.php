<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required',
            'handphone'     => ['required', 'regex:/^\d{10,15}$/'],
            'jenis'         => 'required',
            'pertanyaan'    => 'required',
        ], [
            'nama.required'         => 'Nama diperlukan',
            'handphone.required'    => 'No Handphone diperlukan',
            'handphone.regex'       => 'No Handphone tidak valid',
            'jenis.required'        => 'Jenis Pertanyaan diperlukan',
            'pertanyaan.required'      => 'Isi Pertanyaan diperlukan',
        ]);

        Kontak::create([
            'nama'          => $request->input('nama'),
            'handphone'     => $request->input('handphone'),
            'jenis'         => $request->input('jenis'),
            'pertanyaan'    => $request->input('pertanyaan'),
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
                'target' => $request->handphone . '|' . $request->nama . '|' . $request->jenis . '|' . $request->pertanyaan,
                'message' => "*Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan*\n\nBpk/Ibu {name},\nPertanyaan anda berhasil kami terima dengan data berikut:\n\nNama Pelapor: {name}\nJenis: {var1}\nPertanyaan: {var2}\n\nSelanjutnya akan kami hubungin langsung kenomor WA, mohon untuk tetap mengaktifkan nomor tersebut.\nTerima kasih\n*Kejaksaan Negeri Luwu Utara*",
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

        return redirect()->route('kontak.index')->with('success', 'Pertanyaan anda berhasil Diajukan.');
    }
}
