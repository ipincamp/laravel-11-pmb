<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $fillable = [
        'responden', // yang jawab
        'soal1', // jawaban soal 1
        'soal2', // jawaban soal 2
    ];
}
