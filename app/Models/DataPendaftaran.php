<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendaftaran extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'jalur_seleksi',
        'prodi_utama_id',
        'prodi_dua_id',
        'prodi_tiga_id',
        'mahasiswa_id',
    ];
}
