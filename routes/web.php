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

// Route::get('/', function () {
//     return view('welcome');
// });

// http://127.0.0.1:8000/
Route::get('/', 'HomeController@index');

// http://127.0.0.1:8000/product
Route::get('product/{id}', 'HomeController@product');

http://127.0.0.1:8000/game
Route::resource('games', 'GameController');
Route::get('game', 'GameController@index');
