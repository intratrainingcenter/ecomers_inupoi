<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Bcrypt;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::get();
      // dd($user);
      return View('content/profile',compact('user'));
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
      $user = User::where('id', $id)->first();
      return View('content/detail_profile',compact('user', 'id'));
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
      $gambar = $request->file('foto');
            $nm_file = $gambar->getClientOriginalName();
            $request->file('foto')->move(public_path().'/image/', $nm_file);
      $user = User::find($id);
   if (Hash::check(request()->get('password_lama'), $user->password)) {
     $user->name = $request->name;
     $user->email = $request->email;
     $user->jabatan = $request->jabatan;
     $user->foto = $nm_file;
     $user->password = bcrypt('$request->password');
     $user->save();
     dd($user);
    return redirect()->route('user.index')->with('success', 'Berhasil Mengedit Data');
  }else {
      return redirect()->route('user.index')->with('gagal','Gagal mengupdate data mohon chack password anda');
    }

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
