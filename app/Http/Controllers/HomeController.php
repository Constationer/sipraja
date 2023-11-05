<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Pengajuan;
use App\Models\Visitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $visitorCount = Visitor::count();
        $galeri = Galeri::where('publish', 1)->get();
        return view('home', compact('visitorCount', 'galeri'));
    }

    public function pencarian($id)
    {
        $data = Pengajuan::findOrFail($id);

        return view('pencarian.index', compact('data'));
    }
}
