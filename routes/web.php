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
//     return view('index');
// });

// Route::get('/create', function () {
//     return view('create');
// });

Route::get('/', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/create', 'App\Http\Controllers\MahasiswaController@create');
Route::get('/detail', 'App\Http\Controllers\MahasiswaController@detail');
Route::get('/mahasiswa/create', 'App\Http\Controllers\MahasiswaController@create');
Route::get('/mahasiswa/{mahasiswa}', 'App\Http\Controllers\MahasiswaController@show');
Route::post('/', 'App\Http\Controllers\MahasiswaController@store');
Route::delete('/mahasiswa/{mahasiswa}', 'App\Http\Controllers\MahasiswaController@destroy');
Route::get('/mahasiswa/{mahasiswa}/edit', 'App\Http\Controllers\MahasiswaController@edit');
Route::patch('/mahasiswa/{mahasiswa}', 'App\Http\Controllers\MahasiswaController@update');