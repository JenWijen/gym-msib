<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    // Admin methods
    public function adminIndex()
    {
        $members = Member::all();
        return view('admin.members.index', compact('members'));
    }

    public function adminCreate()
    {
        return view('admin.members.create');
    }

    public function adminStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);

        Member::create($request->all());

        return redirect()->route('member_list.index')->with('success', 'Member added successfully.');
    }

    public function adminShow($id)
    {
        $member = Member::find($id);
        return view('admin.members.show', compact('member'));
    }

    public function adminEdit($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.edit', compact('member'));
    }

    public function adminUpdate(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);

        $member->update($request->all());

        return redirect()->route('member_list.index')->with('success', 'Member updated successfully.');
    }

    public function adminDestroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('member_list.index')->with('success', 'Member deleted successfully.');
    }


    // Staff methods
    public function staffIndex()
    {
        $members = Member::all();
        return view('staff.stmembers.index', compact('members'));
    }

    public function staffCreate()
    {
        return view('staff.stmembers.create');
    }

    public function staffStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);

        Member::create($request->all());

        return redirect()->route('memb_only.index')->with('success', 'Member added successfully.');
    }

    //      public function staffShow($id)
    // {
    //     $member = Member::findOrFail($id);
    //     return view('staff.stmembers.show', compact('member'));
    // }
    public function staffShow($id)
    {
        $member = Member::findOrFail($id);
        return view('staff.stmembers.show', compact('member'));
    }



    public function staffEdit(Member $member)
    {
        return view('staff.stmembers.edit', compact('member'));
    }

    public function staffUpdate(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
        ]);

        $member->update($request->all());

        return redirect()->route('memb_only.index')->with('success', 'Member updated successfully.');
    }
}
