<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonMahasiswa extends Model
{
    use HasFactory;

    protected $table = "calon_mahasiswa";
    protected $fillabel = [
    'email',
    'nama',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin',
    'alamat',
    'rt_rw',
    'kelurahan',
    'kecamatan',
    'kabupaten_kota',
    'provinsi',
    'no_hp',
];
}



