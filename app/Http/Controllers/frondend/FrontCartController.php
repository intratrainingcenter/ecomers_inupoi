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

class FrontCartController extends Controller
{

    public function index()
    {

    }

  
    public function create()
    {
        
    }

    public function store(Request $request)
    {
    
        $user = Auth::user()->select('id')->get();
        foreach($user as $users){}
        $validator = Validator::make($request->all(), [
            
            'kode_produk'       => 'required|max:20',
            'nama_produk'       => 'required|max:20',
            'ukuran'            => 'required|max:5',
            'total'             => 'required|max:20',
            'harga'             => 'required|max:40',
            
          ]);

        if ($validator->fails())
        {  
            return redirect('fpro')->with('Fail', 'the size has not been filled');
        }
        $usercek = keranjang::where('user',$request->user)->doesntExist();
        $cek = keranjang::where('kode_produk',$request->kode_produk)->doesntExist();
        if($cek && $usercek)
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
    
                    ]);
                    return redirect('fpro')->with('success','Success add to Cart');
                 
                    
            }
            else
            {
                return redirect('fpro')->with('Fail','Stock for this Size is not Available');
            }        
        }
        elseif($cek == false && $usercek == false)
        {
            $ceksize = produk::where('ukuran',$request->ukuran)->where('nama_produk',$request->nama_produk)->count();
            
            if($ceksize == 1)
            {
                $cek3 = keranjang::select('jumlah')->where('kode_produk',$request->kode_produk)->get();
                foreach($cek3 as $ceking){}
                $cek4 = keranjang::select('harga')->where('kode_produk',$request->kode_produk)->get();            
                foreach($cek4 as $ceking2){}
                    $create = keranjang::where('user',$request->user)->where('kode_produk',$request->kode_produk)->update([
                        
                        'jumlah'            => ($ceking->jumlah+$request->total),
                        'harga'             => ($request->total*$request->harga+$ceking2->harga),
                        
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
    
                    ]);
                    return redirect('fpro')->with('success','Success add to Cart');  
            }
            else
            {
                return redirect('fpro')->with('Fail','Stock for this Size is not Available');
            }        
        }

    }

    
    public function show($id)
    {
       
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
       
        
        $user = Auth::user()->id;
        $data = keranjang::where('kode_produk',$id)->where('user',$user)->first();
        $data->delete();
        return redirect('fpro')->with('success','Success Delete item on Cart');
        
        
    }
}
