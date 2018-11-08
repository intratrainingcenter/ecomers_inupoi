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
         $code = transaksis::orderBy('id','desc')->first();
        if($code == NULL)
        {
            $number = 'TR' . sprintf('%03d',intval(0)+1);
        }
        else
        {
            $no_check = $code->id;
            $number = 'TR' . sprintf('%03d',intval($no_check)+1);
        }
      
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
      
        $user = Auth::user()->select('id')->get();
        $cart = keranjang::where('kode_produk',$request->kode_produk)->get();
        foreach($user as $users){}
        foreach($cart as $item){}

        if($request->total < $item->jumlah ){

            $create = keranjang::where('user',$request->user)->where('kode_produk',$request->kode_produk)->update([
                
                'jumlah'            => $request->total,
                'harga'             => ($request->harga-$request->total*$request->hpp),
                
                ]);
                return redirect('ftrans')->with('success','has been updated');
            }
        elseif($request->total > $item->jumlah){
            $create = keranjang::where('user',$request->user)->where('kode_produk',$request->kode_produk)->update([
                
                'jumlah'            => $request->total,
                'harga'             => ($request->total*$request->hpp+$request->harga),
                
                ]);
                return redirect('ftrans')->with('success','has been updated');
            }
        elseif($request->total == $item->jumlah){
            return redirect('ftrans');

        }
        
    }

   
    public function destroy($id)
    {
    
        $user = Auth::user()->id;
        $data = keranjang::where('kode_produk',$id)->where('user',$user)->first();
        $data->delete();
        return redirect('ftrans')->with('success','Success remove item from Cart');
        
    }
}
