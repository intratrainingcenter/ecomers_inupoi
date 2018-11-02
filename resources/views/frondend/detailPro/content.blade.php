    @include('frondend.detailPro.mod')
        
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                            
                            <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="{{Storage::url($item->gambar)}}">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="{{Storage::url($item->gambar)}}" alt="IMG-PRODUCT">
                                            
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{Storage::url($item->gambar)}}">
                                                    <i class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="item-slick3" data-thumb="{{Storage::url($item->gambar_belakang)}}">
                                                <div class="wrap-pic-w pos-relative">
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
                                        <span class="fs-30 cl11">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                        </span>
                                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                            {{$item->nama_produk}}
                                        </h4>
                                        
                                        <span class="mtext-106 cl2">
                                            {{"$.".number_format($item->harga)}}
                                        </span>
                                        <br>
                                        
                                        <hr>
                                        
                                        <!--  -->
                                        <form action="{{Route('fdet.store')}}" method="POST">
                                                <div class="p-t-33">
                                                    <div class="flex-w flex-r-m p-b-10">
                                                        <div class="size-203 flex-c-m respon6">
                                                            Size
                                                        </div>
                                                        
                                                        <div class="size-204 respon6-next">
                                                            <div class="rs1-select2 bor8 bg0">
                                                                <select class="js-select2" name="ukuran">
                                                                    <option>Choose an option</option>
                                                                    <option value="S">Size - S</option>
                                                                    <option value="M">Size - M</option>
                                                                    <option value="L">Size - L</option>
                                                                    <option value="XL">Size - XL</option>>
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
                                                            <input type="hidden" name="harga"       value="{{$item->harga}}">
                                                    		<input type="hidden" name="user"        value="{{Auth::user()->id}}">

                                                            <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
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
                                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                                        <i class="zmdi zmdi-favorite"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
    
           