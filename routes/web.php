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

Route::get('/', function () {
    return view('welcome');
});
//strona startowa
use App\Http\Controllers\StartController; 
Route::get('/', StartController::class);
// opisy do stron galeria & historia
use App\Http\Controllers\OpisyController; 
Route::get('/galeria', [OpisyController::class, 'galeria']);
Route::get('/historia', [OpisyController::class, 'historia']);
// kontakt
use App\Http\Controllers\KontaktController; 
Route::get('/kontakt', [KontaktController::class, 'kontakt']);
//wynik wyslania formy kontaktowej
Route::get('/contact', [KontaktController::class, 'contact']);
// cennik - TypySerwisu
use App\Http\Controllers\TypSerwisuController; 
Route::get('/cennik', [TypSerwisuController::class, 'showAll']);
Route::post('/cennik/edit/{id}', [TypSerwisuController::class, 'edit']);
Route::post('/cennik/update/{id}', [TypSerwisuController::class, 'update'])->name('updateCennik');
Route::get('/cennik/destroy/{id}', [TypSerwisuController::class, 'destroy']);
// klient - login
use App\Http\Controllers\KlientController; 
Route::get('/login', [KlientController::class, 'showAll']);
