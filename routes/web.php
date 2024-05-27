<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrainerController;
use App\Models\Trainer;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage.master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class,'index']);

    //trainers
    Route::get('admin/trainers',[TrainerController::class,'index'])->name('trainers.index');
    Route::get('admin/trainers/create',[TrainerController::class,'create'])->name('trainers.create');
    Route::post('admin/trainers',[TrainerController::class,'store'])->name('trainers.store');
    Route::get('admin/trainers/{trainer}',[TrainerController::class,'show'])->name('trainers.show');
    Route::get('admin/trainers/{trainer}/edit',[TrainerController::class,'edit'])->name('trainers.edit');
    Route::put('admin/trainers/{trainer}',[TrainerController::class,'update'])->name('trainers.update');
    Route::delete('admin/trainers/{trainer}',[TrainerController::class,'destroy'])->name('trainers.destroy');
});

// Route::get('admin/dashboard',[AdminController::class,'index'])->
//     middleware(['auth', 'admin']);

// Route::resource('trainers', TrainerController::class);

require __DIR__.'/auth.php';

