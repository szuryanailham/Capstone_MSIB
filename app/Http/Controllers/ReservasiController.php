<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Specialist;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = Reservasi::all();
        $specialists = Specialist::all();
        $dokters = Dokter::with('specialist')->get();
        return view('reservasi.index', compact('reservasis', 'specialists', 'dokters'));
    }

    public function create()
    {
        $specialists = Specialist::all();
        return view('reservasi.create', compact('specialists'));
    }

    public function store(Request $request)
    {
        // Validasi data reservasi
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:1',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'specialist_id' => 'required|integer|exists:specialists,id',
            'id_doctor' => 'required|integer|exists:dokter,id',
            'keluhan' => 'required|string|max:255',
            'tanggal_periksa' => 'required|date',
        ]);

        // Simpan data reservasi
        $reservasi = Reservasi::create($request->all());

        // Debugging
        if ($reservasi) {
            // Redirect ke halaman pembayaran
            return redirect()->route('payments.create', $reservasi->id);
        } else {
            // Jika gagal, kembalikan ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Gagal membuat reservasi.');
        }
    }

    public function getDoctorsBySpecialist(Request $request)
    {
        $specialistId = $request->specialist_id;
        $doctors = Dokter::where('specialist_id', $specialistId)->pluck('nama_doktor', 'id');
        return response()->json($doctors);
    }
    public function show($id)
    {
        $reservasi = Reservasi::with(['dokter', 'specialist'])->findOrFail($id);
        return view('reservasi.show', compact('reservasi'));
    }

    
    
}
