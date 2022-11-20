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

    public function edit ($id) 

        {
            //get data based on ID

            $karyawan = DB::table('users') -> where ('id',$id)->get();

            // passing data karyawan to view Edit.blade.php
            return view ('edit', ['karyawan' => $karyawan]);
        }

    public function update(Request $request)    

        {
            //action update data 
            DB::table('users') ->where('id', $request ->id)-> update ([
                'id' => $request->id,
                'name' => $request->name,
                'email' => $request->email,
                'telp' => $request->telp

            ]);

            return redirect('/karyawan');

        }

    public function del($id)    
    {
        // action delete data based on ID 
        DB:: table('users')->where('id', $id)-> delete();

        return redirect('/karyawan');
    }

}
