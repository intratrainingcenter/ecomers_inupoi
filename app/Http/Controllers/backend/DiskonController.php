<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\diskon;
use App\produk;

class DiskonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = diskon::orderBy('created_at','desc')->get();

        $date = date('Y');
        $mounth = date('m');
        $day = date('d');
        $hour = date('H');
        $miliseconds = round(microtime(true));

        $kode = ('DSK'.$date.$mounth.$day.$hour.$miliseconds);

        return view('content.diskon.diskon', compact('data','kode'));
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


      $cek= produk::where('kode_diskon', $id)->doesntExist();

      if($cek==true)
      {
        $hapus = diskon::where('kode_diskon', $id);
        // dd($hapus);
        $hapus->delete();

        return redirect('diskon')->with('success','Delete data success');

      }
      else {

        return redirect('diskon')->with('edit','This code diskon has been used');

      }
    }
}
