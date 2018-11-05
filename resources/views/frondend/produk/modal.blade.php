
   @if ($message = Session::get('success'))
        <div class="alert swal-overlay swal-overlay--show-modal notif" tabindex="-1" role="alert">
            <div class="swal-modal"><div class="swal-icon swal-icon--success">
            <span class="swal-icon--success__line swal-icon--success__line--long"></span>
            <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
        
            <div class="swal-icon--success__ring"></div>
            <div class="swal-icon--success__hide-corners"></div>
            </div><div class="swal-title" style="">
                                             
            </div><div class="swal-text" style="">{{$message}}</div><div class="swal-footer"><div class="swal-button-container">
        
            <button type="button" class="close--confirm" data-dismiss="alert" aria-label="Close"><span class="btn btn-primary">OK</span></button>            
            
            <div class="swal-button__loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        
            </div></div></div></div>
    
    @elseif ($message = Session::get('Fail'))
        <div class="alert swal-overlay swal-overlay--show-modal notif" tabindex="-1" role="alert">
            <div class="swal-modal">
            <div class="swal-title" style="">
                 FAIL !!                            
            </div>
            <div class="swal-text" style="color:red">{{$message}}</div><div class="swal-footer"><div class="swal-button-container">
        
            <button type="button" class="close--confirm" data-dismiss="alert" aria-label="Close"><span class="btn btn-primary">OK</span></button>
            
            <div class="swal-button__loader">
                <div></div>
                <div></div>
                <div></div>
            </div>
        
            </div>
             </div>
            </div>
        </div>
    @endif

@foreach ($data as $item)
<div class="modal modalku" id="quick{{$item->kode_produk}}">	  
		{{-- start --}}
        <div class="container">
                <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
						
                            <div class="row">	
                                <div class="col-md-6 col-lg-7 p-b-30">
                                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                                        <div class="wrap-slick3 flex-sb flex-w">
                                            <div class="wrap-slick3-dots"></div>
                                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                            
                                            <div class="slick3 gallery-lb">
                                                <div class="item-slick3" data-thumb="{{Storage::url($item->gambar)}}">
                                                    <div class="wrap-pic-w pos-relative imgku">
                                                        <img src="{{Storage::url($item->gambar)}}" alt="IMG-PRODUCT">
                                                        
                                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{Storage::url($item->gambar)}}">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div class="item-slick3" data-thumb="{{Storage::url($item->gambar_belakang)}}">
                                                    <div class="wrap-pic-w pos-relative imgku">
                                                        <img src="{{Storage::url($item->gambar_belakang)}}" alt="IMG-PRODUCT">
                                                        
                                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{Storage::url($item->gambar_belakang)}}">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-lg-5 p-b-30">
                                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                                        <h4 class="mtext-105 cl2 js-name-detail p-b-14" name='name'>
                                        {{$item->nama_produk}}
                                        </h4>
                                        
                                        <span class="mtext-106 cl2">
										{{"$.".number_format($item->harga)}}
                                            
                                        </span>
                                        
                                        <p class="stext-102 cl3 p-t-23">
                                        {{$item->deskripsi_produk}}                                         
                                        </p>
                                        
                                        <!--  -->
                                        <form action="{{Route('fcart.store')}}" method="POST">
                                        <div class="p-t-33">
                                            <div class="flex-w flex-r-m p-b-10">
                                                <div class="size-203 flex-c-m respon6">
                                                    Size
                                                </div>
                                                
                                                <div class="size-204 respon6-next">
                                                    <div class="rs1-select2 bor8 bg0">
                                                        <select class="js-select2" name="ukuran">
            												<option class="center" value="" disabled selected>Choose an option</option>
                                                            <option value="S">Size - S</option>
                                                            <option value="M">Size - M</option>
                                                            <option value="L">Size - L</option>
                                                            <option value="XL">Size - XL</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            
                                            <div class="flex-w flex-r-m p-b-10">
                                                <div class="size-204 flex-w flex-m respon6-next">
                                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                                            </div>
                                                            
                                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="total" value="1">
                                                            
                                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="kode_produk" value="{{$item->kode_produk}}">
                                                        <input type="hidden" name="nama_produk" value="{{$item->nama_produk}}">
                                                        @if(Auth::guard('web')->check())
                                                        <input type="hidden" name="user" value="{{Auth::user()->id}}">
                                                        @endif
                                                        <input type="hidden" name="harga" value="{{$item->harga}}">
                                                        <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                            Add to cart
                                                        </button>
                                                        {{ csrf_field() }}
                                                    </form>

                                                </div>
                                            </div>	
                                        </div>
                                        
                                        <!--  -->
                                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                            <div class="flex-m bor9 p-r-10 m-r-11">
												<button type="button" class="btn btn-danger pull-left batal" data-dismiss="modal">Close</button>

                                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
												</a>
                                            </div>
                                            
													
											</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
        {{-- END --}}
          </div>

              
@endforeach