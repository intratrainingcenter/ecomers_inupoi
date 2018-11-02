		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>
						@if (Auth::guard('web')->check())
						<form action="{{ route('logout') }}" method="POST">
						<a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
							@csrf
						</form>
						@else
						<a href="{{ url('Inupoi/google') }}" class="flex-c-m trans-04 p-lr-25">
							Login &nbsp;<i class="fa fa-google"></i>oogle +
						</a>
						@endif
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="/Inupoi" class="logo">
						<img src="{{asset('cozastore/images/icons/inupoi.png')}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="{{Route('Inupoi.index')}}">Home</a>
							</li>

							<li>
								<a href="{{Route('fpro.index')}}">Shop</a>
							</li>

							<li>
								<a href="{{Route('Inupoi.Transaksi')}}">transaction</a>
							</li>

							<li>
								<a href="{{Route('Inupoi.About')}}">About</a>
							</li>

							<li>
								<a href="{{Route('Inupoi.Contact')}}">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						{{-- <a href="{{Route('Inupoi.Transaksi')}}" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</a> --}}

						<div class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="0">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<div class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-favorit" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</div>

						{{-- <div class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-favorit" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</div> --}}
					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="{{asset('cozastore/index.html')}}"><img src="{{asset('cozastore/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="0">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Login
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="{{Route('Inupoi.index')}}">Home</a>
				</li>

				<li>
					<a href="{{Route('Inupoi.Produk')}}">Shop</a>
				</li>

				<li>
					<a href="{{Route('Inupoi.Transaksi')}}" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="{{Route('Inupoi.About')}}">About</a>
				</li>

				<li>
					<a href="{{Route('Inupoi.Contact')}}">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{asset('cozastore/images/icons/icon-close2.png')}}" alt="CLOSE">
				</button>

			<form action="{{Route('fpro.store')}}" method="POST" class="wrap-search-header flex-w p-l-15">
					@csrf @method('post')
					<input class="plh3" type="text" name="search" placeholder="Search...">
						<button type="submit" class="flex-c-m trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
						
				</form>
			</div>
		</div>
