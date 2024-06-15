<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $ulasan = ulasan::all();
        return view('user.master', compact('ulasan'));
    }

    public function roleIndex()
    {
        $users = User::all();
        return view('role.index', compact('users'));
    }

    public function updateType(Request $request, $id)
    {
        $request->validate([
            'userType' => 'required|in:admin,staff,user',
        ]);

        $user = User::findOrFail($id);
        $user->update(['userType' => $request->input('userType')]);

        return redirect()->route('roles.index')->with('success', 'User type updated successfully!');
    }
}
