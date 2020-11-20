@extends('admin.admin_sidebar_app')


@section('admin_content')
@include('layouts.errors')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mt-3">
				<h4 style="color: purple;" class="">
					<strong>Rent Bikes 
						&nbsp;<i class="fas fa-bicycle"></i>
					</strong>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive">
					<table class="table table-hover mt-3">
					    <thead class="thead-dark">
					      <tr>
					        <th>Name</th>
					        <th>Rent</th>
					        <th>Color</th>
					        <th>Created_at</th>
					        <th>Updated_at</th>
					        <th>Action</th>
					      </tr>
					    </thead>
					    <tbody>

					    @foreach ($rentBikes as $rentBike)
					    
					      <tr class="table-primary">
					        <td>{{ $rentBike->name }}</td>
					        <td>${{ $rentBike->rent }}</td>
					        <td>{{ $rentBike->color }}</td>
					        <td>{{ $rentBike->created_at }}</td>
					        <td>{{ $rentBike->updated_at }}</td>
					        <td>
					        	<a href="{{ route('edit-rent-bike', $rentBike->id) }}" class="btn btn-primary">
					        		<i class="fas fa-edit"></i>
					        	</a>

					        <form method="POST" action="{{ route('delete-rent-bike', $rentBike->id) }}" style="display: inline;">
					        	@csrf
					        	@method('DELETE')
					        	<button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>
					        	</button>

					        </form>

					        </td>
					      </tr>

					    @endforeach

					    </tbody>
			  		</table>
				</div>
				
			</div>
		</div>
	</div>


@endsection