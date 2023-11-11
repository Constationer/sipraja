<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function akses($kode)
    {
        try {
            $data = Pengajuan::with('user')->where('kode', $kode)->firstOrFail();
            $visitor = Visitor::count();
            $today = Carbon::now()->toDateString();
            $visitorToday = Visitor::whereDate('visited_at', '>=', $today)
                ->whereDate('visited_at', '<', Carbon::parse($today)->addDay())
                ->distinct('ip_address')
                ->count('ip_address');

            return view('pencarian', compact('data', 'visitor', 'visitorToday'));
        } catch (ModelNotFoundException $e) {
            $data = "none";
            $visitor = Visitor::count();
            $today = Carbon::now()->toDateString();
            $visitorToday = Visitor::whereDate('visited_at', '>=', $today)
                ->whereDate('visited_at', '<', Carbon::parse($today)->addDay())
                ->distinct('ip_address')
                ->count('ip_address');
            return view('pencarian', compact('data', ' visitor', 'visitorToday')); // Replace with the name of your custom error page
        }
    }
}
