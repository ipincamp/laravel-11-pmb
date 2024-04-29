<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnggahBerkas extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester_1',
        'semester_2',
        'semester_3',
        'semester_4'
    ];
}
