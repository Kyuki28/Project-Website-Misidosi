<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonasiMasuk extends Model
{
    use HasFactory;

    protected $table = 'donasi_masuk';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nama',
        'email',
        'golongan',
        'jumlah_donasi',
        'jenis_bank',
        'bukti_donasi',
        'catatan',
        'status_validasi',
    ];
}
