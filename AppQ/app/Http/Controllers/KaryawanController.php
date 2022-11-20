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

    public function add()
    {
        // call view add

        return view('add');
    }

    public function save(Request $request)

        {
            //action save form 

            DB::table('users')->Insert([
                
                'id'    => $request->id,
                'name'  => $request->name,
                'email' => $request->email,
                'telp'  => $request->telp,

            ]);

            return redirect('/karyawan');
        }

}
