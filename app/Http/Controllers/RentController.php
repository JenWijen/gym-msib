<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\RentPackage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function userindex()
    {
        $rental = Rent::all();
        return view('user.master', compact('rental'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function usercreate()
    {
        $users = User::where('userType', 'user')->get();
        $rpackages = RentPackage::all();
        $authUserType = auth()->user()->userType;
        return view('user.rental.create', compact('users', 'rpackages', 'authUserType'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function userstore(Request $request)
    {
        $userAuth = Auth::user()->id;

        $request->validate([
            // 'user_id' => 'required|exists:users,id',
            'rent_package_id' => 'required|exists:rent_packages,id',
            'rent_hours' => 'required|integer',
            'startdate' => 'required',
        ]);
        // Create the rent
        Rent::create([
        'user_id' => $userAuth,
        'rent_package_id' => $request->rent_package_id,
        'rent_hours' => $request->rent_hours,
        'startdate' => $request->startdate,
    ]);

        return redirect()->route('user.master')->with('success', 'Rent created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function usershow(string $id)
    {
        $rental = Rent::find($id);
        if (!$rental) {
            return redirect()->route('rental_user.index')->with('error', 'Rental not found.');
        }
        return view('user.rental.show', compact('rental'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function useredit($id)
    {
        $users = User::where('userType', 'user')->get();
        $rpackages = RentPackage::all();
        $rental = Rent::findOrFail($id);

        return view('rent.edit', compact('users', 'rpackages', 'rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function userupdate(Request $request, $id)
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
    public function userdestroy(string $id)
    {
        $rental = Rent::findOrFail($id);
        $rental->delete();
        return redirect()->route('rent_book.index')
            ->with('success', 'Rental list deleted successfully.');
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


    public function staffEdit($id)
    {
    $users = User::where('userType', 'user')->get();
    $rpackages = RentPackage::all();
    $rental = Rent::findOrFail($id);
    $authUserType = auth()->user()->userType;

    return view('staff.rent.edit', compact('users', 'rpackages', 'rental', 'authUserType'));
    }

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
