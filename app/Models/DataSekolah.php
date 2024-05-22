<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'derajat',
        'jurusan',
        'mahasiswa_id',
    ];
}
