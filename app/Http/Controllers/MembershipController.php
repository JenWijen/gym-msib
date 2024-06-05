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
    public function show(Membership $membership)
    {
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
        return view('memberships.edit', compact('membership', 'members', 'packages', 'trainers'));
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
}
