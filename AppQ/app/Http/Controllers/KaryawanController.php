<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
    //get data form table Karyawan

    $karyawan = DB::table('users')->get();

    //send data karyawan to view index
    return view('index', ['karyawan' => $karyawan]);

    }

}
