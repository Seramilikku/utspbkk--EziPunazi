<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';
    protected $primaryKey = 'no_buku';
    protected $fillable = [
        'judul', 'edisi', 'no_rak', 'tahun', 'penerbit', 'kd_penulis'
    ];

    public function rak()
    {
        return $this->belongsTo(Rak::class, 'no_rak', 'kd_rak');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'kd_penulis', 'kd_penulis');
    }

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'no_buku', 'no_buku');
    }
}
