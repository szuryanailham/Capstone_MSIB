<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_apotik extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function detail_transaksi_apotik(){
        return $this->hasMany(Detail_Transaksi_apotik::class);
    }
}
