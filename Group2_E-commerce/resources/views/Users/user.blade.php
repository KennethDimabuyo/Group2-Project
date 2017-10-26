@extends('layouts.app')

@section('title')
	User Login
@endsection

@section('content')
<body class="bg-wrap">
	<div class="bg-wrap">
		<div class="user-box">
			<img class="user" src="/img/UserLogo.png">
			<h2 class="kl-h21">Log In Here</h2>
			@if (count($errors) > 0)
				@foreach($errors->all() as $error)
					<div class="alert alert-danger">
						<p>{{ $error }} </p>
						<br>
					</div>
				@endforeach
			@endif
			<form method="post" action="/user/signin">
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••">
				<input type="submit" class="sign-in" name="" value="Sign In">
				<a href="#">Forget Password</a> <a href="/user/signup"><input class="sign-up" type="button" name="" value="Sign Up"></a>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection