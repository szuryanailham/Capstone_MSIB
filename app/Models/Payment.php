<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservasi_id',
        'metode_pembayaran',
        'no_rekening_tujuan',
        'no_rekening_anda',
        'bukti_pembayaran',
    ];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }
}
