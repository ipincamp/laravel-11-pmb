<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPath extends Model
{
    protected $fillable = [
        'label',
        'path',
        'mahasiswa_id',
    ];
}
