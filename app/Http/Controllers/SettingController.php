<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\setting;
use Validator, Input, Redirect;  


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = setting::all();
        $cek = setting::all()->count();
        return view('content.setting.setting',['setting'=>$setting,'cek'=>$cek]);
        //
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
        $validator = Validator::make($request->all(), [
            
            'name'       => 'required|max:20',
            'address'    => 'required|max:30',
            'contact'    => 'required|max:20',
            'min_stock'  => 'required|max:20',
            'logo'     => 'required|image|mimes:jpeg,png,jpg|max:2048',

          ]);

        if ($validator->fails())
        {  
            return redirect('setting')->with('not_success', 'Fail');
        }
        else
        {
            $logo = $request->logo;  
            $GetExtension = $logo->getClientOriginalName();
            $path = $logo->storeAs('public/images', $GetExtension);
            $create = setting::create([
                'nama'       => $request->name,
                'alamat'     => $request->address,
                'contact'    => $request->contact,
                'min_stock'  => $request->min_stock,
                'logo'       => $path,
                ]);
                return redirect('setting')->with('success','Success');
          
        }
    }

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
        // dd($request);
        $validator = Validator::make($request->all(), [
            
            'name'       => 'required|max:20',
            'address'    => 'required|max:30',
            'contact'    => 'required|max:20',
            'min_stock'  => 'required|max:20',

          ]);

        if ($validator->fails())
        {  
            return redirect('setting')->with('not_success', 'Fail');
        }
        else
        {
            if($request->logo != null)
            {

                $logo = $request->logo;  
                $GetExtension = $logo->getClientOriginalName();
                $path = $logo->storeAs('public/images', $GetExtension);
                $update = setting::where('id', $id)->update([
                    'nama'       => $request->name,
                    'alamat'     => $request->address,
                    'contact'    => $request->contact,
                    'min_stock'  => $request->min_stock,
                    'logo'       => $path,
                    ]);
                    return redirect('setting')->with('success','Success');
            
            }
            else
            {
                $update = setting::where('id', $id)->update([
                    'nama'       => $request->name,
                    'alamat'     => $request->address,
                    'contact'    => $request->contact,
                    'min_stock'  => $request->min_stock,
                    ]);
                    return redirect('setting')->with('success','Success');
            }
          
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
