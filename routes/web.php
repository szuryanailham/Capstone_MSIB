<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\DoctorController;
use App\Models\Dokter;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/specialist', [SpecialistController::class, 'index'])->name('specialist.index');
Route::get('specialist/create', [SpecialistController::class, 'create'])->name('specialist.create');
Route::post('specialist', [SpecialistController::class, 'store'])->name('specialist.store');
Route::get('specialist/{specialist}/edit', [SpecialistController::class, 'edit'])->name('specialist.edit');
Route::put('specialist/{specialist}', [SpecialistController::class, 'update'])->name('specialist.update');
Route::delete('specialist/{specialist}', [SpecialistController::class, 'destroy'])->name('specialist.destroy');

Route::get('/dokter', [DoctorController::class, 'index'])->name('dokter.index');
Route::get('dokter/create', [DoctorController::class, 'create'])->name('dokter.create');
Route::post('dokter', [DoctorController::class, 'store'])->name('dokter.store');
Route::get('dokter/{dokter}/edit', [DoctorController::class, 'edit'])->name('dokter.edit');
Route::put('dokter/{dokter}', [DoctorController::class, 'update'])->name('dokter.update');
Route::delete('dokter/{dokter}', [DoctorController::class, 'destroy'])->name('dokter.destroy');

// Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
// Route::get('blogs/show', [BlogController::class, 'show'])->name('blogs.show');
// Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
// Route::post('blogs/create', [BlogController::class, 'store'])->name('blogs.store');
// Route::get('blogs/{blog}edit', [BlogController::class, 'edit'])->name('blogs.edit');
// Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
// Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

Route::resource('blogs', BlogController::class);

require __DIR__.'/auth.php';