<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelengkapan extends Model
{
    protected $fillable = [
        'opsi_1',
        'opsi_2',
        'opsi_3',
        'progress',
        'keterangan',
        'mahasiswa_id',
    ];
}
