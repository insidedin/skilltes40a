@extends('layouts.main')

@section('judul', 'Tambah Suplier')

@section('konten')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Suplier</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('suplier.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_suplier" class="form-label">Nama Suplier</label>
                    <input type="text" class="form-control" id="nama_suplier" name="nama_suplier" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <select class="form-select" id="keteranagan" name="keterangan" required>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection