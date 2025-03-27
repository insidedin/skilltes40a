<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = ['nama_suplier', 'email', 'kontak', 'alamat', 'keterangan'];
}
