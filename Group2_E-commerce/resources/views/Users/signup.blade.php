@extends('layouts.app')

@section('title')
	User Login
@endsection

@section('content')
<body class="bg-wrap">
	<div class="bg-wrap">
		<div class="user-box">
			<img class="user" src="/img/UserLogo.png">
			<h2 class="kl-h21">Sign Up Here</h2>
			<form method="post" action="signup">
				@if (count($errors) > 0)
					@foreach($errors->all() as $error)
						<div class="alert alert-danger">
							<p>{{ $error }} </p>
							<br>
						</div>
					@endforeach
				@endif
				<p>Name</p>
				<input type="text" name="fname" placeholder="Enter FullName">
				<p>Email</p>
				<input type="text" name="email" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••">
				<input type="submit" class="sign-in" name="" value="Submit">
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection