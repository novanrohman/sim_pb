<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama_guru',
        'nip',
        'telp_guru',
        'email_guru',
        'jenis_kelamin',
        'alamat_guru',
        'id_mapel',
    ];
}
