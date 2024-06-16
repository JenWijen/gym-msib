<?php

namespace App\Http\Controllers;

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
        // Validasi input
        $request->validate([
            'field_name' => 'required',
            'field_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'field_price' => 'required',
        ]);
    
        // Menghilangkan tanda titik dari harga
        $request['field_price'] = str_replace('.', '', $request['field_price']);
    
        if ($request->hasFile('field_picture')) {
            $image = $request->file('field_picture');
            $folderPath = 'images/';
            $imagePath = $image->store($folderPath, 'public');
            $fieldPicturePath = 'storage/' . $imagePath;
        } else {
            $fieldPicturePath = null;
        }
        $data = [
            'field_name' => $request->input('field_name'),
            'field_picture' => $fieldPicturePath,
            'field_price' => $request->input('field_price'),
        ];
        RentPackage::create($data);
    
        // Mengarahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('rent_package.index')->with('success', 'Rent Package created successfully.');
    }

    public function show(string $id)
    {

        $rpackages = RentPackage::findOrFail($id); // Mencari rent berdasarkan id

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
    public function update(Request $request, $id)
    {
        // Find the RentPackage by ID
        $rentPackage = RentPackage::findOrFail($id);
    
        // Validate input
        $request->validate([
            'field_name' => 'required|min:5',
            'field_price' => 'required|string|min:5',
            'field_picture' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);
    
        // Remove dots from the price
        $field_price = str_replace('.', '', $request->field_price);
    
        // Update fields
        $rentPackage->update([
            'field_name' => $request->field_name,
            'field_price' => $field_price,
        ]);
    
        // Handle the picture file upload
        if ($request->hasFile('field_picture')) {
            // Delete the old picture if it exists
            if ($rentPackage->field_picture) {
                $oldImagePath = public_path($rentPackage->field_picture);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        
            // Store the new picture
            $image = $request->file('field_picture');
            $imagePath = $image->store('public/images');
            $rentPackage->update(['field_picture' => 'storage/' . str_replace('public/', '', $imagePath)]);
        }
    
        // Redirect back to the index page with a success message
        return redirect()->route('rent_package.index')->with('success', 'Rent Package updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rpackages = RentPackage::findOrFail($id);
        return view('rpackages.show', compact('rpackages'));
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
