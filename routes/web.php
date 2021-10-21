<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::resource('participante', 'ParticipanteController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sortear', [App\Http\Controllers\HomeController::class, 'sortear'])->name('sortear');
Route::get('/participante', [App\Http\Controllers\HomeController::class, 'participante'])->name('participante');

Route::get('/sorteo', function () {
    return view('sorteo');
});
