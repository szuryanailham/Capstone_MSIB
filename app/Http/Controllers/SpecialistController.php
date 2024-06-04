<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialist;

class SpecialistController extends Controller
{
    public function index()
    {
        $specialists = Specialist::all();
        return view('specialist.index', compact('specialists'));
    }

    /**
     * Show the form for creating a new specialist.
     */
    public function create()
    {
        return view('specialist.create');
    }

    /**
     * Store a newly created specialist in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'specialist_name' => 'required|string|max:255',
        ]);

        Specialist::create($request->all());

        return redirect()->route('specialist.index')
            ->with('success', 'Specialist created successfully.');
    }

    /**
     * Display the specified specialist.
     */
    public function show(Specialist $specialist)
    {
        return view('specialist.show', compact('specialist'));
    }

    /**
     * Show the form for editing the specified specialist.
     */
    public function edit(Specialist $specialist)
    {
        return view('specialist.edit', compact('specialist'));
    }

    /**
     * Update the specified specialist in storage.
     */
    public function update(Request $request, Specialist $specialist)
    {
        $request->validate([
            'specialist_name' => 'required|string|max:255',
        ]);

        $specialist->update($request->all());

        return redirect()->route('specialist.index')
            ->with('success', 'Specialist updated successfully.');
    }

    /**
     * Remove the specified specialist from storage.
     */
    public function destroy(Specialist $specialist)
    {
        $specialist->delete();

        return redirect()->route('specialist.index')
            ->with('success', 'Specialist deleted successfully.');
    }
}