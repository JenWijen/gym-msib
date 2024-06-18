<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ulasan = ulasan::all();

        return view('user.master', compact('ulasan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'star_rating' => 'required|integer|min:1|max:5', // Menambah validasi untuk star_rating
            'ulasan' => 'required|string|max:255',
            'status' => 'required|in:active,deactive', // Menambah validasi untuk status
        ]);
    
        // Create a new ulasan
        $ulasan = new Ulasan(); // Menggunakan model Ulasan
    
        $ulasan->name = $request->name;
        $ulasan->star_rating = $request->star_rating;
        $ulasan->ulasan = $request->ulasan;
        $ulasan->status = $request->status;
    
        $ulasan->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Ulasan submitted successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ulasan $ulasan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ulasan' => 'required|string|max:255',
        ]);

        // Update the ulasan
        $ulasan->update([
            'name' => $request->name,
            'ulasan' => $request->ulasan,
        ]);

        // Redirect back with a success message
        return redirect()->route('ulasan.index')->with('success', 'Ulasan updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
