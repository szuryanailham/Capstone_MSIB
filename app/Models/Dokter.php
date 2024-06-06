<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';


    protected $fillable = ['nama_doktor', 'specialist_id'];

   
    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }

   
    
    public function blogs(){
        return $this->hasMany(Blog::class, 'id_doctor');
    }

    
}




