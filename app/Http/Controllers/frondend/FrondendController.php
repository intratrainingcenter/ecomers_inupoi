<?php

namespace App\Http\Controllers\frondend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\produk;
use App\User;
use Mail;
use Auth;
use Redirect;
use Session;
use Validator;
use App\Mailfile;
<<<<<<< HEAD
=======
use App\about;
>>>>>>> login
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
        $user = User::get();
        // dd($user);
        return View('frondend/contentPage/contentPage',compact('user'));
    }
    public function email(Request $request)
    {
      // dd($request);
      $data = array(
        'email' => $request->email,
        'title' => $request->title,
      );
      // dd($data);
      Mail::send('frondend.contentPage.mymail', $data, function($massage) use ($data){
        $massage->to('InupiCorp@gmail.com');
        $massage->from($data['email']);
        $massage->subject($data['title']);
      });
      session::flash('success_send', "Mail sent Successfully");
      return redirect()->route('Inupoi.Contact');
    }


    public function about()
    {
      $data = about::all();
      return view('frondend.about.about', compact('data'));
    }

    public function produk()
    {
        $data = produk::all();
        return view('frondend.produk',compact('data'));
    }

    public function transaksi()
    {
        return view('frondend.transaksi');
    }

    public function detail()
    {
        return view('frondend.detailproduk');
    }
}
