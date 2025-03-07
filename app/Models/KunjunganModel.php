<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KunjunganModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kunjungan';
    protected $table = 'kunjungan';
    
    protected $fillable = [
        'nim',
        'nama',
        'tanggal',
        'jurusan',
        'no_hp',
        'keluhan'
    ];
}
