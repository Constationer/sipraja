<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DesaController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
        }

        $data = User::where('role', '!=', 'admin')->get();

        return view('admin.desa.index', compact('data', 'checker'));
    }

    public function edit($id)
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
        }
        $data           = User::findOrFail($id);

        return view('admin.desa.edit', compact('data', 'checker'));
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $data->handphone      = $request->handphone;

        $data->update();

        return redirect()->route('admin-desa.index')->with('success', 'Data updated successfully');
    }

    public function editpw($id)
    {
        if (auth()->user()->role == 'Admin') {
            $checker = Pengajuan::where('status', 'Masuk')->count();
        } else {
            $checker = Pengajuan::where('status', 'Masuk')->where('desa_tersangka', auth()->user()->id)->count();
        }
        $data   = User::findOrFail($id);

        return view('admin.desa.editpw', compact('data', 'checker'));
    }

    public function updatepw(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $newPassword = $request->input('password');
        $hashedPassword = Hash::make($newPassword);

        $data->password = $hashedPassword;

        $data->update();

        return redirect()->route('admin-desa.index')->with('success', 'Data updated successfully');
    }
}
