<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataSekolah extends Model
{
    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'derajat',
        'jurusan',
        'mahasiswa_id',
    ];

    /**
     * Get the mahasiswa that owns the DataSekolah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(DataMahasiswa::class, 'mahasiswa_id', 'id');
    }
}
