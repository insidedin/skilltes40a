@extends('layouts.main')

@section('judul', 'Halaman Admin')

@section('konten')
    <div class="container-fluid">
        <h4 class="mb-3">Data Admin</h4>
        <nav aria-label="breadcrumb" class="mb-1">
            <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Admin</li>
            </ol>
        </nav>

        <!-- tampilan tabel data admin -->
        <div class="row">
            <div class="col">
                <div class="mt-3 card">
                    <!-- judul -->
                    <div class="card-header">
                        <strong>Data Admin</strong>
                        <div class="w-100 text-end">
                            <a href="" class="btn btn-outline-primary btn-sm">Refresh Data</a>
                        </div>
                    </div>
                    <!-- tombol tambah & cari data -->
                    <div class="mx-3 my-4 row">
                        <div class="col-6">
                            <a href="/tambahadmin" class="btn btn-primary btn-sm">Tambah Data</a>
                        </div>
                        <div class="col-6">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari Nama Admin..">
                                    <button class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- isi table data admin -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="" class="d-inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection