<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /**
     * Get the mahasiswa that owns the Kelengkapan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(DataMahasiswa::class, 'mahasiswa_id', 'id');
    }
}
