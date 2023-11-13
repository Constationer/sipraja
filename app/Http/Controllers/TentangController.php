<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $visitor = Visitor::count();
        $today = Carbon::now()->toDateString();
        $visitorToday = Visitor::whereDate('visited_at', '>=', $today)
            ->whereDate('visited_at', '<', Carbon::parse($today)->addDay())
            ->distinct('ip_address')
            ->count('ip_address');
        return view('tentang', compact('visitor', 'visitorToday'));
    }
}
