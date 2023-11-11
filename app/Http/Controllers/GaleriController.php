<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $data = Galeri::where('publish', '1')->get();
        $visitor = Visitor::count();
        $today = Carbon::now()->toDateString();
        $visitorToday = Visitor::whereDate('visited_at', '>=', $today)
            ->whereDate('visited_at', '<', Carbon::parse($today)->addDay())
            ->distinct('ip_address')
            ->count('ip_address');

        return view('galeri', compact('data', 'visitor', 'visitorToday'));
    }

    public function loadMoreImages(Request $request)
    {
        $offset = $request->get('offset', 0);
        $limit = 3; // Number of images to load each time

        // Fetch additional images from the database
        $images = Galeri::skip($offset)->take($limit)->get();

        return response()->json($images);
    }
}
