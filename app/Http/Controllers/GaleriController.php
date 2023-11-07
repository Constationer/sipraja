<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $data = Galeri::where('publish', '1')->get();

        return view('galeri', compact('data'));
    }
}
