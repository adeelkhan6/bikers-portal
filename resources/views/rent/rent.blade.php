@extends('layouts.app')


@section('content')
<div style="background-image: url('{{ asset('images/bikerent.jpg') }}'); 
    background-size: cover; background-position: top top; height: 602px;">
	<div class="div" style="background: rgba(0,0,0,.5); width: ; height: 100%">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center text-white">
					<h1 class="mt-4" style="font-size: 40px;">WELCOME</h1>
					<h1>Quick and easy online <strong class="text-warning">bike rental</strong> platform!</h1>

					<form method="POST" action="{{ route('rent-bike-city') }}" 
						class="form-inline d-flex justify-content-center mt-3">
					@csrf
						<select class="form-control btn-lg" name="city_id" id="city" style="width: 200px;">

							@foreach ($cities as $city)

							<option value="{{ $city->id}}">{{ $city->name }}</option>

							@endforeach

						</select>

						<button type="submit" class="btn btn-danger btn-lg ml-2">
							Go for bike
						</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection