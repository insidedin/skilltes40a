<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan()
    {
        $data = Pelanggan::all();
        return view('pelanggan.pelanggan', compact('data'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'email' => 'required',
            'telp' => 'required',
        ]);

        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'email' =>  $request->email,
            'telp' => $request->telp,
        ]);

        return redirect()->route('pelanggan.pelanggan')->with('messege', 'Data Pelanggan Berhasil Disimpan');
    }
}
