<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('welcome');
});



Route::get('/parking', function(){
    return view('customers/parking');
});

Route::get('/reserve',[App\Http\Controllers\CustomerController::class, 'create']);
Route::post('/confirmation',[App\Http\Controllers\CustomerController::class, 'store']);

Route::get('/confirmation',[App\Http\Controllers\CustomerController::class, 'show']);

Route::get('/carselect',[App\Http\Controllers\CarController::class,'show']);
Route::put('/carselect/select/{id}', 'App\Http\Controllers\CarController@select')->name('carselect.select');
Route::put('/carselect/deselect/{id}', 'App\Http\Controllers\CarController@deselect')->name('carselect.deselect');
// Route::get('/carselect',[App\Http\Controllers\CarController::class,'showslot']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');