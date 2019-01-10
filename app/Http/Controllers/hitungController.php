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

        //ambil nilai alternatif
        $altproc = DB::table('laptop')->select('processor')->get();
        $altram = DB::table('laptop')->select('ram')->get();
        $altvga = DB::table('laptop')->select('vga')->get();
        $altsto = DB::table('laptop')->select('storage')->get();
        $altbat = DB::table('laptop')->select('battery')->get();
        $altpri = DB::table('laptop')->select('price')->get();
        $altwei = DB::table('laptop')->select('weight')->get();

        $namaalt = DB::table('laptop')->select('seri_laptop')->get();
        //simpan di array
        $arpro = array();
        $arram = array();
        $arvga = array();
        $arsto = array();
        $arbat = array();
        $arpri = array();
        $arwei = array();
        $arnam = array();
        foreach ($altproc as $proc => $processor){
            foreach($processor as $p){
                $arpro[$proc] = $p;
            }
        }
        foreach ($altram as $rams => $ram){
            foreach($ram as $r){
                $arram[$rams] = $r;
            }
        }
        foreach ($altvga as $vgas => $vga){
            foreach($vga as $v){
                $arvga[$vgas] = $v;
            }
        }
        foreach ($altsto as $sto => $storage){
            foreach($storage as $s){
                $arsto[$sto] = $s;
            }
        }
        foreach ($altbat as $bat => $battery){
            foreach($battery as $b){
                $arbat[$bat] = $b;
            }
        }
        foreach ($altpri as $pric => $price){
            foreach($price as $pi){
                $arpri[$pric] = $pi;
            }
        }
        foreach ($altwei as $wei => $weight){
            foreach($weight as $w){
                $arwei[$wei] = $w;
            }
        }
        foreach ($namaalt as $nam => $seri_laptop){
            foreach($seri_laptop as $n){
                $arnam[$nam] = $n;
            }
        }
        $jumlahalt = DB::table('laptop')->count();
        //hitung vektor s
        $salt = array();
        for($i=0; $i<$jumlahalt; $i++)
        {   
            $salt[$i] = pow($arpro[$i],$bobotprocessor) * pow($arram[$i],$bobotram) *pow($arvga[$i],$bobotvga) * pow($arsto[$i],$bobotstorage) * pow($arbat[$i],$bobotbattery) * pow($arpri[$i],$bobotprice) * pow($arwei[$i],$bobotweight);
        }

        // hitung vektor v
        $totals = 0;
        for($i=0; $i<$jumlahalt; $i++){
            $totals = $totals + $salt[$i];
        }

        $valt = array();
        for($i=0; $i<$jumlahalt; $i++){
            $valt[$i] = $salt[$i]/$totals;
        }
        
        //urutkan berdasarkan nilai
        $win = array_combine($arnam, $valt);
        arsort($win);
        foreach ($win as $key=>$value){
            echo $key." dengan nilai = ".$value;
            echo '<br>';
        }
        //print_r($win);
        
        
        
        // $buah = array('apel','jeruk','mangga','jambu','durian','rambutan');
        // for($i=0; $i<5; $i++){
        //     for($j=0; $j<$i; $j++){
        //         print_r($buah[$j]);
        //     }
        //     echo '<br>';
        // }

        //dd($processor); yes
        //return view('kriteria', compact('result'))a;
    }

    
}