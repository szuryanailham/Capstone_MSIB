<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Specialist;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokters = Dokter::with('specialist')->get();
        return view('dokter.index', compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialists = Specialist::all();
        return view('dokter.create', compact('specialists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_doktor' => 'required|string|max:255',
            'specialist_id' => 'required|exists:specialists,id',
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokter.index')->with('success', 'Dokter created successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        $specialists = Specialist::all();
        return view('dokter.edit', compact('dokter', 'specialists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        $request->validate([
            'nama_doktor' => 'required|string|max:255',
            'specialist_id' => 'required|exists:specialists,id',
        ]);

        $dokter->update($request->all());

        return redirect()->route('dokter.index')->with('success', 'Dokter updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        $dokter->delete();

        return redirect()->route('dokter.index')->with('success', 'Dokter deleted successfully.');
    }
}
