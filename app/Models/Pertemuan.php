<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;
    protected $table = 'pertemuanpasien';
    protected $fillable = [
        'user_id', 'nama_pasien', 'tahun_lahir_pasien','tanggallahirpasien','keluhan_anda','tanggal_pertemuan',
    ];
}
