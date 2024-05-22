<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataOrtuWali extends Model
{
    protected $fillable = [
        'ortu_ayah',
        'ortu_ibu',
        'no_hp_ortu',
        'wali_ayah',
        'wali_ibu',
        'no_hp_wali',
        'mahasiswa_id',
    ];
}
