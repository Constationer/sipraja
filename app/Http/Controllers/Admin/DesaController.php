<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DesaController extends Controller
{
    public function index()
    {
        $data = User::where('role', '!=', 'admin')->get();

        return view('admin.desa.index', compact('data'));
    }

    public function edit($id)
    {
        $data           = User::findOrFail($id);

        return view('admin.desa.edit', compact('data'));
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
        $data   = User::findOrFail($id);

        return view('admin.desa.editpw', compact('data'));
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
