<?php

namespace App\Http\Controllers\frondend;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\coment;
use Auth;


class FrontKomentarController extends Controller
{

    public function index()
    {
        
        $data = coment::join('produks','coments.kode_produk','=','produks.kode_produks')->join('users','coments.kode_users','=','users.id')
        ->get();
        return view('content.komentar.komentar', compact('data'));
        
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        
        if(Auth::guard('web')->check())
        {
            $user = Auth::user()->select('id')->get();
            DB::table('coments')->insert([
                'kode_user'           => Auth::user()->id, 
                'kode_produk'         => $request->kode_produk,
                'deskripsi'           => $request->review,
                'rating'              => $request->rating,
                ]);
                    return back();
        }
        return back();

        
    
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
