<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama_guru',
        'nip',
        'telp_guru',
        'email',
        'jenis_kelamin',
        'alamat_guru',
        'id_mapel',
        'password',
    ];

    public function matapelajaran()
    {
        return $this->belongsTo(MataPelajaran::class,'id');
    }
}
