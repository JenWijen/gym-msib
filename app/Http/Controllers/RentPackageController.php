<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\RentPackage;
use Illuminate\Http\Request;

class RentPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rpackages = RentPackage::all();
        return view('rpackages.index', compact('rpackages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rpackages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'field_name' => 'required',
            'field_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'field_price' => 'required',
        ]);
    
        $request['field_price'] = str_replace('.', '', $request['field_price']);
    
        if ($request->hasFile('field_picture')) {
            $image = $request->file('field_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('field_picture')->storeAs('public/images', $imageName);
            $request['field_picture'] = 'storage/images/' . $imageName;
        }
    
        RentPackage::create($request->all());
    
        return redirect()->route('rent_package.index')->with('success', 'Rent Package created successfully.');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'field_name' => 'required',
    //         'field_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    //         'field_price' => 'required',
    //     ]);

    //     $request['field_price'] = str_replace('.', '', $request['field_price']);

    //     if ($request->hasFile('field_picture')) {
    //         $image = $request->file('field_picture');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->storeAs('public/images', $imageName);
    //         $request['field_picture'] = 'storage/images/' . $imageName;
    //     }

    //     RentPackage::create($request->all());

    //     return redirect()->route('rent_package.index')->with('success', 'Rent Package created successfully.');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rpackages = RentPackage::find($id);

        return view('rpackages.show', compact('rpackages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rpackages = RentPackage::find($id);
        return view('rpackages.edit', compact('rpackages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RentPackage $rpackages)
    {
        $request->validate([
            'field_name' => 'required',
            'field_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'field_price' => 'required',
        ]);

        $request['field_price'] = str_replace('.', '', $request['field_price']);

        if ($request->hasFile('field_picture')) {
            // Delete the old picture if it exists
            if ($rpackages->field_picture) {
                $oldImagePath = public_path($rpackages->field_picture);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $image = $request->file('field_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $request['field_picture'] = 'storage/images/' . $imageName;
        } else {
            // If no new picture is uploaded, retain the old picture path
            $request['field_picture'] = $rpackages->field_picture;
        }

        $rpackages->update($request->all());
        return redirect()->route('rent_package.index')->with('success', 'Rent Package updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rpackages = RentPackage::findOrFail($id);
        $rpackages->delete();
        return redirect()->route('rent_package.index')
            ->with('success', 'Rent Package deleted successfully.');
        
    }
}
