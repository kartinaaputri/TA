<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokterModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_dokter';
    protected $table = 'dokter';
    
    protected $fillable = [
        'username',
        'nama_dokter',
        'no_hp',
        'password',
    ];
}
