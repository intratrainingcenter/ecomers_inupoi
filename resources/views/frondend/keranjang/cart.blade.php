
<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full" id="minicart">
					@if(Auth::guard('web')->check())
					@foreach ($cart as $carts)

						<form action="{{Route('fcart.destroy',['id'=>$carts->kode_produk])}}" method="POST">
						@csrf @method('DELETE')
						<button type="submit" class="fa fa-close">
						</button>
						</form>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="{{Storage::url($carts->gambar)}}" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">

						<a href="{{Route('fpro.edit',['id'=>$carts->kode_produk])}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							{{$carts->nama_produk}}
						</a>

							<span class="header-cart-item-info">
								{{$carts->jumlah}} = {{"$.".number_format($carts->harga)}}
							</span>
						</div>
					</li>

					@endforeach
				</ul>

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: {{"$. ".number_format($purchases)}}
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{Route('history')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							History
						</a>
						<a href="{{Route('ftrans.index')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10 pull-right">
							Check Out
						</a>
					</div>
				</div>

			@else

				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">

					</div>

					<div class="header-cart-item-txt p-t-8">

					<span href="" class="header-cart-item-name m-b-18 hov-cl1 trans-04">

					</span>

						<span class="header-cart-item-info">

						</span>
					</div>
				</li>

			</ul>

			<div class="w-full">
				<div class="header-cart-total w-full p-tb-40">
					Total:
				</div>

				<div class="header-cart-buttons flex-w w-full">
					<a href="{{ url('Inupoi/google') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
						Check Out
					</a>
				</div>
			</div>
			@endif
			</div>
		</div>
	</div>

	{{-- <div class="wrap-header-favorit js-panel-favorit">
		<div class="s-full js-hide-favorit"></div>

		<div class="header-favorit flex-col-l p-l-65 p-r-25">
			<div class="header-favorit-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Favorite
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-favorit">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-favorit-content flex-w js-pscroll">
				<ul class="header-favorit-wrapitem w-full" id="minicart">
			@foreach ($cart as $carts)

						<form action="{{Route('fcart.destroy',['id'=>$carts->kode_produk])}}" method="POST">
						@csrf @method('DELETE')
						<button type="submit" class="fa fa-close">
						</button>
						</form>

					<li class="header-favorit-item flex-w flex-t m-b-12">
						<div class="header-favorit-item-img">
							<img src="{{Storage::url($carts->gambar)}}" alt="IMG">
						</div>

						<div class="header-favorit-item-txt p-t-8">

						<span href="" class="header-favorit-item-name m-b-18 hov-cl1 trans-04">
								{{$carts->nama_produk}}
						</span>

							<span class="header-favorit-item-info">
								{{$carts->jumlah}} = {{"$.".number_format($carts->harga)}}
							</span>
						</div>
					</li>

					@endforeach
				</ul>

				<div class="w-full">
					<div class="header-favorit-total w-full p-tb-40">
						Total: {{"$. ".number_format($purchases)}}
					</div>

					<div class="header-favorit-buttons flex-w w-full">
						<a href="{{Route('Inupoi.Transaksi')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
