<?php

//use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('store-mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/read', [MahasiswaController::class, 'read']);
Route::get('/delete', [MahasiswaController::class, 'delete']);
Route::get('/edit', [MahasiswaController::class, 'edit']);


Route::get('/', function () {
    return view('welcome');
});



/* Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
