<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataOrtuWali extends Model
{
    protected $fillable = [
        'untuk',
        'nama_ayah',
        'nama_ibu',
        'no_hp',
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
