<!DOCTYPE html>
<html>
	<head>
		<title>IMG HENLER</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('image-assistant/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('image-assistant/awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('image-assistant/style.css')}}">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="{{URL::asset('image-assistant/bootstrap/js/bootstrap.min.js')}}"></script>
	</head>
	<body>

		<header>
			<div class="head-blue">
				<div id="left-anchor">
				</div>
				<div id="right-save">
				</div>
			</div>
			<div class="waves">
			</div>
			<div class="head-white">
			</div>
		</header>
		<div class="wrapper">

		<!-- content -->
						@yield('content')
		<!-- content -->

		</div>
			<footer>
			<div class='banner-wrap'>
				<div class="banner">
					<img src="{{URL::asset('image-assistant/img/fban.png')}}" alt="..." class="img-all">
				</div>
			</div>
			<div class="wrapper">
				<div class="end-wrap">
					<div class="foot-lang">
						<p><i class="fa fa-copyright" aria-hidden="true"></i>2014 Sale With Me 
							<i class="fa fa-flag" aria-hidden="true"></i>
							<i class="fa fa-flag-checkered" aria-hidden="true"></i>
							<i class="fa fa-flag-o" aria-hidden="true"></i>
						</p>
					</div>
					<div class="foot-menu">
						<ul class="bot-menu live">
							<li>About Us</li>
							<li>Help & Support</li>
							<li>Privat Policy</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!--slide nav-->
		<div class="nav-wrap">
			<div id="close-nav" class="live">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
			<div class="titile-nav">
				Sale With Me
			</div>
			<div class="body-nav">
					<div class="item-nav">
						<a href="{{ url('/') }}">
							<div class="top-item-nav">
								<i class="fa fa-home" aria-hidden="true"></i>
							</div>
							<div class="bot-item-nav">
								Home
							</div>
						</a>
					</div>
					<div class="item-nav">
						<a href="{{ url('/profile') }}">
							<div class="top-item-nav">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div >
							<div class="bot-item-nav">
								Profile
							</div>
						</a>
					</div>
					<div class="item-nav">
						<a href="{{ url('/enumeration') }}">
							<div class="top-item-nav">
								<i class="fa fa-file-text-o" aria-hidden="true"></i>
							</div>
							<div class="bot-item-nav">
								Enumeration
							</div>
						</a>
					</div>
			</div>
		</div>

		<div id="show-nav" class="live">
			<i class="fa fa-bars" aria-hidden="true"></i>
		<div>


		<script src="{{URL::asset('image-assistant/script.js')}}"></script>
	</body>
</html>
