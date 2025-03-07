<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pasien';
    protected $table = 'pasien';
    
    protected $fillable = [
        'username',
        'nama_pasien',
        'no_hp',
        'password',
        'alamat',
        'nim',
    ];
}
