<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {

        $data = Kontak::all();

        return view('admin.kontak.index', compact('data'));
    }

    public function delete($id)
    {
        $data = Kontak::find($id);

        $data->delete();

        return redirect()->route('admin-kontak.index')->with('success', 'Data Pertanyaan Kontak dihapus');
    }
}
