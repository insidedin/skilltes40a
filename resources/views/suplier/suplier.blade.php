@extends('layouts.main')

@section('judul', 'Halaman Suplier')

@section('konten')
    <div class="container-fluid">
        <h4 class="mb-3">Data Suplier</h4>
        <nav aria-label="breadcrumb" class="mb-1">
            <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Suplier</li>
            </ol>
        </nav>

        <!-- tampilan tabel data suplier -->
        <div class="row">
            <div class="col">
                <div class="mt-3 card">
                    <!-- judul -->
                    <div class="card-header">
                        <strong>Data Suplier</strong>
                        <div class="w-100 text-end">
                            <a href="" class="btn btn-outline-primary btn-sm">Refresh Data</a>
                        </div>
                    </div>
                    <!-- isi data -->
                </div>
            </div>
        </div>

    </div>
@endsection