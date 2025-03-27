@extends('layouts.main')

@section('judul', 'Halaman Tambah Admin')

@section('konten')
    <div class="container mt-3">
        <div class="card">
            <!-- judul -->
            <div class="card-header"><strong>Tambah Admin</strong></div>
            <!-- isi form -->
            <div class="card-body">
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf 
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection