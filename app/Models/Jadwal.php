<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';

    protected $fillable = [
        'id_doctor',
        'hari',
        'jam_mulai',
        'jam_selesai'
    ];

    public function transaksi(){
        return $this->belongsTo(transaksi::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_doctor');
    }
}
