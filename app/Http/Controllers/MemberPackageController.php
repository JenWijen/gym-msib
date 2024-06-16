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
    // Validasi input
    $request->validate([
        'package_name' => 'required|string|max:255',
        'price' => 'required|string|min:1',
        'duration' => 'required|integer|min:1',
    ]);

    // Menghapus titik dari harga
    $price = str_replace('.', '', $request->price);

    // Update field pada model package
    $package->update([
        'package_name' => $request->package_name,
        'price' => $price,
        'duration' => $request->duration,
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('packages.index')
                     ->with('success', 'Package updated successfully.');
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
