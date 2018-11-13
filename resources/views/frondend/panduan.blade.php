<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.mySlides {display:none;top:70px}
	</style>
	<link rel="icon" type="image/png" href="{{asset('cozastore/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('cozastore/images/icons/log.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('cozastore/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/imgproduk.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition" background="{{asset('cozastore/images/kota1.jpg')}}">

	<!-- Header -->
	<header>
		<div class="container-menu-desktop">
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="{{route('Inupoi.Tutorial')}}" class="flex-c-m trans-04 p-lr-25">
							Tutorial
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
		</div>
	</header>

	<!-- Slider -->
	<div class="w3-content w3-display-container">
	
	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/1.jpeg')}}" style="width:100%">
	  <div class="w3-display-middle w3-large w3-container w3-padding-16">
	    <h3><b><font color="black">Make sure you have logged in</font></b></h3>
	  </div>
	</div>
	
	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/3.jpeg')}}" style="width:100%">
	  <div class="w3-display-middle w3-large w3-container w3-padding-16">
	    <h3><b><font color="black">Feature Favorite</font></b></h3>
	    <h3><b><font color="black">To Mark The Items You Favor</font></b></h3>
	  </div>
	</div>
	
	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/2.jpeg')}}" style="width:100%">
	  <div class="w3-display-middle w3-large w3-container w3-padding-16">
	    <h3><b><font color="black">View Details of the Product</font></b></h3>
	  </div>
	</div>
	
	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/4.jpeg')}}" style="width:100%">
	  <div class="w3-display-bottomright w3-large w3-container w3-padding-16">
	    <h3><b><font color="black">Choose Suitable Size</font></b></h3>
	  </div>
	</div>
	
	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/5.jpeg')}}" style="width:100%">
	  <div class="w3-display-topleft w3-large w3-container w3-padding-16" style="top:50px;">
	    <h3><b><font color="black">If You Want To Provide Reviews</font></b></h3>
	    <h3><b><font color="black">Against the product</font></b></h3>
	  </div>
	</div>

	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/6.jpeg')}}" style="width:100%">
	  <div class="w3-display-topright w3-large w3-container w3-padding-16" style="top:60px;">
	    <h3><b><font color="black">Push ADD TO CART</font></b></h3>
	    <h3><b><font color="black">To Add Products to The Cart</font></b></h3>
	  </div>
	</div>

	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/7.jpeg')}}" style="width:100%">
	  <div class="w3-display-topleft w3-large w3-container w3-padding-16">
	    <h3><b><font color="white">Push Check Out To</font></b></h3>
	    <h3><b><font color="white">Transaction Process</font></b></h3>
	  </div>
	</div>

	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/9.jpeg')}}" style="width:100%">
	  <div class="w3-display-topleft w3-large w3-container w3-padding-16" style="top:150px;left:70px;">
	    <h6><b><font color="black">1</font></b></h6>
	  </div>
	  <div class="w3-display-topleft w3-large w3-container w3-padding-16" style="top:165px;left:325px;">
	    <h6><b><font color="black">2</font></b></h6>
	  </div>
	  <div class="w3-display-topleft w3-large w3-container w3-padding-16" style="top:175px;left:485px;">
	    <h6><b><font color="black">3</font></b></h6>
	  </div>
	  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16" style="bottom:90px">
	    <h5><b><font color="black">1. Used To Delete Products</font></b></h5>
	    <h5><b><font color="black">2. Change The Number Of Products</font></b></h5>
	    <h5><b><font color="black">3. BButton To Approve The Number Of Products</font></b></h5>
	  </div>
	</div>

	<div class="w3-display-container mySlides">
	  <img src="{{asset('cozastore/images/10.jpeg')}}" style="width:100%">
	  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16" style="bottom: 90px;left: 20px;">
	    <h3><b><font color="black">Last Payment Process</font></b></h3>
	  </div>
	  <div class="w3-display-bottomright w3-large w3-container w3-padding-16">
	    <a href="{{route('Inupoi.index')}}" class="btn btn-lg btn-primary"><i class="fa fa-home"></i> HOME </a>
	  </div>
	</div>
	
	<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
	<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
	
	</div>

<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('cozastore/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('cozastore/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('cozastore/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/sweetalert/sweetalert.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});

		
	</script>
	<script>
	var slideIndex = 1;
	showDivs(slideIndex);
	
	function plusDivs(n) {
	  showDivs(slideIndex += n);
	}
	
	function showDivs(n) {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  if (n > x.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = x.length}
	  for (i = 0; i < x.length; i++) {
	     x[i].style.display = "none";  
	  }
	  x[slideIndex-1].style.display = "block";  
	}
	</script>
<!--===============================================================================================-->
	<script src="{{asset('cozastore/js/main.js')}}"></script>


	 {{-- onesignal --}}
	 <link rel="manifest" href="/manifest.json" />
	 <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	 <script>
	   var OneSignal = window.OneSignal || [];
	   OneSignal.push(function() {
		 OneSignal.init({
		   appId: "48fefe3b-d8be-42be-b43a-2ca3832e0f43",
		   autoRegister: false,
		   notifyButton: {
			 enable: true,
		   },
		   allowLocalhostAsSecureOrigin: true,
		 });
	   });
	 </script>
	 {{-- end onesignal --}}

</body>
</html>
