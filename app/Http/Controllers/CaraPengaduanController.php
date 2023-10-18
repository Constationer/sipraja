<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaraPengaduanController extends Controller
{
    public function index()
    {
        return view('cara_pengaduan');
    }
}
