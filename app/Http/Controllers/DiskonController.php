<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diskon;

class DiskonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = diskon::all();

        return view('content.diskon.diskon', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek = diskon::where('kode_diskon',$request->kode_diskon)->doesntExist();

        if($cek == true){
            $table = new diskon;
            $table->kode_diskon     =   $request->kode_diskon;
            $table->nominal         =   $request->nominal;
            $table->orderBy('id DESC');
            $table->save();

            return redirect('diskon')->with('success','Add new data success');
        }else{
            return redirect('diskon')->with('edit','Kode Diskon is already exists');
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
      $update = diskon::find($id);
      $update->update([
          'kode_diskon' =>  $request->kode_diskon,
          'nominal' =>  $request->nominal
      ]);

      return redirect('diskon')->with('success','Update data success');
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
      $hapus = diskon::find($id);
      // dd($hapus);
      $hapus->delete();

      return redirect('diskon')->with('success','Delete data success');
    }
}
