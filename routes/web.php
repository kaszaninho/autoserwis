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
use App\Http\Controllers\Start; 
Route::get('/', Start::class);
use App\Http\Controllers\Opisy; 
Route::get('/galeria', [Opisy::class, 'galeria']);
Route::get('/historia', [Opisy::class, 'historia']);