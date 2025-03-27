<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['nama', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
}
