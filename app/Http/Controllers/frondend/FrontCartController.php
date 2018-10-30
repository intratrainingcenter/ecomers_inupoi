<?php

namespace App\Http\Controllers\frondend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\produk;
use App\kategori;
use App\keranjang;
use App\diskon;
use App\setting;
use Validator, Input, Redirect;  


class FrontCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    //    dd($request);

        $validator = Validator::make($request->all(), [
            
            'kode_produk'       => 'required|max:20',
            'nama_produk'       => 'required|max:20',
            'ukuran'            => 'required|max:5',
            'total'             => 'required|max:20',
            'harga'             => 'required|max:40',
            
          ]);

        if ($validator->fails())
        {  
            return redirect('fpro')->with('fail', 'the size has not been filled');
        }
        $cek = keranjang::where('kode_produk',$request->kode_produk)->doesntExist();
       
        if($cek)
        { 
            $cek2 = produk::where('ukuran',$request->ukuran)->where('nama_produk',$request->nama_produk)->count();
            if($cek2 == 1)
            {
                $create = keranjang::create([
                    'kode_produk'       => $request->kode_produk,
                    'nama_produk'       => $request->nama_produk,
                    'ukuran'            => $request->ukuran,   
                    'jumlah'            => $request->total,             
                    'harga'             => $request->harga,
    
                    ]);
                    return redirect('fpro')->with('success','Success add to Cart');
            }
            else
            {
                return redirect('fpro')->with('Fail','Stock for this Size is not Available');
            }        
        }
        else
        {
            return redirect('fpro')->with('fail', 'Item has been Added');

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
        //
    }
}
