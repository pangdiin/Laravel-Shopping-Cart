@extends('layouts.master')

@section('title','Laravel Shopping Cart')

@section('content')

@foreach($products->chunk(3) as $productChunk)
<div class="row">
	@foreach($productChunk as $product)
	 <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="{{ $product->imagePath }}" alt="image sample">
	      <div class="caption">
	        <h3>{{ $product->title }}</h3>
	        <p class="description">{{ $product->description }}</p>
	        <div class="clearfix">
	        <div class="pull-left price">${{ $product->price }}</div>
	        	<a href="#" class="btn btn-default pull-right btn-success" role="button">Add to cart</a>	
	        </div>
	      </div>
	    </div>
	  </div>
	@endforeach
</div>
@endforeach


@endsection