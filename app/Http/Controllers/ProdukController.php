<?php

namespace App\Http\Controllers;
use App\produk;
use App\kategori;
use App\keranjang;
use App\diskon;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.produk.produk');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cek = produk::where('nama_kelas',$request->nama_kelas)->doesntExist(); 
        // dd($cek);
        if($cek == true)
        {
        $table = new kelas;
        $table->kode_guru    =  $request->kode_guru;
        $table->nama_kelas   =  $request->nama_kelas;
        $table->jml_siswa    =  $request->jml_siswa;
        $table->orderBy('id_kelas DESC');
        $table->save();

        return redirect('kelas')->with('yeah','Add new data success');
        }
        else{
            return redirect('kelas')->with('update','Name Class is already exists'); 

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
