<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Membership;
use App\Models\NonMembership;
use App\Models\NonPackage;
use App\Models\Package;
use App\Models\Rent;
use App\Models\RentPackage;
use App\Models\Trainer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totaltrainers = Trainer::count();

        // Total for Package + NonPackage //
        $totalpackagecount = Package::count();
        $totalnpackagescount = NonPackage::count();
        $grandTotalpackage = $totalpackagecount + $totalnpackagescount;

        //Total for NonMembership + Membership //
        $totalnmemberships = NonMembership::count();
        $totalmembersihp = Membership::count();
        $grandTotalmembership = $totalnmemberships + $totalmembersihp;

        $totalrentpackage = RentPackage::count();
        $totalrent = Rent::count();
        
        return view('admin.index', compact('totaltrainers', 'grandTotalpackage', 'grandTotalmembership', 'totalrentpackage', 'totalrent'));
    }
}
