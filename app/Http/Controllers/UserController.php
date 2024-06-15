<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $ulasan = ulasan::all();
        return view('user.master', compact('ulasan'));
    }
}
