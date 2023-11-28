<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\MatakuliahController;


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

require __DIR__.'/auth.php';

//Route Pone
Route::get('/phone', [PhoneController::class, 'index'])->name('phone.index');
Route::get('/phone/insert', [PhoneController::class,'insertPhone']);
Route::get('/phone/create', [PhoneController::class,'create'])->name('phone.create');
Route::post('/phone/store', [PhoneController::class,'store'])->name('phone.store');
Route::get('/phone/edit/{phone}', [PhoneController::class,'edit'])->name('phone.edit');
Route::put('/phone/update/{phone}', [PhoneController::class,'update'])->name('phone.update');
Route::get('/phone/detail/{phone}', [PhoneController::class,'detail'])->name('phone.detail');
Route::post('/phone/delete/{phone}', [PhoneController::class,'delete'])->name('phone.delete');

//Route MataKuliah
Route::get('/daftar/matakuliah', [MatakuliahController::class,'daftarMatakuliah']);
Route::get('/tabel/matakuliah', [MatakuliahController::class,'tabelMatakuliah']);
Route::get('/detail/matakuliah', [MatakuliahController::class,'DetailMatakuliah']);
