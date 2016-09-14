@extends('layouts.master')

@section('title','Shopping Cart')

@section('content')

	@if (Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">{{ $product['qty']}}</span>
							<strong>{{ $product['item']['title'] }}</strong>
							<span class="label label-success">
								{{ $product['price']}}
							</span>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Active <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="{{ route('product.reduceByOne',['id'=> $product['item']['id']]) }}">Remove by 1</a></li>
							      <li><a href="{{ route('product.remove',['id'=> $product['item']['id']]) }}">Remove All</a></li>
							    </ul>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<strong>Total: {{ $totalPrice }}</strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>No items to Cart!</h2>
			</div>
		</div>
	@endif
@endsection