<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'rt_rw',
        'kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'no_hp',
    ];
}
