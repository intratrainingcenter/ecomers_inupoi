<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\laporanKeuangan;

class LapKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = laporanKeuangan::all();
        $totbi = laporanKeuangan::sum('total_biaya');

        $menit = now()->addMinutes(10080);

        $value = Cache::remember('res',$menit, function () {
            return DB::table('laporan_keuangans')->get();
        });

        $get = Cache::get('res');

        return view('content.LapKeuangan.laporanKeuangan', compact('data','totbi'));
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

    public function filter(Request $request)
    {
        $dari = $request->get('dari');
        $sampai = $request->get('sampai');

        $data = laporanKeuangan::whereBetween('tgl_transaksi', [$dari, $sampai])->get();
        $totbi = laporanKeuangan::whereBetween('tgl_transaksi', [$dari, $sampai])->sum('total_biaya');

        return view('content.LapKeuangan.laporanKeuangan', compact('data','totbi'));
    }

    public function subtotal()
    {
        $count = laporanKeuangan::sum('total_biaya');
        // dd($count);

        return $count;
    }
}
