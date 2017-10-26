<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>

	<!-- Navbar -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/link.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}">


</head>
<body onload="setup()">

<div class="cbp-af-header">
	<div class="cbp-af-inner center">
		<nav class="cl-effect-21">
			<a href="/">Home</a>
			<a href="/products">Products</a>
			<a href="/cart">Cart</a>
			<span class="large-margin"></span>
			@if (Auth::guest())
				<a href="/user/signin" id="signin"> Sign In </a>
				@else
				<a href="/user/logout">	Logout </a>
				@endif
			<a href="/cons">Consultation Room</div></a>

			<div class="center">
				<img class="logo" src="img/logo.png">
			</div>
		</nav>
	</div>
</div>

<div class="content">
@yield('content')
</div>

<!-- Nav Bar JS -->

<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.min.js"></script>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/function.js" type="text/javascript"></script>

</body>
</html>