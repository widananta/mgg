<?php

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

Route::get('/', function () {return view('welcome');});
Route::get('siswa', 'SiswaController@index');
Route::get( '/siswa/tambah', 'SiswaController@tambah');
Route::post( '/siswa/store', 'SiswaController@store');
Route::get( '/siswa/ubah/{id}', 'SiswaController@ubah');
Route::post( '/siswa/update', 'SiswaController@update');
Route::get('/siswa/hapus/{id}', 'SiswaController@hapus');