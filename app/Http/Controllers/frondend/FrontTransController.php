<?php

namespace App\Http\Controllers\frondend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\produk;
use App\kategori;
use App\keranjang;
use Auth;

class FrontTransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $user = Auth::user()->id;
            $count = keranjang::where('user',$user)->count();
            $cart = DB::table('keranjangs')
            ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
            ->select('keranjangs.*','produks.gambar','produks.gambar_belakang','produks.harga As hpp')
            ->where('keranjangs.user',$user)
            ->get();

            $category = kategori::all();
            $data = DB::table('produks')
            ->join('diskons','diskons.kode_diskon','=','produks.kode_diskon')
            ->join('keranjangs','keranjangs.kode_produk','=','produks.kode_produk')
            ->select('produks.*','diskons.nominal')
            ->sum('diskons.nominal');
            $purchases = DB::table('keranjangs')
            ->sum('keranjangs.harga');

            return view('frondend.transaksi',['data'=>$data,'category'=>$category,'cart'=>$cart,'purchases'=>$purchases,
            'count'=>$count]);
    
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
