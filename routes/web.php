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
    return view('welcome');
});
Route::get('data/state={state}&dateStart={dateStart}&dateEnd={dateEnd}', 'App\Http\Controllers\Controlador@data')->name('data');
Route::get('percentual', 'App\Http\Controllers\Controlador@percentual')->name('percentual');
Route::get('percentual2', 'App\Http\Controllers\Controlador@percentualBrasilIO')->name('percentualBrasilIO');
Route::get('/seguro/webapp', 'App\Http\Controllers\WebApp@index')->name('webApp');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
