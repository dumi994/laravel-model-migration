<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViaggioController;

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

/* page controller */
Route::get('/', 'ViaggioController@index' )->name('home');;
Route::get('about', 'ViaggioController@about' )->name('about');;
Route::get('contacts', 'ViaggioController@contacts' )->name('contacts');;

