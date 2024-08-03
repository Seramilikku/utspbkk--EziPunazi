<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = 'raks';
    protected $primaryKey = 'kd_rak';
    protected $fillable = [
        'lokasi'
    ];

    public function bukus()
    {
        return $this->hasMany(Buku::class, 'no_rak', 'kd_rak');
    }
}
