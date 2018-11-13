<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\coment;
class KomentarController extends Controller
{

    public function index()
    {
        $data = coment::all();
        return view('content.komentar.komentar', compact('data'));
        
    }
    
    public function create()
    {
        //
    }
  
    public function store(Request $request)
    {
        //
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