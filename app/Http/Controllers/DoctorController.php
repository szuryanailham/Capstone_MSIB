<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Specialist;

class DoctorController extends Controller
{
    // Tambahkan method-method sesuai kebutuhan CRUD

    public function index()
    {
        // Contoh method index untuk menampilkan daftar dokter
        $dokters = Dokter::all();
        return view('dokter.index', compact('dokters'));
    }

    public function create()
    {
        $specialists = Specialist::all();
        return view('dokter.create', compact('specialists'));
    }

    public function store(Request $request)
    {
        // Contoh method store untuk menyimpan data dokter baru
        $request->validate([
            'nama_doktor' => 'required|string|max:255',
            'specialist_id' => 'required|exists:specialists,id'
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil ditambahkan');
    }

    // Method lain seperti edit, update, delete, dll.
}
