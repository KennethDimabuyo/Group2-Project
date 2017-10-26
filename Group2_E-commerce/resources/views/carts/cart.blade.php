@extends('layouts.app')

@section('title')
	Cart
@stop

@section('content')

	<style type="text/css">
		body{	
			margin: 0;
			background-color: #2a363b;
			color: #ffcc00;
		}
	</style>

	<table class="table table-striped kl-table">
		<tr>
			<td>Photo</td>
			<td>Name</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Undo</td>
		</tr>
		@foreach ($items as $item)
		<tr>
			<td><img src="/img/{{ $item->photo }}" class="img-hover" style="width: 130px; height: 100px; position: relative;"></td>
			<td>{{ $item->name }}</td>
			<td><input type="number" name="quantity" id="k{{ $item->id-1 }}" placeholder="{{ $item->quantity }}" class="kl-qty" oninput="addQuantity({{$item->id - 1}})"></td>
			<td>{{ $item->price }}</td>
			<td><a href="/delete/{{ $item->product_id }}"><div class="btn-danger"><span>Undo</span></div></a></td>
		</tr>
		@endforeach
	</table>

	<div id="cal-wrap">
			<h3>Total Amount: <span id="cal"></span></h3>
	</div>


	<script type="text/javascript">
		var z = 0;
		var i = 0;
		var newQty = 0;
		var price = new Array();
		var priceb = new Array();
		var qty = new Array();
		var qty1;
		var addQty = 0;

		function setup() {
			@foreach ($items as $item)
				price[i] = {{ $item->price }}
				var y = price[i];
				priceb[i] = y;
				z += y;

				i++
			@endforeach
			document.getElementById('cal').innerHTML = z

			i = 0;

			@foreach ($items as $item)
				qty[i] = {{ $item->quantity }}
				i++
			@endforeach
		}

		function newCalculate(id) {
			price[id] = priceb[id];
			price[id] = price[id] * qty[id];

			calculate();
		}

		function calculate() {
			z = 0;
			for (i = 0; i <= price.length-1; i++){
				var y = price[i];
				z += y;
			}
			document.getElementById('cal').innerHTML = z;
		}

		function addQuantity(id) {
			var x = 0;
			qty[id] = 0;
			x = document.getElementById('k'+id).value;
			qty[id] = x;

			newCalculate(id);
		}
	</script>
@stop