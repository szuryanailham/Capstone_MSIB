<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

require __DIR__.'/auth.php';
