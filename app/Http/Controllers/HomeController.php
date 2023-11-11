<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Pengajuan;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galeri = Galeri::where('publish', 1)->limit(3)->orderBy('created_at', 'desc')->get();
        $visitor = Visitor::count();
        $today = Carbon::now()->toDateString();
        $visitorToday = Visitor::whereDate('visited_at', '>=', $today)
            ->whereDate('visited_at', '<', Carbon::parse($today)->addDay())
            ->distinct('ip_address')
            ->count('ip_address');
        return view('home', compact('galeri', 'visitor', 'visitorToday'));
    }

    public function pencarian($id)
    {
        $data = Pengajuan::findOrFail($id);
        $visitor = Visitor::count();
        $today = Carbon::now()->toDateString();
        $visitorToday = Visitor::whereDate('visited_at', '>=', $today)
            ->whereDate('visited_at', '<', Carbon::parse($today)->addDay())
            ->distinct('ip_address')
            ->count('ip_address');

        return view('pencarian.index', compact('data', 'visitor', 'visitorToday'));
    }
}
