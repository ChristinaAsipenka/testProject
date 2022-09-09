<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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


Route::get('index', [FormController::class, 'mainform'])->name('index');
Route::post('index', 'App\Http\Controllers\FormController@store')->name('form.store');
Route::get('{id}', 'App\Http\Controllers\FormController@show')->name('form.show');

