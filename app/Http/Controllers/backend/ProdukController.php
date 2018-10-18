<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\produk;
use App\kategori;
use App\keranjang;
use App\diskon;
use App\setting;
use Validator, Input, Redirect;  

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    
    public function index()
    {
        $item = produk::orderBy('created_at', 'desc')->get();
        $category = kategori::all();
        $setting = setting::all();
        $discount = diskon::all();

        $settings = DB::table('settings')
        ->select('min_stock')
        ->get('min_stock');
        
        $product = DB::table('produks')
        ->select('stok')
        ->get('stok');

        
        
       
    
        return view('content.produk.produk',['item'=>$item,'kategori'=>$category,'diskon'=>$discount,'setting'=>$setting]);
    }

   
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
      
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
   
        if($cek)
        { 
            $gambar = $request->images;  
            $GetExtension = $gambar->getClientOriginalName();
            $path = $gambar->storeAs('public/images', $GetExtension);
            
            $gambar_belakang = $request->images2;
            $GetExtension2 = $gambar_belakang->getClientOriginalName();
            $path2 = $gambar_belakang->storeAs('public/images', $GetExtension2);
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
    
    public function show($id)
    {
        
    }

    public function edit($id)
    {
       
    }

  
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            
            'kode_kategori'     => 'required|max:20',
            'kode_diskon'       => 'required|max:20',
            'nama_produk'       => 'required|max:20',
            'ukuran'            => 'required|max:5',
            'harga'             => 'required|max:40',
            'stok'              => 'required|max:40',
            'deskripsi_produk'  => 'required|max:40',


          ]);

        if ($validator->fails())
        {  
            return redirect('barang')->with('not_success', 'Fail');
        }
        else 
        {
            if($request->gambar != null && $request->gambar_belakang != null)
            {
                $get_gambar = produk::where('kode_produk', $id)->first();
                Storage::delete($get_gambar->gambar);
                $gambar = $request->gambar;
                $GetExtension = $gambar->getClientOriginalName();
                $path = $gambar->storeAs('public/images', $GetExtension);

                Storage::delete($get_gambar->gambar_belakang);
                $gambar_belakang = $request->gambar_belakang;
                $GetExtension2 = $gambar_belakang->getClientOriginalName();
                $path2 = $gambar_belakang->storeAs('public/images', $GetExtension2);
            

                $update = produk::where('kode_produk', $id)->update([
   
                    'kode_kategori'     => $request->kode_kategori,
                    'kode_diskon'       => $request->kode_diskon,
                    'nama_produk'       => $request->nama_produk,
                    'ukuran'            => $request->ukuran,                
                    'harga'             => $request->harga,
                    'stok'              => $request->stok,
                    'deskripsi_produk'  => $request->deskripsi_produk,
                    'gambar'            => $path,
                    'gambar_belakang'   => $path2,
                    ]);
                    return redirect('barang')->with('success','Success !!');

            }
            elseif($request->gambar != null && $request->gambar_belakang == null)
            {
                $get_gambar = produk::where('kode_produk', $id)->first();
                Storage::delete($get_gambar->gambar);
                $gambar = $request->gambar;
                $GetExtension = $gambar->getClientOriginalName();
                $path = $gambar->storeAs('public/images', $GetExtension);

                $update = produk::where('kode_produk', $id)->update([
   
                    'kode_kategori'     => $request->kode_kategori,
                    'kode_diskon'       => $request->kode_diskon,
                    'nama_produk'       => $request->nama_produk,
                    'ukuran'            => $request->ukuran,                
                    'harga'             => $request->harga,
                    'stok'              => $request->stok,
                    'deskripsi_produk'  => $request->deskripsi_produk,
                    'gambar'            => $path,
                    ]);
                    return redirect('barang')->with('success','Success !!');

            }
            elseif($request->gambar == null && $request->gambar_belakang != null)
            {
                $get_gambar = produk::where('kode_produk', $id)->first();
                Storage::delete($get_gambar->gambar_belakang);
                $gambar_belakang = $request->gambar_belakang;
                $GetExtension2 = $gambar_belakang->getClientOriginalName();
                $path2 = $gambar_belakang->storeAs('public/images', $GetExtension2);
            

                $update = produk::where('kode_produk', $id)->update([
   
                    'kode_kategori'     => $request->kode_kategori,
                    'kode_diskon'       => $request->kode_diskon,
                    'nama_produk'       => $request->nama_produk,
                    'ukuran'            => $request->ukuran,                
                    'harga'             => $request->harga,
                    'stok'              => $request->stok,
                    'deskripsi_produk'  => $request->deskripsi_produk,
                    'gambar_belakang'   => $path2,
                    ]);
                    return redirect('barang')->with('success',' Success !!');
            }
            else
            {
                $update = produk::where('kode_produk', $id)->update([
                  
                    'kode_kategori'     => $request->kode_kategori,
                    'kode_diskon'       => $request->kode_diskon,
                    'nama_produk'       => $request->nama_produk,
                    'ukuran'            => $request->ukuran,                
                    'harga'             => $request->harga,
                    'stok'              => $request->stok,
                    'deskripsi_produk'  => $request->deskripsi_produk,
                
                ]);
                return redirect('barang')->with('success','Success');

            }
        }
    }

  
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