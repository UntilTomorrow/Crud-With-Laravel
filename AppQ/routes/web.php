<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





//route CRUD

Route::get('/karyawan','\App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/add','\App\Http\Controllers\KaryawanController@add');
Route::get('/karyawan/edit/{id}','\App\Http\Controllers\KaryawanController@edit');
Route::get('/karyawan/del/{id}','\App\Http\Controllers\karyawanController@del');
Route::post('/karyawan/save','\App\Http\Controllers\KaryawanController@save');
Route::post('/karyawan/update','\App\Http\Controllers\karyawanController@update');









