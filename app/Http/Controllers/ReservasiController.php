<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Specialist;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Dompdf\Options;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = Reservasi::all();
        $specialists = Specialist::all();
        $dokters = Dokter::with('specialist')->get();
        return view('reservasi.index', compact('reservasis', 'specialists', 'dokters'));
    }
    public function history()
    {
        $reservasis = Reservasi::where('user_id', auth()->id())->with('specialist', 'dokter')->get();
        return view('reservasi.history', compact('reservasis'));
    }

    public function create()
    {
        $specialists = Specialist::all();
        return view('reservasi.create', compact('specialists'));
    }

    public function store(Request $request)
    {
        // Validate reservation data
        $validatedData = $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:1',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'specialist_id' => 'required|integer|exists:specialists,id',
            'id_doctor' => 'required|integer|exists:dokter,id',
            'keluhan' => 'required|string|max:255',
            'id_jadwal' => 'required|exists:jadwal,id'
        ]);
    
        // Associate reservation with the authenticated user
        $validatedData['user_id'] = Auth::id();
    
        // Create and save the reservation
        $reservasi = Reservasi::create($validatedData);
    
        // Check if the reservation was successfully saved
        if ($reservasi) {
            // Redirect to the payment page
            return redirect()->route('payments.create', $reservasi->id);
        } else {
            // If failed, return back with an error message
            return redirect()->back()->with('error', 'Failed to create reservation.');
        }
    }

    public function getDoctorsBySpecialist(Request $request)
    {
        $specialistId = $request->specialist_id;
        $doctors = Dokter::where('specialist_id', $specialistId)->pluck('nama_doktor', 'id');
        return response()->json($doctors);
    }
    
    public function getJadwalByDoctor(Request $request)
    {
        $jadwals = Jadwal::where('id_doctor', $request->id_doctor)->get();
        return response()->json($jadwals);
    }
    public function show($id)
    {
        $reservasi = Reservasi::with(['dokter', 'specialist'])->findOrFail($id);
        return view('reservasi.show', compact('reservasi'));
    }
    public function detail(Reservasi $reservasi)
    {
        // Load related payment information
        $reservasi->load('payment');

        return view('reservasi.detail', compact('reservasi'));
    }

    public function downloadPDF(Reservasi $reservasi)
    {
        // Load related payment information
        $reservasi->load('payment');

        // Instantiate Dompdf with options
        $pdf = new Dompdf();
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $pdf->setOptions($options);

        // Load the HTML template
        $html = view('reservasi.pdf', compact('reservasi'))->render();

        // Load HTML content
        $pdf->loadHtml($html);

        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Render PDF (generate)
        $pdf->render();

        // Output the generated PDF content to the browser
        return $pdf->stream('reservation_details.pdf');
    }
}
