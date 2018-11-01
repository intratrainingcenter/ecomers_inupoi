<?php

namespace App\Http\Controllers\frondend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\produk;

class FrondendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = produk::all();

        return view('frondend/frondend', compact('data'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact()
    {
        return view('frondend.contact');
    }

    public function about()
    {
        return view('frondend.about');
    }

    public function produk()
    {
        return view('frondend.produk');
    }

    public function transaksi()
    {
        return view('frondend.transaksi');
    }

    public function detail()
    {
        return view('frondend.detailproduk');
    }

    // public function kode()
    // {
    //     $date = date('Y');
    //     $mounth = date('m');
    //     $day = date('d');
    //     $hour = date('H');

    //     $miliseconds = round(microtime(true));
    //     $kode = ('TR'.$date.$mounth.$day.$hour.$miliseconds);
    //     dd($kode);

    //     return $kode;
    // }
}
