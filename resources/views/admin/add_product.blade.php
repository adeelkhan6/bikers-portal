@extends('admin.admin_sidebar_app')

@section('admin_content')
@include('layouts.errors')
<div class="container mt-2">
	<div class="row">
		<div class="col-sm-12">
			<h6 style="color: purple;" class="">
				<strong>Add Product 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</strong>
			</h6>
		</div>
	</div>

	<form method="POST" action="{{ route('store-product') }}" class="mt-2" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="category" class="col-sm-2 col-form-label">Category</label>
			<div class="col-sm-6">

				<select class="form-control" name="product_category_id" id="category">

					@foreach ($productCategories as $productCategory)
					<option value="{{ $productCategory->id }}">{{ $productCategory->name }}</option>
					@endforeach

				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="subCategory" class="col-sm-2 col-form-label">Sub category</label>
			<div class="col-sm-6">

				<select class="form-control" name="sub_category_id" id="subCategory">

					@foreach ($subCategories as $subCategory)
					<option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
					@endforeach

				</select>
			</div>
			<div class="col-sm-4">

				<!-- Button to Open the Modal -->
				<button type="button" class="btn btn btn-link btn-light" 
					data-toggle="modal" data-target="#newSubCategory">
					<span><i class="fas fa-plus"></i>&nbsp;
					New sub category
					</span>
				</button>

			</div>
		</div>

		<div class="form-group row">
			<label for="name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="name" id="name" placeholder="product name">
			</div>
		</div>

		<div class="form-group row">
			<label for="model" class="col-sm-2 col-form-label">Model</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="model" id="model" placeholder="product model name">
			</div>
		</div>

		<div class="form-group row">
			<label for="description" class="col-sm-2 col-form-label">Description</label>
			<div class="col-sm-6">
				<textarea class="form-control" name="description" id="description" placeholder="product description">
				</textarea>
			</div>
		</div>

		<div class="form-group row">
			<label for="price" class="col-sm-2 col-form-label">Price</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="price" id="price" placeholder="product price">
			</div>
		</div>

		<div class="form-group row">
			<label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="quantity" id="quantity" placeholder="product quantity">
			</div>
		</div>

		<div class="form-group row">
			<label for="color" class="col-sm-2 col-form-label">Color</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="color" id="color" placeholder="product color">
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
					Add Product 
					&nbsp;<i class="fas fa-chevron-right"></i>
				</button>
			</div>
		</div>

	</form>
			
	<form method="POST" action="{{ route('add-sub-category') }}">
		@csrf
					<!-- The Modal -->
		<div class="modal fade" id="newSubCategory">
			<div class="modal-dialog">
				<div class="modal-content">
					
					 <!-- Modal Header -->
					 <div class="modal-header">
					 	<h4 class="modal-title">Add new sub category</h4>
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 </div>

					 <!-- Modal body -->
					 <div class="modal-body">
					 	<div class="form-group">
					 		<label for="category" class="col-form-label">Category:</label>

					 		<select class="form-control" name="category" id="category">

							@foreach ($productCategories as $productCategory)
							<option value="{{ $productCategory->id }}">{{ $productCategory->name }}</option>
							@endforeach
							{{-- <input type="hidden" value="{{ $productCategory->id }}"> --}}
							</select>
					 	</div>	
				 		<div class="form-group">
				 			<label for="name" class="col-form-label">Name:</label>
				 			<input type="text" class="form-control" name="name" id="name" 
				 				placeholder="enter sub category name">
				 		</div>
					 	
					 </div>

					 <!-- Modal footer -->
					 <div class="modal-footer">
					 	<button type="button" class="btn btn-danger badge-pill" data-dismiss="modal">Close</button>
					 	<button type="submit" class="btn btn-outline-primary badge-pill">
					 		<i class="fas fa-plus"></i>&nbsp;
					 		add sub category
					 	</button>
					 </div>
				</div>
			</div>
		</div>
	</form>	
</div>

@endsection