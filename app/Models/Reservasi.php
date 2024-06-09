<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = [
        'nama_pasien',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'specialist_id',
        'id_doctor',
        'keluhan',
        'tanggal_periksa',
    ];
}
