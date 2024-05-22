<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    protected $fillable = [
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'no_hp',
        'user_id',
    ];
}
