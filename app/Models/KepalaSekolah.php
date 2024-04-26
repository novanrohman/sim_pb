<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class KepalaSekolah extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable=[
      'nama','nip','email','telp','password'
    ];
}

