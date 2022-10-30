<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AddController;
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
Route::controller(DbController::class)->group(function () {

    Route::get('/','home')->name('home');
    Route::view('/confirm/{id}/{ip}', 'confirm')->name('confir');
    Route::get('/confirm/{id}', 'delete')->name('delete');
    
});
Route::controller(TopController::class)->group(function () {
    Route::get('/top', 'Slct')->name('top');
    Route::get('/topfast', 'top_fast')->name('fast');
    Route::get('/toperror', 'top_err')->name('errors');
    Route::get('/topmonth', 'month')->name('month');

});

Route::controller(AddController::class)->group(function () {
    Route::view('/add', 'add')->name('adds');
    Route::post('/add', 'create')->name('add');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/edit/{id}', 'update')->name('update');
    
});


