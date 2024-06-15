<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MemberPackageController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\NTMembershipController;
use App\Http\Controllers\NTPackageController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\RentPackageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('user.master');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('ulasan', UlasanController::class);

    // Rents routes for user
    Route::prefix('user/rent')->name('user.rent.')->group(function () {
        Route::get('/', [RentController::class, 'userIndex'])->name('index');
        Route::get('create', [RentController::class, 'userCreate'])->name('create');
        Route::post('/', [RentController::class, 'userStore'])->name('store');
        Route::get('{user.rent}', [RentController::class, 'userShow'])->name('show');
        
    });
});

Route::middleware(['auth', 'staff'])->group(function () {
    Route::get('staff/dashboard', [StaffController::class, 'index'])->name('staff.master');

    // Members routes for staff
    Route::prefix('staff/members')->name('staff_members.')->group(function () {
        Route::get('/', [MembersController::class, 'staffIndex'])->name('index');
        Route::get('create', [MembersController::class, 'staffCreate'])->name('create');
        Route::post('/', [MembersController::class, 'staffStore'])->name('store');
        Route::get('{staff_members}', [MembersController::class, 'staffShow'])->name('show');
        Route::get('{staff_members}/edit', [MembersController::class, 'staffEdit'])->name('edit');
        Route::put('{staff_members}', [MembersController::class, 'staffUpdate'])->name('update');
        Route::delete('{staff_members}', [MembersController::class, 'staffDestroy'])->name('destroy');
    });

    // Memberships routes for staff
    Route::prefix('staff/memberships')->name('staff_memberships.')->group(function () {
        Route::get('/', [MembershipController::class, 'staffIndex'])->name('index');
        Route::get('create', [MembershipController::class, 'staffCreate'])->name('create');
        Route::post('/', [MembershipController::class, 'staffStore'])->name('store');
        Route::get('{staff_memberships}/show', [MembershipController::class, 'staffShow'])->name('show');
        Route::get('{staff_memberships}/edit', [MembershipController::class, 'staffEdit'])->name('edit');
        Route::put('{staff_memberships}', [MembershipController::class, 'staffUpdate'])->name('update');
        Route::delete('{staff_memberships}', [MembershipController::class, 'staffDestroy'])->name('destroy');
    });

    // Non-TrainerMemberships routes
    Route::prefix('staff/non_membership')->name('staff_non_membership.')->group(function () {
        Route::get('/', [NTMembershipController::class, 'staffIndex'])->name('index');
        Route::get('create', [NTMembershipController::class, 'staffCreate'])->name('create');
        Route::post('/', [NTMembershipController::class, 'staffStore'])->name('store');
        Route::get('{staff_non_membership}/show', [NTMembershipController::class, 'staffShow'])->name('show');
        Route::get('{staff_non_membership}/edit', [NTMembershipController::class, 'staffEdit'])->name('edit');
        Route::put('{staff_non_membership}', [NTMembershipController::class, 'staffUpdate'])->name('update');
    });

    // Rent routes for admin
    Route::prefix('staff/rent_book')->name('staff_rent_book.')->group(function () {
        Route::get('/', [RentController::class, 'staffIndex'])->name('index');
        Route::get('create', [RentController::class, 'staffCreate'])->name('create');
        Route::post('/', [RentController::class, 'staffStore'])->name('store');
        Route::get('{staff_rent_book}/show', [RentController::class, 'staffShow'])->name('show');
        Route::get('{staff_rent_book}/edit', [RentController::class, 'staffEdit'])->name('edit');
        Route::put('{staff_rent_book}', [RentController::class, 'staffUpdate'])->name('update');
        Route::delete('{staff_rent_book}', [RentController::class, 'staffDestroy'])->name('destroy');
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
        Route::get('{package}/show', [MemberPackageController::class, 'show'])->name('show');
        Route::get('{package}/edit', [MemberPackageController::class, 'edit'])->name('edit');
        Route::put('{package}', [MemberPackageController::class, 'update'])->name('update');
        Route::delete('{package}', [MemberPackageController::class, 'destroy'])->name('destroy');
    });

    // Non-TrainerPackages routes
    Route::prefix('admin/non_package')->name('non_package.')->group(function () {
        Route::get('/', [NTPackageController::class, 'index'])->name('index');
        Route::get('create', [NTPackageController::class, 'create'])->name('create');
        Route::post('/', [NTPackageController::class, 'store'])->name('store');
        Route::get('{non_package}/show', [NTPackageController::class, 'show'])->name('show');
        Route::get('{non_package}/edit', [NTPackageController::class, 'edit'])->name('edit');
        Route::put('{non_package}', [NTPackageController::class, 'update'])->name('update');
        Route::delete('{non_package}', [NTPackageController::class, 'destroy'])->name('destroy');
    });


    // Members routes for admin
    Route::prefix('admin/member_list')->name('member_list.')->group(function () {
        Route::get('/', [MembersController::class, 'adminIndex'])->name('index');
        Route::get('create', [MembersController::class, 'adminCreate'])->name('create');
        Route::post('/', [MembersController::class, 'adminStore'])->name('store');
        Route::get('{member_list}/show', [MembersController::class, 'adminShow'])->name('show');
        Route::get('{member_list}/edit', [MembersController::class, 'adminEdit'])->name('edit');
        Route::put('{member_list}', [MembersController::class, 'adminUpdate'])->name('update');
        Route::delete('{member_list}', [MembersController::class, 'adminDestroy'])->name('destroy');
    });
    
    // Memberships routes
    Route::prefix('admin/memberships')->name('memberships.')->group(function () {
        Route::get('/', [MembershipController::class, 'index'])->name('index');
        Route::get('create', [MembershipController::class, 'create'])->name('create');
        Route::post('/', [MembershipController::class, 'store'])->name('store');
        Route::get('{membership}/show', [MembershipController::class, 'show'])->name('show');
        Route::get('{membership}/edit', [MembershipController::class, 'edit'])->name('edit');
        Route::put('{membership}', [MembershipController::class, 'update'])->name('update');
        Route::delete('{membership}', [MembershipController::class, 'destroy'])->name('destroy');
    });

    // Non-TrainerMemberships routes
    Route::prefix('admin/non_membership')->name('non_membership.')->group(function () {
        Route::get('/', [NTMembershipController::class, 'index'])->name('index');
        Route::get('create', [NTMembershipController::class, 'create'])->name('create');
        Route::post('/', [NTMembershipController::class, 'store'])->name('store');
        Route::get('{non_membership}/show', [NTMembershipController::class, 'show'])->name('show');
        Route::get('{non_membership}/edit', [NTMembershipController::class, 'edit'])->name('edit');
        Route::put('{non_membership}', [NTMembershipController::class, 'update'])->name('update');
        Route::delete('{non_membership}', [NTMembershipController::class, 'destroy'])->name('destroy');
    });

    // RentPackage routes
    Route::prefix('admin/rent_package')->name('rent_package.')->group(function () {
        Route::get('/', [RentPackageController::class, 'index'])->name('index');
        Route::get('create', [RentPackageController::class, 'create'])->name('create');
        Route::post('/', [RentPackageController::class, 'store'])->name('store');
        Route::get('{rent_package}/show', [RentPackageController::class, 'show'])->name('show');
        Route::get('{rent_package}/edit', [RentPackageController::class, 'edit'])->name('edit');
        Route::put('{rent_package}', [RentPackageController::class, 'update'])->name('update');
        Route::delete('{rent_package}', [RentPackageController::class, 'destroy'])->name('destroy');
    });

    // Rent routes for admin
    Route::prefix('admin/rent_book')->name('rent_book.')->group(function () {
        Route::get('/', [RentController::class, 'index'])->name('index');
        Route::get('create', [RentController::class, 'create'])->name('create');
        Route::post('/', [RentController::class, 'store'])->name('store');
        Route::get('{rent_book}/show', [RentController::class, 'show'])->name('show');
        Route::get('{rent_book}/edit', [RentController::class, 'edit'])->name('edit');
        Route::put('{rent_book}', [RentController::class, 'update'])->name('update');
        Route::delete('{rent_book}', [RentController::class, 'destroy'])->name('destroy');
    });

});
// Route::get('admin/dashboard',[AdminController::class,'index'])->
//     middleware(['auth', 'admin']);

// Route::resource('trainers', TrainerController::class);

require __DIR__ . '/auth.php';
