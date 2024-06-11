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
            'reservasi_id' => 'required|integer|exists:reservasi,id',
            'metode_pembayaran' => 'required|string|max:255',
            'no_rekening_tujuan' => 'required|string|max:255',
            'no_rekening_anda' => 'required|string|max:255',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $payment = new Payment;
        $payment->reservasi_id = $request->reservasi_id;
        $payment->metode_pembayaran = $request->metode_pembayaran;
        $payment->no_rekening_tujuan = $request->no_rekening_tujuan;
        $payment->no_rekening_anda = $request->no_rekening_anda;

        if ($request->hasFile('bukti_pembayaran')) {
            $image = $request->file('bukti_pembayaran');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/bukti_pembayaran');
            $image->move($destinationPath, $name);
            $payment->bukti_pembayaran = $name;
        }

        $payment->save();

        // Redirect ke halaman hasil reservasi
        return redirect()->route('reservasi.show', $request->reservasi_id);
    }
}
