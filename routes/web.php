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

// Declarar que a porta é a :122 quando rodar a aplicação localmente. Ex: Executar comando "php artisan serve --port=122" e abrir a url "http://127.0.0.1:122/"

Route::get('/', 'Controller@home')->name('home');
Route::get('home', 'Controller@home')->name('home');
Route::get('pokemon/{id}', 'Controller@pokemon')->name('pokemon');
Route::get('detalha_pokemon/{id}', 'Controller@detalha_pokemon')->name('detalha_pokemon');

// Route::get('/', function () {
//     return view('welcome');
// });
