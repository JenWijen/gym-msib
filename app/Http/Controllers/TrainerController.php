<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'trainer_name' => 'required',
            'gender' => 'required|in:L,P',
            'contact' => 'required',
            'address' => 'required',
        ]);

        Trainer::create($request->all());

        return redirect()->route('trainers.index')->with('success', 'Trainer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trainer = Trainer::find($id);

        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([
            'trainer_name' => 'required',
            'gender' => 'required|in:L,P',
            'contact' => 'required',
            'address' => 'required',
        ]);

        $trainer->update($request->all());

        return redirect()->route('trainers.index')->with('success', 'Trainer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();

        return redirect()->route('trainers.index')->with('success', 'Trainer deleted successfully.');
    }
}
