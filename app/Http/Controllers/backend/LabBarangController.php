<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\laporanBarang;
use App\produk;
use App\DetailTransaksi;

class LabBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = produk::select(DB::raw('sum(stok) as stok,kode_produk'))->groupBy('kode_produk')->with(['detail_transaksi' => function($query){
                $query->select(DB::raw('sum(qty) as qty,kode_barang'))->groupBy('kode_barang');
        }])->get();

        $data = produk::all();
        
        // $bro = DetailTransaksi::selectRaw('sum(qty) as sum')
        // ->groupBy('kode_barang')->get();  
        // foreach($bro as $tes){
        //     $brgout[] = $tes->sum;
        // }

        $minute = now()->addMinutes(10080);

        $value = Cache::remember('res', $minute, function(){
            return DB::table('produks')->get();
        });

        $get = Cache::get('res');

        return view('content.LapBarang.laporanBarang', compact('data','barang'));
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
}
