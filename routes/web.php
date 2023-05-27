<?php

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

//strona startowa

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\StartController; 
Route::get('/', StartController::class);

// opisy do stron galeria & historia
use App\Http\Controllers\OpisyController; 
Route::get('/galeria', [OpisyController::class, 'galeria']);
Route::get('/historia', [OpisyController::class, 'historia']);
// kontakt
use App\Http\Controllers\KontaktController; 
Route::get('/kontakt', [KontaktController::class, 'kontakt']);
Route::get('/kontaktWalidacja', [KontaktController::class, 'kontaktWalidacja'])->name('kontaktWalidacja');
//wynik wyslania formy kontaktowej
Route::post('/contact', [KontaktController::class, 'sendEmail']) ;
// cennik - TypySerwisu
use App\Http\Controllers\TypSerwisuController; 
Route::get('/cennik', [TypSerwisuController::class, 'showAll']);
Route::get('/cennik/edit/{id}', [TypSerwisuController::class, 'edit']);
Route::post('/cennik/update/{id}', [TypSerwisuController::class, 'update'])->name('updateCennik');
Route::get('/cennik/destroy/{id}', [TypSerwisuController::class, 'destroy']);
// naprawy 
use App\Http\Controllers\NaprawyController; 
Route::get('/naprawy', [NaprawyController::class, 'showAll']);
Route::get('/serwis/{id}', [NaprawyController::class, 'showAllthree']);
use App\Http\Controllers\SamochodController; 
Route::get('/samochody', [SamochodController::class, 'showAll']);
Route::get('/samochody/edit/{id}', [SamochodController::class, 'edit']);
Route::post('/samochody/update/{id}', [SamochodController::class, 'update'])->name('updateSamochod');
Route::get('/samochody/destroy/{id}', [SamochodController::class, 'destroy']);
use App\Http\Controllers\SerwisController; 
Route::get('/serwisy', [SerwisController::class, 'showAll']);
//KLient
use App\Http\Controllers\KlientController; 
Route::resource('klienci', KlientController::class);
Route::get('/klienci', [KlientController::class, 'filter']);
//Autentykacja - Laravel (login, rejestracja) 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//profil  
use App\Http\Controllers\ProfileController; 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


