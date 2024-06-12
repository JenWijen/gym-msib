<?php

namespace App\Http\Controllers;

use App\Models\NonPackage;
use Illuminate\Http\Request;

class NTPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $npackages = NonPackage::all();
        return view('npackages.index', compact('npackages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('npackages.create');
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
        NonPackage::create($request->all());

        return redirect()->route('non_package.index')->with('success', 'Membership created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $npackage = Nonpackage::find($id);

        return view('npackages.show', compact('npackage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $npackage = NonPackage::find($id);
        return view('npackages.edit', compact('npackage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NonPackage $npackage)
    {
        $request->validate([
            'package_name' => 'required',
            'price' => 'required',
            'duration' => 'required|integer',
        ]);
        
        $request['price'] = str_replace('.', '', $request['price']);
        $npackage->update($request->all());;
        return redirect()->route('non_package.index')
        

            ->with('success', 'Member Package updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $npackage = NonPackage::findOrFail($id);
        $npackage->delete();
        return redirect()->route('non_package.index')
            ->with('success', 'Member Package deleted successfully.');
        
    }
}
