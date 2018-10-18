@foreach($data as $produk)
<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
	<!-- Block2 -->
	<div class="block2">
		<div class="block2-pic hov-img1">
			<img src="{{Storage::url($produk->gambar)}}" alt="IMG-PRODUCT">

			<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
				Quick View
			</a>
		</div>

		<div class="block2-txt flex-w flex-t p-t-14">
			<div class="block2-txt-child1 flex-col-l ">
				<a href="{{Route('Inupoi.Detail')}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
					{{$produk->nama_produk}}
				</a>

				<span class="stext-105 cl3">
					{{"$.".number_format($produk->harga)}}
				</span>
			</div>

			<div class="block2-txt-child2 flex-r p-t-3">
				<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
					<img class="icon-heart1 dis-block trans-04" src="{{asset('cozastore/images/icons/icon-heart-01.png')}}" alt="ICON">
					<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('cozastore/images/icons/icon-heart-02.png')}}" alt="ICON">
				</a>
			</div>
		</div>
	</div>
</div>
@endforeach

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
	<!-- Block2 -->
	<div class="block2">
		<div class="block2-pic hov-img0">
			<img src="{{asset('cozastore/images/product-04.jpg')}}" alt="IMG-PRODUCT">

			<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
				Quick View
			</a>
		</div>

		<div class="block2-txt flex-w flex-t p-t-14">
			<div class="block2-txt-child1 flex-col-l ">
				<a href="{{asset('cozastore/product-detail.html')}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
					Classic Trench Coat
				</a>

				<span class="stext-105 cl3">
					$75.00
				</span>
			</div>

			<div class="block2-txt-child2 flex-r p-t-3">
				<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
					<img class="icon-heart1 dis-block trans-04" src="{{asset('cozastore/images/icons/icon-heart-01.png')}}" alt="ICON">
					<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('cozastore/images/icons/icon-heart-02.png')}}" alt="ICON">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
	<!-- Block2 -->
	<div class="block2">
		<div class="block2-pic hov-img0">
			<img src="{{asset('cozastore/images/product-05.jpg')}}" alt="IMG-PRODUCT">

			<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
				Quick View
			</a>
		</div>

		<div class="block2-txt flex-w flex-t p-t-14">
			<div class="block2-txt-child1 flex-col-l ">
				<a href="{{asset('cozastore/product-detail.html')}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
					Front Pocket Jumper
				</a>

				<span class="stext-105 cl3">
					$34.75
				</span>
			</div>

			<div class="block2-txt-child2 flex-r p-t-3">
				<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
					<img class="icon-heart1 dis-block trans-04" src="{{asset('cozastore/images/icons/icon-heart-01.png')}}" alt="ICON">
					<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('cozastore/images/icons/icon-heart-02.png')}}" alt="ICON">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
	<!-- Block2 -->
	<div class="block2">
		<div class="block2-pic hov-img0">
			<img src="{{asset('cozastore/images/product-06.jpg')}}" alt="IMG-PRODUCT">

			<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
				Quick View
			</a>
		</div>

		<div class="block2-txt flex-w flex-t p-t-14">
			<div class="block2-txt-child1 flex-col-l ">
				<a href="{{asset('cozastore/product-detail.html')}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
					Vintage Inspired Classic 
				</a>

				<span class="stext-105 cl3">
					$93.20
				</span>
			</div>

			<div class="block2-txt-child2 flex-r p-t-3">
				<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
					<img class="icon-heart1 dis-block trans-04" src="{{asset('cozastore/images/icons/icon-heart-01.png')}}" alt="ICON">
					<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('cozastore/images/icons/icon-heart-02.png')}}" alt="ICON">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
	<!-- Block2 -->
	<div class="block2">
		<div class="block2-pic hov-img0">
			<img src="{{asset('cozastore/images/product-07.jpg')}}" alt="IMG-PRODUCT">

			<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
				Quick View
			</a>
		</div>

		<div class="block2-txt flex-w flex-t p-t-14">
			<div class="block2-txt-child1 flex-col-l ">
				<a href="{{asset('cozastore/product-detail.html')}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
					Shirt in Stretch Cotton
				</a>

				<span class="stext-105 cl3">
					$52.66
				</span>
			</div>

			<div class="block2-txt-child2 flex-r p-t-3">
				<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
					<img class="icon-heart1 dis-block trans-04" src="{{asset('cozastore/images/icons/icon-heart-01.png')}}" alt="ICON">
					<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('cozastore/images/icons/icon-heart-02.png')}}" alt="ICON">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
	<!-- Block2 -->
	<div class="block2">
		<div class="block2-pic hov-img0">
			<img src="{{asset('cozastore/images/product-08.jpg')}}" alt="IMG-PRODUCT">

			<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
				Quick View
			</a>
		</div>

		<div class="block2-txt flex-w flex-t p-t-14">
			<div class="block2-txt-child1 flex-col-l ">
				<a href="{{asset('cozastore/product-detail.html')}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
					Pieces Metallic Printed
				</a>

				<span class="stext-105 cl3">
					$18.96
				</span>
			</div>

			<div class="block2-txt-child2 flex-r p-t-3">
				<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
					<img class="icon-heart1 dis-block trans-04" src="{{asset('cozastore/images/icons/icon-heart-01.png')}}" alt="ICON">
					<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('cozastore/images/icons/icon-heart-02.png')}}" alt="ICON">
				</a>
			</div>
		</div>
	</div>
</div>