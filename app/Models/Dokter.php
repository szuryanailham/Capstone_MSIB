<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }

    public function blog(){
        return $this->hasMany(blog::class);
    }

    public function specialist(){
        return $this->belongsTo(Specialist::class);
    }
}
