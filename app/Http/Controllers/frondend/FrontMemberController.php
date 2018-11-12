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
use App\User;
use Validator, Input, Redirect; 
use Auth; 

class FrontMemberController extends Controller
{
  
    public function index()
    {
        //
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
       $address = User::where('id',$id)->update([
            'nickname'      =>$request->nama_penerima,
            'no_telp'       =>$request->no_tele,
            'alamat'        =>$request->alamat,
       ]);
       return redirect('ftrans')->with('update', 'Address has Added ');
        
    }

   
    public function destroy($id)
    {
        //
    }
}
