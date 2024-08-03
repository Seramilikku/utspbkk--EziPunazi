<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanksi extends Model
{
    protected $table = 'sanksis';
    protected $primaryKey = 'id_sanksi';
    protected $fillable = [
        'id_anggota', 'id_peminjaman', 'jumlah_denda', 'status'
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id_anggota');
    }

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }
}
