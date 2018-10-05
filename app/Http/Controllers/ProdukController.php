<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\produk;
use App\kategori;
use App\keranjang;
use App\diskon;
use Validator, Input, Redirect;  

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
        $item = produk::orderBy('created_at', 'desc')->get();;
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            
            'kode_produk'       => 'required|max:20',
            'kode_kategori'     => 'required|max:20',
            'kode_diskon'       => 'required|max:20',
            'nama_produk'       => 'required|max:20',
            'ukuran'            => 'required|max:5',
            'harga'             => 'required|max:40',
            'stok'              => 'required|max:40',
            'deskripsi_produk'  => 'required|max:40',
            'images'            => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'images2'           => 'required|image|mimes:jpeg,png,jpg|max:2048',

          ]);

        if ($validator->fails())
        {  
            return redirect('barang')->with('not_success', 'Fail');
        }
        $cek = produk::where('kode_produk',$request->kode_produk)->doesntExist();
        // dd($cek);
        if($cek)
        { 
            $gambar = $request->images;  
            $GetExtension = $gambar->getClientOriginalName();
            $path = $gambar->storeAs('public/images', $GetExtension);
            
            $gambar_belakang = $request->images2;
            $GetExtension2 = $gambar_belakang->getClientOriginalName();
            $path2 = $gambar_belakang->storeAs('public/images', $GetExtension2);
            // dd($path2);
            $create = produk::create([
                'kode_produk'       => $request->kode_produk,
                'kode_kategori'     => $request->kode_kategori,
                'kode_diskon'       => $request->kode_diskon,
                'nama_produk'       => $request->nama_produk,
                'ukuran'            => $request->ukuran,                
                'harga'             => $request->harga,
                'stok'              => $request->stok,
                'rating'            => '0',
                'deskripsi_produk'  => $request->deskripsi_produk,
                'gambar'            => $path,
                'gambar_belakang'   => $path2,
                ]);
                return redirect('barang')->with('success','Success');
                
            }
            else
            {
            return redirect('barang')->with('warning', 'Code has been exist');

            }
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
        $data = produk::where('kode_produk', $id)->first();
        $image_path = $data->gambar;
        $image_path2 = $data->gambar_belakang;
        Storage::delete($image_path);
        Storage::delete($image_path2);
        $data->delete();
        return redirect('barang')->with('success','Success');
    }
}
