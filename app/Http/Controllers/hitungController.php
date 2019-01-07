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
        foreach ($nilaikriteria as $nilai)
        {
            $processor = $nilai->processor;
            $ram = $nilai->ram;
            $vga = $nilai->vga;
            $storage = $nilai->storage;
            $battery = $nilai->battery;
            $price = $nilai->price;
            $weight = $nilai->weight;
        }
        $total = $processor + $ram + $vga + $storage + $battery + $price + $weight;

        //hitung nilai bobot
        $bobotprocessor = $processor / $total;
        $bobotram = $ram / $total;
        $bobotvga = $vga / $total;
        $bobotstorage = $storage / $total;
        $bobotbattery = $battery / $total;
        $bobotprice = -1 * $price / $total;
        $bobotweight = -1 * $weight / $total;

        $alternatif = DB::table('laptop')->get();
        $jumlahalt = DB::table('laptop')->count();


        echo $alternatif;
        echo $processor, $ram, $vga, $storage, $battery, $price, $weight;
        echo '=',$total,$jumlahalt;

        //dd($processor);
        //return view('kriteria', compact('result'))a;
    }

    
}
