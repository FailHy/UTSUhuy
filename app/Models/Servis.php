<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // <-- ini penting
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servis extends Model
{
    use HasFactory, SoftDeletes; // <-- ini juga harus ada

    protected $fillable = [
        'nama_pemilik',
        'nomor_polisi',
        'jenis_kendaraan',
        'keluhan',
        'jenis_servis',
        'tanggal_servis',
        'biaya',
        'status',
    ];
}
