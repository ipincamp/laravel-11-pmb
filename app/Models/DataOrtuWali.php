<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * Get the mahasiswa that owns the DataOrtuWali
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(DataMahasiswa::class, 'mahasiswa_id', 'id');
    }
}
