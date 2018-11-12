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
use App\transaksi;
use App\DetailTransaksi;
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
         $code = transaksi::orderBy('id','desc')->first();
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
            ->join('diskons','produks.kode_diskon','=', 'diskons.kode_diskon')
            ->select('keranjangs.*','produks.gambar','produks.gambar_belakang','produks.harga As hpp','diskons.nominal As nomi_diskon')
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
            'count'=>$count,'number'=>$number]);
    
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $item = keranjang::where('user',$request->id_user)->count();
        $items = keranjang::join('produks','produks.kode_produk','=','keranjangs.kode_produk')
        ->join('diskons','diskons.kode_diskon','=','produks.kode_diskon')
        ->where('keranjangs.user',$request->id_user)->get();
        $stock = produk::all();
        $address = Auth::user()->alamat;

        foreach($stock as $stocks){}

            foreach($items as $in)
            {
                $createdetail = DetailTransaksi::create([
                    'kode_transaksi'    => $request->kode_transaksi,
                    'kode_produk'       => $in->kode_produk,
                    'nama_produk'       => $in->nama_produk,
                    'harga'             => $in->harga,
                    'qty'               => $in->jumlah,
                    'sub_total'         => ($in->harga*$in->jumlah),
                    'nominal_diskon'    => $in->nominal,
                    ]);
            }
        
            
            $createtrans = transaksi::create([
                'kode_transaksi'    => $request->kode_transaksi,
                'id_user'           => $request->id_user,
                'grandtotal'        => $request->amount,
                'alamat_tujuan'     => $address,

                
            ]);
        $update = produk::where('kode_produk',$request->kode_produk)->update([
            'stok'              => ($stocks->stok-$request->qty),
        ]);

        return redirect('ftrans');

    }

   
    public function show($id)
    {
        //
    }

   
    public function edit(Request $request, $id)
    {
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
                'harga'             => ($request->total*$request->hpp),
                
                ]);
                return redirect('ftrans')->with('update','has been updated');
            }
        elseif($request->total > $item->jumlah){
            $create = keranjang::where('user',$request->user)->where('kode_produk',$request->kode_produk)->update([
                
                'jumlah'            => $request->total,
                'harga'             => ($request->total*$request->hpp),
                
                ]);
                return redirect('ftrans')->with('update','has been updated');
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
