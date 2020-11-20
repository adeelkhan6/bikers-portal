@extends('layouts.app')


@section('content')
	<div style="background-image: url('{{ asset('storage/image') }}/{{ $city->image }}'); 
         background-size: cover; 
         background-position: center center; 
         height: 602px;">

	<div class="div" style="background: rgba(0,0,0,.5); width: ; height: 100%">
		<div class="container">
			<div class="row">
				

				@foreach ($rentBikes as $rentBike)
        
			        <div class="col-md-4" style="margin-top: 130px;">
			            <div class="product-info">
			                <a class="nav-link" href="{{ route('rent-bike-detail', $rentBike->id) }}">
			                    <img class="img-fluid" src="{{ asset('storage/image') }}/{{ $rentBike->image }}" alt="bike">
			                </a>
			            </div>
			                    <p class="mt-3 text-justify text-white text-center">${{ $rentBike->rent }} / day</p>
			        </div>

        		@endforeach

				
			</div>
		</div>
	</div>
</div>

@endsection