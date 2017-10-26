@extends('layouts.app')

@section('title')
	Products
@stop

@section('content')
	
	<div id="top-sale">
		@include('partial.carousel')
	</div>

	<div class="product-wrap kl-container">
		<h2>Products</h3>
		<hr>	

		<!-- <div id="items__list">
			<img src="img/juice.png" class="img-responsive">
			<h3> Name of the Product </h3>
			<h4> sub info of the product </h4>
		</div>

		<div id="items__list" >
			<img src="img/pabango.png" class="img-responsive">
			<h3> Name of the Product </h3>
			<h4> sub info of the product </h4>
		</div>

		<div id="items__list">
			<img src="img/gamot1.png" class="img-responsive">
			<h3> Name of the Product </h3>
			<h4> sub info of the product </h4>
		</div>

		<div id="items__list">
			<img src="img/oil2.png" class="img-responsive">
			<h3> Name of the Product </h3>
			<h4> sub info of the product </h4>
		</div>


		<div id="items__list">
			<img src="img/juice.png" class="img-responsive">
			<h3> Name of the Product </h3>
			<h4> sub info of the product </h4>
		</div>

		<div id="items__list" >
			<img src="img/pabango.png" class="img-responsive">
			<h3> Name of the Product </h3>
			<h4> sub info of the product </h4>
		</div>

		<div id="items__list">
			<img src="img/gamot1.png" class="img-responsive">
			<h3> Name of the Product </h3>
			<h4> sub info of the product </h4>
		</div>

		<div id="items__list">
			<img src="img/oil2.png" class="img-responsive">
			<h3> Name of the Product </h3>
			<h4> sub info of the product </h4>
		</div> -->
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

@stop