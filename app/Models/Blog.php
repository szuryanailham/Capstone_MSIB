<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

  
    use HasFactory;

    protected $fillable = [
        'judul',
        'id_doctor',
        'id_category',
        'slug', 'body',
        'cover',
        'kutipan', 'release_date'
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_doctor');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
