<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = 'penuliss';
    protected $primaryKey = 'kd_penulis';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = [
        'nama_penulis', 'tempat_lahir', 'tgl_lahir', 'email'
    ];

    public function bukus()
    {
        return $this->hasMany(Buku::class, 'kd_penulis', 'kd_penulis');
    }
}
