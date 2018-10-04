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
        $item = produk::all();
        $category = kategori::all();
        return view('content.produk.produk',['item'=>$item,'kategori'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $cek = produk::where('kode_produk',$request->kode_produk)->doesntExist(); 
        
        if($cek == true)
        {
        $table = new produk;
        $table->kode_produk    =  $request->kode_produk;
        $table->kode_kategori  =  $request->kode_kategori;
        $table->kode_diskon    =  $request->kode_diskon;
        $table->nama_produk    =  $request->nama_produk;
        $table->harga          =  $request->harga;     
        $table->stok           =  $request->stok;
        $table->deskripsi      =  $request->deskripsi;

        $table->orderBy('id DESC');
        $table->save();

        return redirect('barang')->with('yeah','Add new data success');
        }
        else{
            return redirect('barang')->with('update','Kode is already exists'); 

        }
        
        //  // dd($request);
        //  $cek = produk::where('kode_produk',$request->kode_produk)->doesntExist(); 
        
        //  if($cek == true)
        //  {
        //      $upload = "N";
        //      if ($request->hasFile('images')) {
        //      $destination = "images";
        //      $filename = $request->file('images');
        //      $filename1 = $request->file('images2');
        //      $filename->move($destination, $filename->getClientOriginalName());
        //      $filename1->move($destination, $filename1->getClientOriginalName());
        //      $upload = "Y";
        //      }
        //          if ($upload = "Y") {
           
        //          $table = new produk;
        //          $table->kode_produk    =  $request->kode_produk;
        //          $table->kode_kategori  =  $request->kode_kategori;
        //          $table->kode_diskon    =  $request->kode_diskon;
        //          $table->nama_produk    =  $request->nama_produk;
        //          $table->harga          =  $request->harga;     
        //          $table->stok           =  $request->stok;
        //          $table->deskripsi      =  $request->deskripsi;
        //          $table->gambar = $filename->getClientOriginalName();
        //          $table->gambar2 = $filename1->getClientOriginalName();
        //          $table->orderBy('id DESC');
        //          $table->save();
                 
        //          return redirect('barang')->with('yeah','Add new data success');
        //      }
        //  }
        //  else
        //  {
        //      return redirect('barang')->with('update','Kode is already exists'); 
        //  }

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
