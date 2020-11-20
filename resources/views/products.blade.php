@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-4 mt-4">

				@foreach ($products as $product)
				
				<a href="{{ route('product-detail', $product->id) }}">
					<img class="img-fluid" src="{{ asset('storage/image') }}/{{ $product->image }}" alt="">
					<p class="ml-2" style="color: purple;">
					<strong>{{ $product->name }} - {{ $product->model }}</strong>
					</p>
				</a>
				

				@endforeach

			</div>

		</div>
	</div>

@endsection