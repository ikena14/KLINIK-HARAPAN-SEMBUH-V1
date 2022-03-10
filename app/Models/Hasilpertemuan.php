<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasilpertemuan extends Model
{
    use HasFactory;
    protected $table = 'hasilpertemuan';
    protected $fillable = [
        'namapasien', 'keteranganpenyakit', 'keteranganobatanjuran',
    ];
}
