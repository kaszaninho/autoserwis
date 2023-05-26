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
Route::post('/cennik/edit/{id}', [TypSerwisuController::class, 'edit']);
Route::post('/cennik/update/{id}', [TypSerwisuController::class, 'update'])->name('updateCennik');
Route::post('/cennik/destroy/{id}', [TypSerwisuController::class, 'destroy']);
 


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

