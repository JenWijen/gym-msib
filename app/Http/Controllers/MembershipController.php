<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Trainer;
use App\Models\Member;
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
        $members = Member::all();
        $packages = Package::all();
        $trainers = Trainer::all();
        return view('memberships.create', compact('members', 'packages', 'trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
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
        $members = Member::all();
        $packages = Package::all();
        $trainers = Trainer::all();
        $memberships = Membership::find($id);
        // dd($memberships);
        return view('memberships.edit', compact( 'members', 'packages', 'trainers', 'memberships'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membership $membership)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
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
     $members = Member::all();
     $packages = Package::all();
     $trainers = Trainer::all();
     return view('staff.membershipstrainer.create', compact('members', 'packages', 'trainers'));
 }

 public function staffStore(Request $request)
 {
     $request->validate([
         'member_id' => 'required|exists:members,id',
         'package_id' => 'required|exists:packages,id',
         'trainer_id' => 'required|exists:trainers,id',
         'startdate' => 'required|date',
     ]);

     Membership::create($request->all());

     return redirect()->route('with_trainer.index')
         ->with('success', 'Membership + Trainer created successfully.');
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
    $members = Member::all();
    $packages = Package::all();
    $trainers = Trainer::all();
    
    // Menampilkan view untuk form edit dengan data yang sudah diambil
    return view('staff.membershipstrainer.edit', compact('membership', 'members', 'packages', 'trainers'));
}


public function StaffUpdate(Request $request, $id)
{
    // Validasi data dari request
    $request->validate([
        'member_id' => 'required|exists:members,id',
        'package_id' => 'required|exists:packages,id',
        'trainer_id' => 'required|exists:trainers,id',
        'startdate' => 'required|date',
    ]);

    // Mengambil data membership berdasarkan $id
    $membership = Membership::findOrFail($id);

    // Update data membership berdasarkan data yang diterima dari request
    $membership->member_id = $request->member_id;
    $membership->package_id = $request->package_id;
    $membership->trainer_id = $request->trainer_id;
    $membership->startdate = $request->startdate;
    
    // Menyimpan perubahan
    $membership->save();

    // Redirect ke halaman index atau halaman lainnya dengan pesan sukses
    return redirect()->route('with_trainer.index')
                     ->with('success', 'Membership updated successfully.');
}

}
