@extends('layouts.app')


@section('content')
@include('layouts.errors')

@php

	$total = 0

@endphp

	<div class="container mt-3">
		<div class="row">
			<div class="col-sm-12">
				<h4 style="color: purple">
					<strong>
						Shopping Cart 
						&nbsp;<i class="fas fa-arrow-down"></i>
					</strong>
				</h4>
			</div>
		</div>
	</div>

	<div class="container mt-1">
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-12">

					@if (session('cart'))
						
						<div class="table-responsive">
							<table class="table table-hover">
							    <thead>
							      <tr>
							        <th>Image</th>
							        <th>Name</th>
							        <th>Price</th>
							        <th>Quantity</th>
							        <th>Color</th>
							        <th>Remove</th>
							      </tr>
							    </thead>
							    <tbody>

							@foreach (session('cart') as $id => $product)
							
							      <tr>
							        <td>
							        	<img src="{{ asset('storage/image') }}/{{ $product['image'] }}" 
							        		alt="photo" style="width: 90px;">
							        </td>
							        <td>{{ $product['name'] }}</td>
							        <td>${{ $product['price'] }}</td>
							        <td>{{ $product['quantity'] }}</td>
							        <td>{{ $product['color'] }}</td>
							        <td>
							        	<a href="{{ route('delete-cart-item', $id) }}" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
							        </td>
							      </tr>
							@php
							    
							    $total += $product['price'] * $product['quantity'] 


							@endphp

							@endforeach

							@php
							    
							    session()->put('total', $total)
								
							@endphp

							    </tbody>


					  		</table>
						</div>

					@endif

					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card border-success mb-3" style="max-width: 18rem;">
					<div class="card-body">
						<a href="{{ route('checkout') }}" class="btn btn-danger btn-block">
							Checkout
						</a>
						<h6 class="mt-3">Subtotal<span class="float-right">${{ $total }}</span></h6>
						<h6>Shipping<span class="float-right">0.00</span></h6>
						<h6>Discount<span class="float-right">0.00</span></h6> <hr />
						<h4>Total<span class="float-right">${{ $total }}</span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection