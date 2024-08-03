<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';
    protected $primaryKey = 'id_anggota';
    public $incrementing = false;
    protected $keyType = 'int'; 
    protected $fillable = [
        'nama', 'no_hp', 'alamat', 'email'
    ];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'id_anggota', 'id_anggota');
    }

    public function sanksis()
    {
        return $this->hasMany(Sanksi::class, 'id_anggota', 'id_anggota');
    }
}
