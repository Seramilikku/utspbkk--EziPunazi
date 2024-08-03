<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamans';
    protected $primaryKey = 'id_peminjaman';
    protected $fillable = [
        'no_buku', 'id_anggota', 'tgl_peminjaman', 'tgl_pengembalian', 'status'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'no_buku', 'no_buku');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota', 'id_anggota');
    }

    public function sanksi()
    {
        return $this->hasOne(Sanksi::class, 'id_peminjaman', 'id_peminjaman');
    }
}
