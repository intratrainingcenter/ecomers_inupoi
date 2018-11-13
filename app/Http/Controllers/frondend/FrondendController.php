<?php

namespace App\Http\Controllers\frondend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\produk;
use App\setting;
use App\User;
use App\kategori;
use App\keranjang;
use Mail;
use Auth;
use Redirect;
use Session;
use Validator;
use App\Mailfile;
use App\about;
use App\diskon;
use App\transaksi;
use App\DetailTransaksi;
class FrondendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->select('produks.gambar','keranjangs.*')
        ->get();

        $category = kategori::paginate(4);

        $footer = setting::all();

        $purchases = DB::table('keranjangs')
        ->sum('keranjangs.harga');

        $count = keranjang::count();

        $data = produk::paginate(4);


        return view('frondend/frondend', compact('data','category','footer','cart','purchases','count'));
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
        $count = keranjang::count();

      $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->select('produks.gambar','keranjangs.*')
        ->get();

        $purchases = DB::table('keranjangs')
        ->sum('keranjangs.harga');
        $footer = setting::all();
        $user = User::get();

        return View('frondend/contentPage/contentpage',compact('user','count','cart','purchases','footer'));
    }
    public function email(Request $request)
    {
      $data = array(
        'email' => $request->email,
        'title' => $request->title,
      );
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

      $count = keranjang::count();

      $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->select('produks.gambar','keranjangs.*')
        ->get();

        $purchases = DB::table('keranjangs')
        ->sum('keranjangs.harga');

        $footer = setting::all();
        $data = about::all();
      return view('frondend.about.about', compact('data','count','cart','purchases','footer'));
    }

    public function produk()
    {
        $data = produk::all();
        return view('frondend.produk',compact('data'));
    }

    public function transaksi()
    {
        $cart = DB::table('keranjangs')
        ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
        ->select('produks.gambar','keranjangs.*')
        ->get();

        $category = kategori::all();
        $data = produk::paginate(8);

        $purchases = DB::table('keranjangs')
        ->sum('keranjangs.harga');

        $footer = setting::all();
        $count = keranjang::count();


        return view('frondend.transaksi',['data'=>$data,'category'=>$category,'cart'=>$cart,'purchases'=>$purchases,
                'count'=>$count,'footer'=>$footer]);

    }

    public function detail()
    {
        return view('frondend.detailproduk');
    }

    public function tutorial()
    {
        return view('frondend.panduan');
    }
    public function history()
    {
        $footer = setting::all();
        
      $code = transaksi::orderBy('id','desc')->first();
     if($code == NULL)
     {
         $number = 'TR' . sprintf('%03d',intval(0)+1);
     }
     else
     {
         $number_check = $code->id;
         $number = 'TR' . sprintf('%03d',intval($number_check)+1);
     }
     $user = Auth::user()->id;
     $user_transaksi = transaksi::select('id_user')->first();
     if ($user) {
       $count = keranjang::where('user',$user)->count();
       $cart = DB::table('keranjangs')
       ->join('produks','keranjangs.kode_produk','=','produks.kode_produk')
       ->join('diskons','produks.kode_diskon','=', 'diskons.kode_diskon')
       ->select('keranjangs.*','produks.gambar','produks.gambar_belakang','produks.harga As hpp','diskons.nominal As nomi_diskon')
       ->where('keranjangs.user',$user)
       ->get();

       $category = kategori::all();
       $detail = DetailTransaksi::join('transaksis','detail_transaksis.kode_transaksi','=','transaksis.kode_transaksi')->where('transaksis.id_user',$user)->get();
       $data = DB::table('produks')
       ->join('diskons','diskons.kode_diskon','=','produks.kode_diskon')
       ->join('keranjangs','keranjangs.kode_produk','=','produks.kode_produk')
       ->select('produks.*','diskons.nominal')
       ->sum('diskons.nominal');
       $purchases = DB::table('keranjangs')
       ->sum('keranjangs.harga');
       return view('frondend.history.history',['data'=>$data,'category'=>$category,'cart'=>$cart,'purchases'=>$purchases,'count'=>$count,'number'=>$number,'detail'=>$detail,'footer'=>$footer]);
     }elseif ($user != $user_transaksi) {
       $data = produk::all();
       return view('frondend.produk',compact('data','footer'));
     }
    }
}
