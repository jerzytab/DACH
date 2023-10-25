<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RezerwacjaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('', function () {

    $table = DB::table('wycieczki')->get();

    return view('welcome', ['table' => $table]);
});

Route::get('/dashboard', function () {

    $table = DB::table('wycieczki')->get();

    return view('layouts.app', ['table' => $table]);
});

Route::get('/reserved', function() {
    return view('reserved');
});

Route::post('', [RezerwacjaController::class, 'dataInsert'])->name('dataInsert');





require __DIR__.'/auth.php';
