<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_obat extends Model
{
    use HasFactory;

    public function Stok_obat(){
        return $this->belongsTo(Stok_Obat::class);
    }
}
