<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create($reservasi_id)
    {
        $reservasis = Reservasi::findOrFail($reservasi_id);
        return view('payments.create', compact('reservasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'reservasi_id' => 'required|exists:reservasi,id',
            'metode_pembayaran' => 'required|string|max:255',
            'no_rekening_tujuan' => 'required|string|max:255',
            'no_rekening_anda' => 'required|string|max:255',
            'bukti_pembayaran' => 'required|image|max:2048',
        ]);

        $buktiPembayaranPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran');

        Payment::create([
            'reservasi_id' => $request->reservasi_id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'no_rekening_tujuan' => $request->no_rekening_tujuan,
            'no_rekening_anda' => $request->no_rekening_anda,
            'bukti_pembayaran' => $buktiPembayaranPath,
        ]);

        return redirect()->route('reservasi.create')->with('success', 'Pembayaran berhasil dilakukan.');
    }
}
