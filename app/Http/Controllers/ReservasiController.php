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
        // Validate incoming request
        $validatedData = $request->validate([
            'nama_pasien' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string',
            'no_hp' => 'required|numeric',
            'specialist_id' => 'required|exists:specialists,id',
            'id_doctor' => 'required|exists:dokter,id',
            'keluhan' => 'required|string',
            'tanggal_periksa' => 'required|date',
        ]);
    
        try {
            // Create new reservation
            $reservation = Reservasi::create($validatedData);
    
            return redirect()->route('reservasi.index')
                ->with('success', 'Reservation created successfully');
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Failed to create reservation. Please try again.']);
        }
    }
    

    public function getDoctorsBySpecialist(Request $request)
    {
        $specialistId = $request->specialist_id;
        $doctors = Dokter::where('specialist_id', $specialistId)->pluck('nama_doktor', 'id');
        return response()->json($doctors);
    }
    
}
