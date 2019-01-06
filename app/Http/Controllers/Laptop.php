<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelLaptop;
use DB;

class Laptop extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelLaptop::all();
        return view('laptop',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   {
       return view('laptop_create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $data = new ModelLaptop();
       $data->seri_laptop = $request->seri_laptop;
       $data->processor = $request->processor;
       $data->ram = $request->ram;
       $data->vga = $request->vga;
       $data->storage = $request->storage;
       $data->battery = $request->battery;
       $data->price = $request->price;
       $data->weight = $request->weight;
       $data->save();
       return redirect()->route('laptop.index')->with('alert-success','Berhasil Menambahkan Data!');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function kriteria()
    // {
    //     //
    //     $value = 1;
    //     return view('kriteria');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelLaptop::where('id',$id)->get();

        return view('laptop_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ModelLaptop::where('id',$id)->first();
        $data->seri_laptop = $request->seri_laptop;
        $data->processor = $request->processor;
        $data->ram = $request->ram;
        $data->vga = $request->vga;
        $data->storage = $request->storage;
        $data->battery = $request->battery;
        $data->price = $request->price;
        $data->weight = $request->weight;
        $data->save();
        return redirect()->route('laptop.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data
        $data = ModelLaptop::where('id',$id)->first();
        $data->delete();
        return redirect()->route('laptop.index')->with('alert-success','Data berhasi dihapus!');
    }

    

    
}
