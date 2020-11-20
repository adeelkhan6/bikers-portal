@extends('admin.admin_sidebar_app')


@section('admin_content')
@include('layouts.errors')
<div class="container mt-2">
	<div class="row">
		<div class="col-sm-12">
			<h6 style="color: purple;" class="">
				<strong>Add Rent Bike 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</strong>
			</h6>
		</div>
	</div>
	
<form method="POST" action="{{ route('store-rent') }}" class="mt-2" enctype="multipart/form-data">
	@csrf
	<div class="form-group row">
		<label for="city" class="col-sm-2 col-form-label">City</label>
		<div class="col-sm-6">
			<select class="form-control" name="city_id" id="city">

				@foreach ($cities as $city)
				
				<option value="{{ $city->id }}">{{ $city->name }}</option>

				@endforeach

			</select>
		</div>
		<div class="col-sm-4">

			<!-- Button to Open the Modal -->
			<button type="button" class="btn btn btn-link btn-light" 
				data-toggle="modal" data-target="#newCity">
				<span><i class="fas fa-plus"></i>&nbsp;
				Add new city
				</span>
			</button>

		</div>
	</div>

	<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" name="name" id="name" placeholder="rent bike name">
		</div>
	</div>

	<div class="form-group row">
		<label for="description" class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-6">
			<textarea class="form-control" name="description" id="description" placeholder="rent bike description">
			</textarea>
		</div>
	</div>

	<div class="form-group row">
		<label for="rent" class="col-sm-2 col-form-label">Rent</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" name="rent" id="rent" placeholder="rent for bike">
		</div>
	</div>

	<div class="form-group row">
		<label for="color" class="col-sm-2 col-label-form">Color</label>
		<div class="col-sm-6">
			<input type="text" class="form-control" name="color" id="color" placeholder="rent bike color">
		</div>	
	</div>

	<div class="form-group row">
		<label for="image" class="col-sm-2 col-from-label">Image</label>
		<div class="col-sm-6">
			<input type="file" class="form-control-file" name="image" id="image">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label"></label>
		<div class="col-sm-6">
			<button type="submit" class="btn btn-outline-primary btn-block badge-pill">
				Add Rent Bike 
				&nbsp;<i class="fas fa-chevron-right"></i>
			</button>
		</div>
	</div>
</form>

<form method="POST" action="{{ route('store-city') }}" enctype="multipart/form-data">
		@csrf
					<!-- The Modal -->
		<div class="modal fade" id="newCity">
			<div class="modal-dialog">
				<div class="modal-content">
					
					 <!-- Modal Header -->
					 <div class="modal-header">
					 	<h4 class="modal-title">Add new city</h4>
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 </div>

					 <!-- Modal body -->
					 <div class="modal-body">
					 	<div class="form-group">
					 		<label for="city" class="col-form-label">City:</label>
							<input type="text" class="form-control" name="name" id="city" placeholder="bike city">
					 	</div>	
				 		<div class="form-group">
				 			<label for="map" class="col-form-label">Map:</label>
				 			<input type="text" class="form-control" name="map" id="map" 
				 				placeholder="paste the link of map">
				 		</div>
				 		<div class="form-group">
				 			<label for="image" class="col-form-label">Image:</label>
				 			<input type="file" class="form-control-file" name="image" id="image">
				 		</div>
					 	
					 </div>

					 <!-- Modal footer -->
					 <div class="modal-footer">
					 	<button type="button" class="btn btn-danger badge-pill" data-dismiss="modal">Close</button>
					 	<button type="submit" class="btn btn-outline-primary badge-pill">
					 		<i class="fas fa-plus"></i>&nbsp;
					 		add new city
					 	</button>
					 </div>
				</div>
			</div>
		</div>
	</form>	
</div>

@endsection