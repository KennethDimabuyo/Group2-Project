@extends('layouts.app')

@section('title')
	AlterMed
@stop

@section('content')

	<header class="bg-wrapper">
		<div class="lion"></div>
		<div class="logo1"></div>
	</header>

	<div id="top-sale">
		@include('partial.carousel')
	</div>

	<div class="kl-container">
		<h2 class="kl-h2">Medicine Store</h2>

		<p>This is a e-commerce site where we promote your well being with our Alternative Medicine. We ensure the quality of this medicine because its prescribe by the trusted doctors in the Philippines. Remember were here to support your health.</p>

		<hr>

		<div class="item-pics">
			<div class="img-row">
				@foreach($items as $item)
					<figure class="columns" id="k{{ $item->id }}">
						<img class="img-responsive kl" src="/img/{{ $item->photo }}">
						<div class="text-header kl">
							<h3 class="kl-h3">{{ $item->name }} - <strong>P{{ $item->price }}</strong></h3>
						</div>
						<div><a href="/addToCart/{{ $item->id }}"><input class="addToCart" type="button" name="button" value="Add to Cart"></a></div>
					</figure>
				@endforeach
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
	</script>

@stop