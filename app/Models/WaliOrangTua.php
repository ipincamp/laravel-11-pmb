<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliOrangTua extends Model
{
    use HasFactory;

    protected $fillable = [
        'untuk',
        'nama_ayah',
        'nama_ibu',
        'no_hp',
    ];
}
