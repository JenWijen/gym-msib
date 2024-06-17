<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Trainer;
use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memberships = Membership::all();
        return view('memberships.index', compact('memberships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('userType', 'user')->get();
        $packages = Package::all();
        $trainers = Trainer::all();
        return view('memberships.create', compact('users', 'packages', 'trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:member_packages,id',
            'trainer_id' => 'required|exists:trainers,id',
            'startdate' => 'required|date',
        ]);
        Membership::create($request->all());

        return redirect()->route('memberships.index')->with('success', 'Membership created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $membership = Membership::find($id);

        return view('memberships.show', compact('membership'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::where('userType', 'user')->get();
        $packages = Package::all();
        $trainers = Trainer::all();
        $memberships = Membership::find($id);
        // dd($memberships);
        return view('memberships.edit', compact( 'users', 'packages', 'trainers', 'memberships'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membership $membership)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'package_id' => 'required|exists:member_packages,id',
            'trainer_id' => 'required|exists:trainers,id',
            'startdate' => 'required|date',
        ]);

        $membership->update($request->all());
        return redirect()->route('memberships.index')
            ->with('success', 'Membership updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membership $membership)
    {
        $membership->delete();
        return redirect()->route('memberships.index')
            ->with('success', 'Membership deleted successfully.');
    }

 ////////////////////////////////////////////////////////////////////////////////////////////   
 public function staffIndex()
 {
     $memberships = Membership::all();
     return view('staff.membershipstrainer.index', compact('memberships'));
 }

 public function staffCreate()
 {
     $users = User::where('userType', 'user')->get();
     $packages = Package::all();
     $trainers = Trainer::all();
     return view('staff.membershipstrainer.create', compact('users', 'packages', 'trainers'));
 }

 public function staffStore(Request $request)
 {
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'package_id' => 'required|exists:member_packages,id',
        'trainer_id' => 'required|exists:trainers,id',
        'startdate' => 'required|date',
    ]);
    Membership::create($request->all());

    return redirect()->route('with_trainer.index')->with('success', 'Membership created successfully.');
 }

 public function staffShow($id)
 {
     $membership = Membership::findOrFail($id);
     return view('staff.membershipstrainer.show', compact('membership'));
 }

public function staffEdit($id)
{
    // Mengambil data membership berdasarkan $id
    $membership = Membership::findOrFail($id);
    
    // Mengambil semua data yang diperlukan untuk form (members, packages, trainers)
    $users = User::where('userType', 'user')->get();
    $packages = Package::all();
    $trainers = Trainer::all();
    
    // Menampilkan view untuk form edit dengan data yang sudah diambil
    return view('staff.membershipstrainer.edit', compact('membership', 'users', 'packages', 'trainers'));
}


public function staffUpdate(Request $request, $id)
{
    // Validasi data dari request
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'package_id' => 'required|exists:member_packages,id',
        'trainer_id' => 'required|exists:trainers,id',
        'startdate' => 'required|date',
    ]);

    $membership = Membership::findOrFail($id);
    $membership->update($request->all());
    
    return redirect()->route('with_trainer.index')
        ->with('success', 'Membership updated successfully.');
}

}
