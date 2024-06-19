<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservasiController;
use App\Models\Dokter;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () { 
    Route::get('reservasi/create', [ReservasiController::class, 'create'])->name('reservasi.create');
    Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');
    Route::get('/reservasi/getDoctorsBySpecialist', [ReservasiController::class, 'getDoctorsBySpecialist']);
    Route::get('/reservasi/getJadwalByDoctor', [ReservasiController::class, 'getJadwalByDoctor']);
    Route::get('/reservasi/riwayat', [ReservasiController::class, 'history'])->name('reservasi.history');
    Route::get('/reservasi/{reservasi}', [ReservasiController::class, 'detail'])->name('reservasi.detail');
    Route::get('/reservasi/{reservasi}/download-pdf', [ReservasiController::class, 'downloadPDF'])->name('reservasi.pdf');
    Route::get('reservasi/{id}', [ReservasiController::class, 'show'])->name('reservasi.show');


    Route::get('payments/create/{reservasi_id}', [PaymentController::class, 'create'])->name('payments.create');
    Route::post('payments/store', [PaymentController::class, 'store'])->name('payments.store');
   
});

Route::middleware(['auth', 'admin'])->group(function () {
   
    Route::get('specialist/create', [SpecialistController::class, 'create'])->name('specialist.create');
    Route::post('specialist', [SpecialistController::class, 'store'])->name('specialist.store');
    Route::get('specialist/{specialist}/edit', [SpecialistController::class, 'edit'])->name('specialist.edit');
    Route::put('specialist/{specialist}', [SpecialistController::class, 'update'])->name('specialist.update');
    Route::delete('specialist/{specialist}', [SpecialistController::class, 'destroy'])->name('specialist.destroy');
    
    Route::get('reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');
    Route::get('dokter/create', [DoctorController::class, 'create'])->name('dokter.create');
    Route::post('dokter', [DoctorController::class, 'store'])->name('dokter.store');
    Route::get('/dokter/admin', [DoctorController::class, 'admin'])->name('dokter.admin');
    Route::get('dokter/{dokter}/edit', [DoctorController::class, 'edit'])->name('dokter.edit');
    Route::put('dokter/{dokter}', [DoctorController::class, 'update'])->name('dokter.update');
    Route::delete('dokter/{dokter}', [DoctorController::class, 'destroy'])->name('dokter.destroy');
    Route::get('/blogs/admin', [BlogController::class, 'admin'])->name('blogs.admin');
    


    Route::resource('jadwal', JadwalController::class)->except(['index']);
    Route::resource('blogs', BlogController::class);
});









// Route::resource('reservasi', ReservasiController::class);
// Route::get('/get-doctors-by-specialist', [ReservasiController::class, 'getDoctorsBySpecialist'])->name('getDoctorsBySpecialist');


// Route::get('reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');


Route::get('/dokter', [DoctorController::class, 'index'])->name('dokter.index');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/dokter/{id}', [DoctorController::class, 'show'])->name('dokter.profile');
Route::get('/specialist', [SpecialistController::class, 'index'])->name('specialist.index');
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');


// Route::get('/dashboard', function() {
//     return view('dashboard');
// })->middleware('role:admin')->name('dashboard');

// Route::get('/role', function() {
//     return view('role');
// })->middleware('role:user')->name('role');

require __DIR__.'/auth.php';