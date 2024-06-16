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
    public function create()
    {
        $users = User::where('userType', 'user')->get();
        $rpackages = RentPackage::all();
        $authUserType = auth()->user()->userType;
        return view('rent.create', compact('users', 'rpackages', 'authUserType'));
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

        return redirect()->route('rent_book.index')->with('success', 'Rent created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rental = Rent::find($id);
        if (!$rental) {
            return redirect()->route('rent_book.index')->with('error', 'Rental not found.');
        }
        return view('rent.show', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::where('userType', 'user')->get();
        $rpackages = RentPackage::all();
        $rental = Rent::findOrFail($id);

        return view('rent.edit', compact('users', 'rpackages', 'rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'rent_package_id' => 'required|exists:rent_packages,id',
            'rent_hours' => 'required|integer',
            'startdate' => 'required|date',
        ]);

        $rental = Rent::findOrFail($id);
        $rental->update($request->all());

        return redirect()->route('rent_book.index')->with('success', 'Rental list updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rental = Rent::findOrFail($id);
        $rental->delete();
        return redirect()->route('rent_book.index')
            ->with('success', 'Rental list deleted successfully.');
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
        $rental = Rent::findOrFail($id);
        return view('rent.index', compact('rental'));
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function staffIndex()
    {
        $rental = Rent::all();
        return view('staff.rent.index', compact('rental'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function staffCreate()
    {
        $users = User::where('userType', 'user')->get();
        $rpackages = RentPackage::all();
        $authUserType = auth()->user()->userType;
        return view('staff.rent.create', compact('users', 'rpackages', 'authUserType'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function staffStore(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'rent_package_id' => 'required|exists:rent_packages,id',
            'rent_hours' => 'required|integer',
            'startdate' => 'required|date',
        ]);
        Rent::create($request->all());

        return redirect()->route('staff_rent_book.index')->with('success', 'Rent created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function staffShow(string $id)
    {
        $rental = Rent::findOrFail($id); // Mencari rent berdasarkan id
        return view('staff.rent.show', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function staffEdit(string $id)
    // {
    //     $users = User::where('userType', 'user')->get();
    //     $rpackages = RentPackage::all();
    //     $rental = Rent::findOrFail($id);
    //     $authUserType = auth()->user()->userType;

    //     return view('staff.rent.edit', compact( 'users', 'rpackages', 'rental', 'authUserType'));
    // }
    public function staffEdit($id)
    {
    $users = User::where('userType', 'user')->get();
    $rpackages = RentPackage::all();
    $rental = Rent::findOrFail($id);
    $authUserType = auth()->user()->userType;

    return view('staff.rent.edit', compact('users', 'rpackages', 'rental', 'authUserType'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function staffUpdate(Request $request, Rent $rental)
    // {
    //     $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //         'rent_package_id' => 'required|exists:rent_packages,id',
    //         'rent_hours' => 'required|integer',
    //         'startdate' => 'required|date',
    //     ]);
    //     $rental->update($request->all());

    //     return redirect()->route('staff_rent_book.index')->with('success', 'Rental list updated successfully.');
    // }
    public function staffUpdate(Request $request, $id)
    {
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'rent_package_id' => 'required|exists:rent_packages,id',
        'rent_hours' => 'required|integer',
        'startdate' => 'required|date',
    ]);

    $rental = Rent::findOrFail($id);
    $rental->update($request->all());

    return redirect()->route('staff_rent_book.index')->with('success', 'Rental list updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function staffDestroy(string $id)
    {
        $rental = Rent::findOrFail($id);
        $rental->delete();
        return redirect()->route('staff_rent_book.index')
            ->with('success', 'Rental list deleted successfully.');
    }
}
