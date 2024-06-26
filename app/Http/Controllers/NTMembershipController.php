<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NonPackage;
use App\Models\NonMembership;
use Illuminate\Support\Facades\Auth;

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
        $users = User::where('userType', 'user')->get();
        $npackages = NonPackage::all();
        return view('nmemberships.create', compact('users', 'npackages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'non_trainer_package_id' => 'required|exists:non_trainer_packages,id',
            'startdate' => 'required|date',
        ]);
        NonMembership::create($request->all());

        return redirect()->route('non_membership.index')->with('success', 'Membership created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $nmembership = NonMembership::find($id);
        
        return view('nmemberships.show', compact('nmembership'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::where('userType', 'user')->get();
        $npackages = NonPackage::all();
        $nmembership = NonMembership::find($id);
        return view('nmemberships.edit', compact('users', 'npackages', 'nmembership'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'non_trainer_package_id' => 'required|exists:non_trainer_packages,id',
            'startdate' => 'required|date',
        ]);
    
        $nmembership = NonMembership::find($id);
        $nmembership->update($request->all());
    
        return redirect()->route('non_membership.index')
            ->with('success', 'Membership updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nmembership = NonMembership::findOrFail($id);
        $nmembership->delete();
        return redirect()->route('non_membership.index')
            ->with('success', 'Membership deleted successfully.');
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    public function staffIndex()
    {
        $nmemberships = NonMembership::all();
        return view('staff.nmemberships.index', compact('nmemberships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function staffCreate()
    {
        $users = User::where('userType', 'user')->get();
        $npackages = NonPackage::all();
        return view('staff.nmemberships.create', compact('users', 'npackages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function staffStore(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'non_trainer_package_id' => 'required|exists:non_trainer_packages,id',
            'startdate' => 'required|date',
        ]);
        NonMembership::create($request->all());

        return redirect()->route('staff_non_membership.index')->with('success', 'Membership created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function staffShow($id)
    {
        $nmembership = NonMembership::find($id);
        
        return view('staff.nmemberships.show', compact('nmembership'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function staffEdit($id)
    {
        $users = User::where('userType', 'user')->get();
        $npackages = NonPackage::all();
        $nmemberships = NonMembership::find($id);
        return view('staff.nmemberships.edit', compact( 'users', 'npackages', 'nmemberships'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function staffUpdate(Request $request, NonMembership $staff_non_membership)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'non_trainer_package_id' => 'required|exists:non_trainer_packages,id',
        'startdate' => 'required|date',
    ]);

    $staff_non_membership->update($request->all());

    return redirect()->route('staff_non_membership.index')
                     ->with('success', 'Membership berhasil diperbarui.');
}

////////////////////////////////////////////////////////////////////////////////////
    public function userindex()
    {
        $nmemberships = NonMembership::all();
        return view('user.master', compact('nmemberships'));
    }
    public function usercreate()
    {
        $users = User::where('userType', 'user')->get();
        $npackages = NonPackage::all();
        $authUserType = auth()->user()->userType;
        return view('user.joinminus.create', compact('users', 'npackages','authUserType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function userstore(Request $request)
    {
        $userAuth = Auth::user()->id;
        $request->validate([
            // 'user_id' => 'required|exists:users,id',
            'non_trainer_package_id' => 'required|exists:non_trainer_packages,id',
            'startdate' => 'required|date',
        ]);
        NonMembership::create([
            'user_id' => $userAuth,
            'non_trainer_package_id' => $request->non_trainer_package_id,
            'startdate' => $request->startdate,
        ]);

        return redirect()->route('user.master')->with('success', 'Membership created successfully.');
    }

}
