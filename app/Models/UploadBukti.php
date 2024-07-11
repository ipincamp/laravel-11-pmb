<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UploadBukti extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'metode',
        'tujuan',
        'jumlah',
        'tanggal_bayar',
        'bukti',
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
