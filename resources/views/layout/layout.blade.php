
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	@yield('meta')
	

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{ asset('css/superfish.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
	<!-- Date Picker -->
	<!-- <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css')}}"> -->
	<!-- CS Select -->
	<link rel="stylesheet" href="{{ asset('css/cs-select.css')}}">
	<link rel="stylesheet" href="{{ asset('css/cs-skin-border.css')}}">
	
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">


	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
				<h1 id="fh5co-logo"><a href="{{ route('trangchu')}}"><img src="{{ asset('/images/logo-ocean-fianl-22202.png')}}"/> </a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="{{ request()->is('gioi-thieu') ? 'active' : '' }}"><a href="{{ route('gioithieu')}}">Giới Thiệu</a></li>
							<li class="{{ request()->is('danh-muc/dau-tu-dinh-cu-cyprus') ? 'active' : '' }} {{ request()->is('bai-viet/dau-tu-dinh-cu-cyprus/*') ? 'active' : '' }}"><a href="{{route('danhmuc','dau-tu-dinh-cu-cyprus')}}">Đầu tư định cư Cyprus</a></li>
							<li class="{{ request()->is('danh-muc/mua-quoc-tich') ? 'active' : '' }} {{ request()->is('bai-viet/mua-quoc-tich/*') ? 'active' : '' }}"><a href="{{route('danhmuc','mua-quoc-tich')}}">Mua quốc tịch</a></li>
							<li class="{{ request()->is('danh-muc/dinh-cu-chau-au') ? 'active' : '' }} {{ request()->is('bai-viet/dinh-cu-chau-au/*') ? 'active' : '' }}"><a href="{{route('danhmuc','dinh-cu-chau-au')}}">Định cư châu Âu</a></li>
							<li class="{{ request()->is('danh-muc/goc-tu-van') ? 'active' : '' }} {{ request()->is('bai-viet/goc-tu-van/*') ? 'active' : '' }}"><a href="{{route('danhmuc','goc-tu-van')}}">Góc tư vấn</a></li>
							<li class="{{ request()->is('lien-he') ? 'active' : '' }}"><a href="{{ route('lienhe')}}">Liên hệ</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
		@yield('content')
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Giới thiệu</h3>
							<p>Ocean Dragon là công ty số 1 về đầu tư định cư Cyprus.<br>Là công ty duy nhất tại Việt Nam có trụ sở đặt tại Cộng hòa Cyprus<br>Ocean Dragon mang đến cho khách hàng dịch vụ chăm sóc hỗ trợ khách hàng tốt nhất không chỉ trước, trong mà cả sau khi định cư.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Đầu tư <br>định cư Cyprus</h3>
							<ul>
								<li><a href="#">Manila flights</a></li>
								<li><a href="#">Dubai flights</a></li>
								<li><a href="#">Bangkok flights</a></li>
								<li><a href="#">Tokyo Flight</a></li>
								<li><a href="#">New York Flights</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Mua quốc tịch</h3>
							<ul>
								<li><a href="#">Boracay Hotel</a></li>
								<li><a href="#">Dubai Hotel</a></li>
								<li><a href="#">Singapore Hotel</a></li>
								<li><a href="#">Manila Hotel</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Định cư châu Âu</h3>
							<ul>
								<li><a href="#">Beaches</a></li>
								<li><a href="#">Family Travel</a></li>
								<li><a href="#">Budget Travel</a></li>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Honeymoon and Romance</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Góc tư vấn</h3>
							<ul>
								<li><a href="#">Boracay Beach</a></li>
								<li><a href="#">Dubai</a></li>
								<li><a href="#">Singapore</a></li>
								<li><a href="#">Hongkong</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Liên hệ</h3>
							<ul>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Fare Flights</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->

	@yield('script')
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('js/sticky.js')}}"></script>

	<!-- Stellar -->
	<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Superfish -->
	<script src="{{ asset('js/hoverIntent.js')}}"></script>
	<script src="{{ asset('js/superfish.js')}}"></script>
	<!-- Magnific Popup -->
	<!-- <script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script> -->
	<!-- Date Picker -->
	<script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>
	<!-- CS Select -->
	<!-- <script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script> -->
	
	<!-- Main JS -->
	<script src="{{ asset('js/main.js')}}"></script>

	</body>
</html>

