<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\about;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = about::all();
        // dd($data);
        return view('content.about.about', compact('data'));
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
      $gambar = $request->file('image');
      // dd($gambar);
      $nm_file = $gambar->getClientOriginalName();
      $request->file('image')->move(public_path().'/image/', $nm_file);
      $data = about::find($id);
      $data->image = $nm_file;
      $data->deskripsi = $request->deskripsi;
     $data->save();
    return redirect()->route('about.index')->with('success', 'Berhasil Mengedit Data');
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

    public function update_mission(Request $request, $id)
    {
      // dd($request->all());
      $gambar = $request->file('image_mission');
      $nm_file = $gambar->getClientOriginalName();
      $request->file('image_mission')->move(public_path().'/image/', $nm_file);
      $data = about::find($id);
      $data->image_mission = $nm_file;
      $data->deskripsi_mission = $request->deskripsi_mission;
     $data->save();
    return redirect()->route('about.index')->with('success', 'Berhasil Mengedit Data');
    }
}
