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
 
         return redirect()->route('admin.members.index')->with('success', 'Member added successfully.');
     }
 
     public function adminShow(Member $member)
     {
         return view('admin.members.show', compact('member'));
     }
 
     public function adminEdit(Member $member)
     {
         return view('admin.members.edit', compact('member'));
     }
 
     public function adminUpdate(Request $request, Member $member)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'contact' => 'required|string|max:255',
         ]);
 
         $member->update($request->all());
 
         return redirect()->route('admin.members.index')->with('success', 'Member updated successfully.');
     }
 
     public function adminDestroy(Member $member)
     {
         $member->delete();
         return redirect()->route('admin.members.index')->with('success', 'Member deleted successfully.');
     }
 
     // Staff methods
     public function staffIndex()
     {
         $members = Member::with('membership')->get();
         return view('staff.members.index', compact('members'));
     }
 
     public function staffCreate()
     {
         return view('staff.members.create');
     }
 
     public function staffStore(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'contact' => 'required|string|max:255',
         ]);
 
         Member::create($request->all());
 
         return redirect()->route('staff.members.index')->with('success', 'Member added successfully.');
     }
 
     public function staffShow(Member $member)
     {
         return view('staff.members.show', compact('member'));
     }
 
     public function staffEdit(Member $member)
     {
         return view('staff.members.edit', compact('member'));
     }
 
     public function staffUpdate(Request $request, Member $member)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'contact' => 'required|string|max:255',
         ]);
 
         $member->update($request->all());
 
         return redirect()->route('staff.members.index')->with('success', 'Member updated successfully.');
     }
 
     public function staffDestroy(Member $member)
     {
         $member->delete();
         return redirect()->route('staff.members.index')->with('success', 'Member deleted successfully.');
     }
}