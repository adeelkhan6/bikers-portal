@extends('layouts.app')

@section('content')
@include('layouts.errors')
	<div class="container mt-4">
		<div class="row">
			<div class="offset-1 col-md-12">
				<h5 class="ml-2" style="color: purple;">
					<strong>{{ $product->name }} - {{ $product->model }}</strong>
				</h5> 
			</div>
		</div>

		<div class="row">
			<div class="offset-1 col-md-5">
				<img class="img-fluid mt-4" 
					src="{{ asset('storage/image') }}/{{ $product->image }}" alt="productImage">
			</div>
			<div class="offset-1 col-md-4 text-justify">
				<h5  class="mt-3"><strong>{{ $product->description }}</strong></h5>
				<h4 class="mt-3"><strong>${{ $product->price }}</strong></h4>
				<h6><strong>Color</strong> : {{ $product->color }}</h6>
				<h6><strong>Discount</strong> : 0.00</h6>

	<form method="GET" action="{{ route('add-to-cart', $product->id) }}">
		@csrf
			<div class="form-group">
				<label for="quantity">Quantity</label> <br />
				<select name="quantity" id="quantity" 
					style="width: 50px; height: 25px; border-radius: 5px;">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
			</div>
				<button type="submit" name="buy" class="btn btn-outline-danger btn-block mt-4">Buy it now 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</button>
				<button type="submit" class="btn btn-primary btn-block mt-3">Add to cart</button>
	</form>
			
			</div>
		</div>
	</div>

@endsection