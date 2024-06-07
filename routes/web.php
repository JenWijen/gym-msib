<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MemberPackageController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\StaffController;
use App\Models\Membership;
use App\Models\Trainer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     // return view('auth.login');// diganti dlu ntar diganti lg ke landingpage.master
//     return view('landingpage.master');
// });
Route::get('/', [LandingController::class, 'index'])->name('landingpage.master');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


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
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.master');

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

    // MemberPackages routes
    Route::prefix('admin/packages')->name('packages.')->group(function () {
        Route::get('/', [MemberPackageController::class, 'index'])->name('index');
        Route::get('create', [MemberPackageController::class, 'create'])->name('create');
        Route::post('/', [MemberPackageController::class, 'store'])->name('store');
        Route::get('{package}', [MemberPackageController::class, 'show'])->name('show');
        Route::get('{package}/edit', [MemberPackageController::class, 'edit'])->name('edit');
        Route::put('{package}', [MemberPackageController::class, 'update'])->name('update');
        Route::delete('{package}', [MemberPackageController::class, 'destroy'])->name('destroy');
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

});
// Route::get('admin/dashboard',[AdminController::class,'index'])->
//     middleware(['auth', 'admin']);

// Route::resource('trainers', TrainerController::class);

require __DIR__ . '/auth.php';
