@extends('layouts.app')

@section('content')
@include('layouts.errors')
<div class="container mt-4">
	<div class="row">
		<div class="offset-1 col-md-12">
			<h5 class="ml-2" style="color: purple;">
				<strong>{{ $rentBike->name }}</strong>
			</h5> 
		</div>
	</div>
	<div class="row">
		<div class="offset-1 col-md-5">
			<img class="img-fluid mt-4" 
				src="{{ asset('storage/image') }}/{{ $rentBike->image }}" alt="bike">
		</div>
		<div class="offset-1 col-md-4 text-justify">
			<h5  class="mt-3"><strong>{{ $rentBike->description }}</strong></h5>
			<h4 class="mt-3"><strong>${{ $rentBike->rent }}</strong></h4>
			<h6><strong>Color</strong> : {{ $rentBike->color }}</h6>
			<h6><strong>Discount</strong> : 0.00</h6>

		<form method="POST" action="{{ route('rent-bike-checkout', $rentBike->id) }}">
		@csrf
			<div class="form-group">
				<label for="startDate">Start date</label> <br />
					<input type="date" class="form-control" name="startDate" id="startDate">
			</div>

			<div class="form-group">
				<label for="endDate">End date</label> <br />
					<input type="date" class="form-control" name="endDate" id="endDate">
			</div>
				<button type="submit" class="btn btn-danger btn-block mt-4 badge-pill">Order for rent 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</button>
		</form>
		
		</div>
	</div>
</div>

@endsection