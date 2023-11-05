<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function showCount()
    {
        $visitorCount = Visitor::count();
        return view('visitor-count', compact('visitorCount'));
    }
}
