<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kategori::all();
        return view('content.kategori.kategori', compact('data'));

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
        // dd($request);
        $cek = kategori::where('kode_kategori',$request->kode_kategori)->doesntExist();

        if($cek == true){
            $table = new kategori;
            $table->kode_kategori   =   $request->kode_kategori;
            $table->nama_kategori   =   $request->nama_kategori;
            $table->orderBy('id DESC');
            $table->save();

            return redirect('kategori')->with('success','Add new data success');
        }else{
            return redirect('kategori')->with('edit','Kode Kategori is already exists');
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
        $update = kategori::find($id);
        $update->update([
            'kode_kategori' =>  $request->kode_kategori,
            'nama_kategori' =>  $request->nama_kategori
        ]);

        return redirect('kategori')->with('success','Update data success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $hapus = kategori::find($id);
        // dd($hapus);
        $hapus->delete();

        return redirect('kategori')->with('success','Delete data success');
    }
}
