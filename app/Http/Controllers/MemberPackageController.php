<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class MemberPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'package_name' => 'required',
            'price' => 'required',
            'duration' => 'required|integer',
        ]);
        $request['price'] = str_replace('.', '', $request['price']);
        Package::create($request->all());

        return redirect()->route('packages.index')->with('success', 'Membership created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $package = Package::find($id);
        return view('packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $package = Package::find($id);
        return view('packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'package_name' => 'required',
            'price' => 'required',
            'duration' => 'required|integer',
        ]);
        
        $request['price'] = str_replace('.', '', $request['price']);
        $package->update($request->all());;
        return redirect()->route('packages.index')
        

            ->with('success', 'Member Package updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')
            ->with('success', 'Member Package deleted successfully.');
    }
}
