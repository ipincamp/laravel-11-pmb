<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPernyataan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'lampiran_1',
        'lampiran_2',
        'lampiran_3',
        'lampiran_4'
    ];
}
