<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\StaffController;
use App\Models\Membership;
use App\Models\Trainer;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');// diganti dlu ntar diganti lg ke landingpage.master
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('staff/dashboard', [StaffController::class, 'index'])->name('staff.master');

//     //members
//     Route::get('staff/members', [MembersController::class, 'index'])->name('members.index');
//     Route::get('staff/members/create', [MembersController::class, 'create'])->name('members.create');
//     Route::post('staff/members', [MembersController::class, 'store'])->name('members.store');
//     Route::get('staff/members/{member}', [MembersController::class, 'show'])->name('members.show');
//     Route::get('staff/members/{member}/edit', [MembersController::class, 'edit'])->name('members.edit');
//     Route::put('staff/members/{member}', [MembersController::class, 'update'])->name('members.update');
//     Route::delete('staff/members/{member}', [MembersController::class, 'destroy'])->name('members.destroy');
// });

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('admin/dashboard', [AdminController::class, 'index']);
    
//     //trainers
//     Route::get('admin/trainers', [TrainerController::class, 'index'])->name('trainers.index');
//     Route::get('admin/trainers/create', [TrainerController::class, 'create'])->name('trainers.create');
//     Route::post('admin/trainers', [TrainerController::class, 'store'])->name('trainers.store');
//     Route::get('admin/trainers/{trainer}', [TrainerController::class, 'show'])->name('trainers.show');
//     Route::get('admin/trainers/{trainer}/edit', [TrainerController::class, 'edit'])->name('trainers.edit');
//     Route::put('admin/trainers/{trainer}', [TrainerController::class, 'update'])->name('trainers.update');
//     Route::delete('admin/trainers/{trainer}', [TrainerController::class, 'destroy'])->name('trainers.destroy');

//     //membership
//     Route::get('admin/memberships', [MembershipController::class, 'index'])->name('memberships.index');
//     Route::get('admin/memberships/create', [MembershipController::class, 'create'])->name('memberships.create');
//     Route::post('admin/memberships', [MembershipController::class, 'store'])->name('memberships.store');
//     Route::get('admin/memberships/{membership}', [MembershipController::class, 'show'])->name('memberships.show');
//     Route::get('admin/memberships/{membership}/edit', [MembershipController::class, 'edit'])->name('memberships.edit');
//     Route::put('admin/memberships/{membership}', [MembershipController::class, 'update'])->name('memberships.update');
//     Route::delete('admin/memberships/{membership}', [MembershipController::class, 'destroy'])->name('memberships.destroy');
    
//     //members
//     Route::get('admin/members', [MembersController::class, 'index'])->name('members.index');
//     Route::get('admin/members/create', [MembersController::class, 'create'])->name('members.create');
//     Route::post('admin/members', [MembersController::class, 'store'])->name('members.store');
//     Route::get('admin/members/{member}', [MembersController::class, 'show'])->name('members.show');
//     Route::get('admin/members/{member}/edit', [MembersController::class, 'edit'])->name('members.edit');
//     Route::put('admin/members/{member}', [MembersController::class, 'update'])->name('members.update');
//     Route::delete('admin/members/{member}', [MembersController::class, 'destroy'])->name('members.destroy');


// });

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('staff/dashboard', [StaffController::class, 'index'])->name('staff.master');

    // Members routes for staff
    Route::prefix('staff/members')->name('staff.members.')->group(function () {
        Route::get('/', [MembersController::class, 'staffIndex'])->name('index');
        Route::get('create', [MembersController::class, 'staffCreate'])->name('create');
        Route::post('/', [MembersController::class, 'staffStore'])->name('store');
        Route::get('{member}', [MembersController::class, 'staffShow'])->name('show');
        Route::get('{member}/edit', [MembersController::class, 'staffEdit'])->name('edit');
        Route::put('{member}', [MembersController::class, 'staffUpdate'])->name('update');
        Route::delete('{member}', [MembersController::class, 'staffDestroy'])->name('destroy');
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Trainers routes
    Route::prefix('admin/trainers')->name('trainers.')->group(function () {
        Route::get('/', [TrainerController::class, 'index'])->name('index');
        Route::get('create', [TrainerController::class, 'create'])->name('create');
        Route::post('/', [TrainerController::class, 'store'])->name('store');
        Route::get('{trainer}', [TrainerController::class, 'show'])->name('show');
        Route::get('{trainer}/edit', [TrainerController::class, 'edit'])->name('edit');
        Route::put('{trainer}', [TrainerController::class, 'update'])->name('update');
        Route::delete('{trainer}', [TrainerController::class, 'destroy'])->name('destroy');
    });

    // Memberships routes
    Route::prefix('admin/memberships')->name('memberships.')->group(function () {
        Route::get('/', [MembershipController::class, 'index'])->name('index');
        Route::get('create', [MembershipController::class, 'create'])->name('create');
        Route::post('/', [MembershipController::class, 'store'])->name('store');
        Route::get('{membership}', [MembershipController::class, 'show'])->name('show');
        Route::get('{membership}/edit', [MembershipController::class, 'edit'])->name('edit');
        Route::put('{membership}', [MembershipController::class, 'update'])->name('update');
        Route::delete('{membership}', [MembershipController::class, 'destroy'])->name('destroy');
    });

    // Members routes for admin
    Route::prefix('admin/members')->name('admin.members.')->group(function () {
        Route::get('/', [MembersController::class, 'adminIndex'])->name('index');
        Route::get('create', [MembersController::class, 'adminCreate'])->name('create');
        Route::post('/', [MembersController::class, 'adminStore'])->name('store');
        Route::get('{member}', [MembersController::class, 'adminShow'])->name('show');
        Route::get('{member}/edit', [MembersController::class, 'adminEdit'])->name('edit');
        Route::put('{member}', [MembersController::class, 'adminUpdate'])->name('update');
        Route::delete('{member}', [MembersController::class, 'adminDestroy'])->name('destroy');
    });
});
// Route::get('admin/dashboard',[AdminController::class,'index'])->
//     middleware(['auth', 'admin']);

// Route::resource('trainers', TrainerController::class);

require __DIR__ . '/auth.php';
