<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        return view('admin/pengajuan/index');
    }

    public function masuk()
    {
        $data = Pengajuan::where('status', 'Masuk')->get();

        return view('admin/pengajuan/masuk', compact('data'));
    }

    public function proses()
    {
        $data = Pengajuan::where('status', 'Proses')->get();

        return view('admin/pengajuan/proses', compact('data'));
    }

    public function selesai()
    {
        $data = Pengajuan::where('status', 'Selesai')->get();

        return view('admin/pengajuan/selesai', compact('data'));
    }

    public function ditolak()
    {

        $data = Pengajuan::where('status', 'Ditolak')->get();

        return view('admin/pengajuan/ditolak', compact('data'));
    }

    public function sendProses(Request $request, $id)
    {
        //082276095022
        $data = Pengajuan::findorFail($id);
        if (!$data) {
            return redirect()->route('admin-pengajuan.masuk')->with('error', 'Pengajuan tidak berhasil ditemukan');
        }
        $data->status = 'Proses';
        $data->save();

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
                'target' => '081224377189|' . $data->nama_pelapor . '|' . $data->nama_perkara . '|' . $data->status,
                'message' => "*Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan*\n\nBerikut adalah update pada Pengajuan Restorative Justice, dengan data dibawah ini\n\nNama Pelapor: {name}\nNama Perkara: {var1}\nStatus: {var2}\n\nTerima kasih\n*Kejaksaan Negeri Luwu Utara*",
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

        return redirect()->route('admin-pengajuan.masuk')->with('success', 'Pengajuan berhasil diproses!');
    }

    public function sendDitolak(Request $request, $id)
    {
        //082276095022
        $data = Pengajuan::findorFail($id);
        if (!$data) {
            return redirect()->route('admin-pengajuan.masuk')->with('error', 'Pengajuan tidak berhasil ditemukan');
        }
        $data->status = 'Ditolak';
        $data->keterangan = $request->input('keterangan');
        $data->save();

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
                'target' => '081224377189|' . $data->nama_pelapor . '|' . $data->nama_perkara . '|' . $data->status . '|' . $data->keterangan,
                'message' => "*Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan*\n\nBerikut adalah update pada Pengajuan Restorative Justice, dengan data dibawah ini\n\nNama Pelapor: {name}\nNama Perkara: {var1}\nStatus: {var2}\nKeterangan: {var3}\n\nTerima kasih\n*Kejaksaan Negeri Luwu Utara*",
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

        return redirect()->route('admin-pengajuan.masuk')->with('success', 'Pengajuan berhasil ditolak!');
    }

    public function sendSelesai(Request $request, $id)
    {
        $data = Pengajuan::findorFail($id);
        if (!$data) {
            return redirect()->route('admin-pengajuan.proses')->with('error', 'Pengajuan tidak berhasil ditemukan');
        }
        $data->status = 'Selesai';
        $data->keterangan = $request->input('keterangan');
        $data->save();

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
                'target' => '081224377189|' . $data->nama_pelapor . '|' . $data->nama_perkara . '|' . $data->status . '|' . $data->keterangan,
                'message' => "*Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan*\n\nBerikut adalah update pada Pengajuan Restorative Justice, dengan data dibawah ini\n\nNama Pelapor: {name}\nNama Perkara: {var1}\nStatus: {var2}\nKeterangan: {var3}\n\nTerima kasih\n*Kejaksaan Negeri Luwu Utara*",
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

        return redirect()->route('admin-pengajuan.proses')->with('success', 'Pengajuan berhasil diselesaikan!');
    }
}
