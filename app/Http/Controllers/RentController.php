<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\RentPackage;
use App\Models\User;
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rental = Rent::all();
        return view('rent.index', compact('rental'));
    }

    /**
     * Show the form for creating a new resource.
     */

     // public function create()
    // {
    //     $users = User::all();
    //     $rpackages = RentPackage::all();
    //     return view('rent.create', compact('users', 'rpackages'));
    // }
    public function create()
    {
        $users = User::all();
        $rentPackages = RentPackage::all();
        return view('rent.create', compact('users', 'rentPackages'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'rent_package_id' => 'required|exists:rent_packages,id',
            'rent_hours' => 'required|integer',
            'startdate' => 'required|date',
        ]);
        Rent::create($request->all());

        return redirect()->route('rent.index')->with('success', 'Rent created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rental = Rent::all();
        return view('rent.index', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::all();
        $rpackages = RentPackage::all();
        $rental = Rent::all();

        return view('rent.edit', compact( 'users', 'rpackages', 'rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rent $rental)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'rent_package_id' => 'required|exists:rent_packages,id',
            'rent_hours' => 'required|integer',
            'startdate' => 'required|date',
        ]);
        $rental->update($request->all());

        return redirect()->route('rent.index')->with('success', 'Rent updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rental = Rent::findOrFail($id);
        $rental->delete();
        return redirect()->route('non_membership.index')
            ->with('success', 'Membership deleted successfully.');
    }

    //User method
    public function userIndex()
    {
        $rental = Rent::all();
        return view('rent.index', compact('rental'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userCreate()
    {
        return view('rent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function userStore(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'rent_package_id' => 'required|exists:rent_packages,id',
            'rent_hours' => 'required|integer',
            'startdate' => 'required|date',
        ]);
        Rent::create($request->all());

        return redirect()->route('rent.index')->with('success', 'Rent created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function userShow(string $id)
    {
        $rental = Rent::all();
        return view('rent.index', compact('rental'));
    }
}
