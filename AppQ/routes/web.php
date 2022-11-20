<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





//route CRUD

Route::get('/karyawan','\App\Http\Controllers\KaryawanController@index');

