<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//route untuk admin
Route::get('/admin', [AdminController::class, 'admin'])->name('admin.admin');
Route::get('/tambahadmin', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');






//route untuk suplier
Route::get('/suplier', [SuplierController::class, 'suplier'])->name('suplier');

//route untuk pelanggan
Route::get('/pelanggan', [PelangganController::class, 'pelanggan'])->name('pelanggan');