<?php

namespace App\Http\Controllers\frondend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\produk;
use App\kategori;
use App\setting;
use App\keranjang;
use App\coment;
use Auth;


class FrontProductController extends Controller
{

    public function index()
    {   
        if (Auth::guard('web')->check())
        {
            $user = Auth::user()->id;
            $count = keranjang::where('user',$user)->count();
            $cart = DB::table('keranjangs')
            ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
            ->where('keranjangs.user',$user)
            ->get();
            $category = kategori::all();
            $data = produk::paginate(8);
            $purchases = DB::table('keranjangs')
            ->sum('keranjangs.harga');

             $footer = setting::all();

            return view('frondend.produk',['data'=>$data,'category'=>$category,'cart'=>$cart,'purchases'=>$purchases,
            'count'=>$count,'footer'=>$footer]);
        }
    
        $category = kategori::all();
        $data = produk::paginate(8);
        $footer = setting::all();

        $purchases = DB::table('keranjangs')
        ->sum('keranjangs.harga');

        return view('frondend.produk',['data'=>$data,'category'=>$category,'purchases'=>$purchases,'footer'=>$footer]);
        
    }
    public function showcart()
    {
        $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->select('produks.gambar','keranjangs.*')
        ->get();

        return response()->json(array('success' => true, 'cart' => $cart));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $user = Auth::user()->select('id')->get();
        foreach($user as $users){}
        $count = keranjang::where('id',$users->id)->count();

        $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->select('produks.gambar','keranjangs.*')
        ->get();

        $category = kategori::all();
        $data = DB::table('produks')
            ->select('*')
            ->where('nama_produk', 'like' , "%{$request->search}%")
            ->paginate(8);

        $purchases = DB::table('keranjangs')
            ->sum('keranjangs.harga');


        return view('frondend.produk',['data'=>$data,'category'=>$category,'count'=>$count,'cart'=>$cart,
                    'purchases'=>$purchases]);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $data = DB::table('produks')
            ->select('*')
            ->where('kode_produk',$id)
            ->get();

        $category = DB::table('kategoris')
        ->join('produks', 'produks.kode_kategori','=','kategoris.kode_kategori')
        ->select('kategoris.*')
        ->where('kode_produk',$id)
        ->get();
        $count = keranjang::count();

        $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->select('produks.gambar','keranjangs.*')
        ->get();

        $purchases = DB::table('keranjangs')
        ->sum('keranjangs.harga');

        $related = produk::orderBy('created_at', 'desc')->get();
        $comment = coment::all();

        $footer = setting::all();


        return view('frondend.detailproduk',['data'=>$data,'category'=>$category,'related'=>$related,'count'=>$count,
        'cart'=>$cart,'purchases'=>$purchases,'comment'=>$comment,'footer'=>$footer]);
    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
