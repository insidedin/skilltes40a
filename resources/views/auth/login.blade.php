@extends('layouts.auth')

@section('judul','Halaman Login')

@section('konten')
    <div class="login-card card">
        <div class="row">
            <!-- konten bagian kiri -->
            <div class="col-md-6">
                <img src="{{ asset('assets/logo.png')}}" class="img-fluid">
            </div>

            <!-- konten bagian kanan -->
            <div class=col-md-6>
                <div class="card-body">
                    <h3 class="text-center mb-3">Admin Login</h3>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" >
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" >
                        </div>
                        <a href="/dashboard" class="btn btn-primary w-100" type="submit">Login</a>

                    <div class="text-center mt-3">
                        <a href="">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection