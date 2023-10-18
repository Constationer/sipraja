<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index(){

        $data = Galeri::all();

        return view('admin.galeri.index', compact('data'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $gambarPath = $gambar->store('public/data/galeri');
        $gambarPath = str_replace('public/', '', $gambarPath);
        
        Galeri::create([
            'gambar'    => $gambarPath,
            'publish'   => $request->has('publish'),
        ]);

        return redirect()->route('admin-galeri.index')->with('success', 'Data saved successfully');
    }

    public function delete($id)
    {
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return redirect()->route('galeri.index')->with('error', 'Galeri not found');
        }

        $imagePath = 'public/data/galeri/' . $galeri->gambar;

        if (!is_null($galeri->gambar)) {
            Storage::delete($imagePath);
        }

        $galeri->delete();

        return redirect()->route('admin-galeri.index')->with('success', 'Galeri deleted successfully');
    }

    public function edit($id)
    {
        $data = Galeri::find($id);

        if (!$data) {
            return redirect()->route('admin-galeri.index')->with('error', 'Galeri not found');
        }

        return view('admin.galeri.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // Add validation rules for your fields
        ]);

        // Find the Galeri item by its ID
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return redirect()->route('admin-galeri.index')->with('error', 'Galeri not found');
        }

        // Update the Galeri item with the new data
        $galeri->update([
            'field1' => $request->input('field1'),
            'field2' => $request->input('field2'),
            // Add more fields as needed
        ]);

        return redirect()->route('admin-galeri.index')->with('success', 'Galeri updated successfully');
    }

}
