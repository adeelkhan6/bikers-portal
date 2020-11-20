@extends('admin.admin_sidebar_app')

@section('admin_content')
<div class="container mt-4">
	<div class="row">
		<div class="col-sm-12">
			<h6 style="color: purple;" class="">
				<strong>Edit Product 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</strong>
			</h6>
		</div>
	</div>

	<form method="POST" action="{{ route('update-product', $product->id) }}" class="mt-2" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
			</div>
		</div>

		<div class="form-group row">
			<label for="model" class="col-sm-2 col-form-label">Model</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="model" id="model" value="{{ $product->model }}">
			</div>
		</div>

		<div class="form-group row">
			<label for="description" class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-6">
				<textarea class="form-control" name="description" id="description">{{ $product->description }}</textarea>
			</div>
		</div>

		<div class="form-group row">
			<label for="price" class="col-sm-2 col-form-label">Price</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}">
			</div>
		</div>

		<div class="form-group row">
			<label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="quantity" id="quantity" value="{{ $product->quantity }}">
			</div>
		</div>

		<div class="form-group row">
			<label for="color" class="col-sm-2 col-form-label">Color</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="color" id="color" value="{{ $product->color }}">
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
				<button type="submit" class="btn btn-outline-primary btn-block badgvalue">
					Save Changes 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</button>
			</div>
		</div>

	</form>

</div>

@endsection
