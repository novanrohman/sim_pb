<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $fillable=[
      'mata_pelajaran',
      'semester',
    ];
    
    public function guru()
    {
        return $this->hasMany(MataPelajaran::class,'id_mapel');
    }
}
