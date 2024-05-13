<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public function transaksi(){
        return $this->belongsTo(transaksi::class);
    }

    public function dokter(){
        return $this->belongsTo(Dokter::class);
    }
}
