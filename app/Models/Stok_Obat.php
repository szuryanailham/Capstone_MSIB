<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok_Obat extends Model
{
    use HasFactory;

    public function detail_transaksi_apotik(){
        return $this->belongsTo(Detail_Transaksi_apotik::class);
    }

    public function category_obat(){
        return $this->hasMany(Category_obat::class);
    }
    
}
