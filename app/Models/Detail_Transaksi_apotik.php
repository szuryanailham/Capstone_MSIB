<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi_apotik extends Model
{
    use HasFactory;

    public function transaksi_apotik(){
        return $this->belongsTo(Transaksi_apotik::class);
    }

    public function stok_obat(){
        return $this->belongsTo(Stok_Obat::class);
    }
}
