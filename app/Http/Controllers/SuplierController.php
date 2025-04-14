<?php

namespace App\Http\Controllers;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function suplier()
    {
        $data = Suplier::all();
        return view('suplier.suplier' , compact('data'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_suplier' => 'required',
            'email' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required|in:Aktif,Tidak Aktif'
        ]);

        Suplier::create([
            'nama_suplier' => $request->nama_suplier,
            'email' =>  $request->email,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('suplier.suplier')->with('messege', 'Data Suplier Berhasil Disimpan');
    }
}
