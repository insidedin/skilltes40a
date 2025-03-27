<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $data = Admin::all();
        return view('admin.admin', compact('data'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Admin::create([
            'nama' => $request->nama,
            'email' =>  $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.admin')->with('messege', 'Data Admin Berhasil Disimpan');
    }
}
