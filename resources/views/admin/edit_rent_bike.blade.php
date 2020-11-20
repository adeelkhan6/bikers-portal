@extends('admin.admin_sidebar_app')

@section('admin_content')
@include('layouts.errors')
<div class="container mt-2">
	<div class="row">
		<div class="col-sm-12">
			<h6 style="color: purple;" class="">
				<strong>Edit Rent Bike 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</strong>
			</h6>
		</div>
	</div>

	<form method="POST" action="{{ route('update-rent-bike', $rentBike->id) }}" class="mt-2" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="name" id="name" value="{{ $rentBike->name }}">
			</div>
		</div>

		<div class="form-group row">
			<label for="description" class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-6">
				<textarea class="form-control" name="description" id="description">{{ $rentBike->description }}</textarea>
			</div>
		</div>

		<div class="form-group row">
			<label for="rent" class="col-sm-2 col-form-label">Rent</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="rent" id="rent" value="{{ $rentBike->rent }}">
			</div>
		</div>


		<div class="form-group row">
			<label for="color" class="col-sm-2 col-form-label">Color</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="color" id="color" value="{{ $rentBike->color }}">
			</div>
		</div>

		<div class="form-group row">
			<label for="image" class="col-sm-2 col-form-label">Image</label>
			<div class="col-sm-6">
				<input type="file" class="form-control-file" name="image" id="image">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label"></label>
			<div class="col-sm-6">
				<button type="submit" class="btn btn-outline-primary btn-block badge-pill">
					Save Changes 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</button>
			</div>
		</div>

	</form>

</div>

@endsection