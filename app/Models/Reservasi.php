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
        'id_jadwal',
    ];

    public function specialist()
    {
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_doctor');
    }
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
