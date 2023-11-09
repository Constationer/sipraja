<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\Permintaan;
use App\Models\User;
use Illuminate\Http\Request;

class PengajuanController extends Controller
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
        $data = Pengajuan::where('desa_tersangka', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return view('admin/pengajuan/index', compact('data', 'checker', 'checker2'));
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

        return view('admin/pengajuan/create', compact('data', 'checker', 'checker2'));
    }

    public function generateUniqueCode()
    {
        $code = '';
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codeLength = 6;

        do {
            $code = '';
            for ($i = 0; $i < $codeLength; $i++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }
        } while (Pengajuan::where('kode', $code)->exists()); // Check if code exists in the database

        return $code;
    }

    public function store(Request $request)
    {
        $kode = $this->generateUniqueCode();

        $request->validate([
            'nama_pelapor'      => 'required',
            'alamat_pelapor'    => 'required',
            'no_pelapor'        => ['required', 'regex:/^\d{10,15}$/'],
            'nama_perkara'      => 'required',
            'desa_tersangka'    => 'required',
            'alamat_tersangka'  => 'required',
            'polisi'            => 'required|in:Polsek Bone,Polsek Sukamaju,Polsek Mappadeceng,Polsek Masamba,Polsek Baebunta,Polsek Malangke,Polsek Malangke Barat,Polsek Limbong,Polsek Sabbang',
            'deskripsi'         => 'required',
        ], [
            'nama_pelapor.required'     => 'Nama Pelapor diperlukan',
            'alamat_pelapor.required'   => 'Alamat Pelapor diperlukan',
            'no_pelapor.required'       => 'No Handphone diperlukan',
            'no_pelapor.regex'          => 'No Handphone tidak valid',
            'nama_perkara.required'     => 'Nama Perkara diperlukan',
            'desa_tersangka.required'   => 'Desa Tersangka diperlukan',
            'alamat_tersangka.required' => 'Alamat Tersangka diperlukan',
            'polisi.required'           => 'Polisi/Polsek diperlukan',
            'deskripsi'                 => 'Deskripsi diperlukan'
        ]);

        Pengajuan::create([
            'nama_pelapor'      => $request->input('nama_pelapor'),
            'alamat_pelapor'    => $request->input('alamat_pelapor'),
            'no_pelapor'        => $request->input('no_pelapor'),
            'nama_perkara'      => $request->input('nama_perkara'),
            'desa_tersangka'    => $request->input('desa_tersangka'),
            'alamat_tersangka'  => $request->input('alamat_tersangka'),
            'polisi'            => $request->input('polisi'),
            'deskripsi'         => $request->input('deskripsi'),
            'kode'              => $kode
        ]);

        $desa = User::where('id', $request->input('desa_tersangka'))->first();

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
                'target' => $request->no_pelapor . '|' . $request->nama_pelapor . '|' . $request->nama_perkara . '| Diperiksa | ' . $kode,
                'message' => "*Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan*\n\nData anda sudah diterima untuk melakukan pengajuan Restorative Justice dengan data sebagai berikut \n\nNama Pelapor: {name}\nNama Perkara: {var1}\nStatus: {var2}\nKode: {var3}\n\nUntuk mengkases proses Pengajuan, anda bisa memasukan *KODE* pada halaman utama website.\nTerima kasih\n*Kejaksaan Negeri Luwu Utara*",
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

        return redirect()->route('admin-dashboard.index')->with('success', 'Pengajuan Restorative Justice Berhasil Diajukan Pada ' . $desa->name . '.');
    }

    public function masuk()
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $checker2 = Permintaan::where('status', 'Pending')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $checker2 = NULL;
        }
        if (auth()->user()->role == 'Admin') {
            $data = Pengajuan::with('user')->where('status', 'Masuk')->orderBy('created_at', 'desc')->get();
        } else {
            $data = Pengajuan::with('user')->where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        }

        return view('admin/pengajuan/masuk', compact('data', 'checker', 'checker2'));
    }

    public function proses()
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $checker2 = Permintaan::where('status', 'Pending')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $checker2 = NULL;
        }
        if (auth()->user()->role == 'Admin') {
            $data = Pengajuan::where('status', 'Proses')->orderBy('created_at', 'desc')->get();
        } else {
            $data = Pengajuan::where('status', 'Proses')->where('desa_tersangka', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        }

        return view('admin/pengajuan/proses', compact('data', 'checker', 'checker2'));
    }

    public function selesai()
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $checker2 = Permintaan::where('status', 'Pending')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $checker2 = NULL;
        }
        if (auth()->user()->role == 'Admin') {
            $data = Pengajuan::where('status', 'Selesai')->orderBy('created_at', 'desc')->get();
        } else {
            $data = Pengajuan::where('status', 'Selesai')->where('desa_tersangka', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        }

        return view('admin/pengajuan/selesai', compact('data', 'checker', 'checker2'));
    }

    public function ditolak()
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
            $checker2 = Permintaan::where('status', 'Pending')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
            $checker2 = NULL;
        }
        if (auth()->user()->role == 'Admin') {
            $data = Pengajuan::where('status', 'Ditolak')->orderBy('created_at', 'desc')->get();
        } else {
            $data = Pengajuan::where('status', 'Ditolak')->where('desa_tersangka', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        }

        return view('admin/pengajuan/ditolak', compact('data', 'checker', 'checker2'));
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
                'target' => $data->no_pelapor . '|' . $data->nama_pelapor . '|' . $data->nama_perkara . '|' . $data->status,
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
                'target' => $data->no_pelapor . '|' . $data->nama_pelapor . '|' . $data->nama_perkara . '|' . $data->status . '|' . $data->keterangan,
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
                'target' => $data->no_pelapor . '|' . $data->nama_pelapor . '|' . $data->nama_perkara . '|' . $data->status . '|' . $data->keterangan,
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
