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
use App\coment;
use Validator, Input, Redirect;  
use Auth;

class FrontdetailController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user()->id;
       
        $data = DB::table('produks')
        ->select('*')
        ->where('kode_produk',$request->kode_produk)
        ->get();

        $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->where('keranjangs.user',$user)
        ->get();

        $purchases = DB::table('keranjangs')
        ->sum('keranjangs.harga');

        $related = produk::orderBy('created_at', 'desc')->get();
        
        $count = keranjang::where('user',$user)->count();
        $footer = setting::all();

          $count = keranjang::select('nama_produk')->count();

        $comment = coment::join('produks','coments.kode_produk','=','produks.kode_produks')->join('users','coments.kode_users','=','users.id')
        ->get();
     return view('frondend.detailproduk',['data'=>$data,'related'=>$related,'count'=>$count,
                'cart'=>$cart,'purchases'=>$purchases,'footer'=>$footer]);
                'cart'=>$cart,'purchases'=>$purchases,'comment'=>$comment]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [

            'kode_produk'       => 'required|max:20',
            'nama_produk'       => 'required|max:20',
            'ukuran'            => 'required|max:5',
            'total'             => 'required|max:20',
            'harga'             => 'required|max:40',
            'user'              => 'required|max:40',


          ]);

        if ($validator->fails())
        {
            return redirect()->route('fpro.edit', ['id' => $request->kode_produk])->with('Fail', 'the size has not been filled');
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
                    'user'              => $request->user,
                    'harga'             => ($request->harga*$request->total),
                    'user'              => $request->user,


                    ]);
                    return redirect()->route('fpro.edit', ['id' => $request->kode_produk])->with('success','Success add to Cart');
            }
            else
            {
                return redirect()->route('fpro.edit', ['id' => $request->kode_produk])->with('Fail','Stock for this Size is not Available');
            }
        }
        else
        {

            $cek2 = produk::where('ukuran',$request->ukuran)->where('nama_produk',$request->nama_produk)->count();
            if($cek2 == 1)
            {
                $cek3 = keranjang::select('jumlah')->where('kode_produk',$request->kode_produk)->get();
                foreach($cek3 as $ceking){}
                $cek4 = keranjang::select('harga')->where('kode_produk',$request->kode_produk)->get();
                foreach($cek4 as $ceking2){}
                $create = keranjang::where('kode_produk',$request->kode_produk)->update([

                    'jumlah'            => ($ceking->jumlah+$request->total),
                    'harga'             => ($request->total*$request->harga+$ceking2->harga),

                    ]);
                return redirect()->route('fpro.edit', ['id' => $request->kode_produk])->with('success','Success add to Cart');
            }
            else
            {
                return redirect()->route('fpro.edit', ['id' => $request->kode_produk])->with('Fail','Stock for this Size is not Available');
            }


        }
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
