<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class hitungController extends Controller
{
    //
    public function hitung()
    {
        $result = Input::get('kriteria');
        

        $nilaikriteria = DB::table('kriteria')->where('id_kriteria',$result)->get();
        $processor -> $nilaikriteria['processor'];


        dd($nilaikriteria);
        //return view('kriteria', compact('result'))a;
    }

    
}
