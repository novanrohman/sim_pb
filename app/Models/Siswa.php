<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

use function Laravel\Prompts\password;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable=[
        'nis',
        'nama_siswa',
        'tempat_lahir',
        'tanggla_lahir',
        'jenis_kelamin',
        'email_siswa',
        'password',
        'id_kelas',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
