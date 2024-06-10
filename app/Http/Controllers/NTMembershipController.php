<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\NonPackage;
use App\Models\NonMembership;

class NTMembershipController extends Controller
{
    public function index()
    {
        $nmemberships = NonMembership::all();
        return view('nmemberships.index', compact('nmemberships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = Member::all();
        $npackages = nonPackage::all();
        return view('nmemberships.create', compact('members', 'npackages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'non_trainer_package_id' => 'required|exists:non_trainer_packages,id',
            'startdate' => 'required|date',
        ]);
        NonMembership::create($request->all());

        return redirect()->route('nmemberships.index')->with('success', 'Membership created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NonMembership $nmembership)
    {
        return view('nmemberships.show', compact('nmembership'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $members = Member::all();
        $npackages = NonPackage::all();
        $nmemberships = NonMembership::find($id);
        // dd($memberships);
        return view('nmemberships.edit', compact( 'members', 'npackages', 'nmemberships'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NonMembership $nmembership)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'non_trainer_package_id' => 'required|exists:non_trainer_packages,id',
            'startdate' => 'required|date',
        ]);

        $nmembership->update($request->all());
        return redirect()->route('nmemberships.index')
            ->with('success', 'Membership updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NonMembership $nmembership)
    {
        $nmembership->delete();
        return redirect()->route('nmemberships.index')
            ->with('success', 'Membership deleted successfully.');
    }
}