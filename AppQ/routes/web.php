<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





//route CRUD

Route::get('/karyawan','\App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/add','\App\Http\Controllers\KaryawanController@add');
Route::post('/karyawan/save','\App\Http\Controllers\KaryawanController@save');


