@extends('admin.admin_sidebar_app')


@section('admin_content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mt-3">
				<h4 style="color: purple;" class="">
					<strong>Rent Orders 
						&nbsp;<i class="far fa-clock"></i>
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
					        <th>User</th>
					        <th>Bike</th>
					        <th>days</th>
					        <th>Total Rent</th>
					        <th>Start Date</th>
					        <th>End Date</th>
					        <th>Status</th>
					        <th>Action</th>
					      </tr>
					    </thead>
					    <tbody>

					@foreach ($rentOrders as $rentOrder)
					
					      <tr class="table-primary">
					        <td>{{ $rentOrder->user->email }}</td>
					        <td>{{ $rentOrder->rentBike->name }}</td>
					        <td>{{ $rentOrder->days }}</td>
					        <td>${{ $rentOrder->total_rent }}</td>
					        <td>{{ $rentOrder->start_date }}</td>
					        <td>{{ $rentOrder->end_date }}</td>
					         <td>
					         	<span class="badge badge-pill 
	                      			{{ $rentOrder->status=='pending' ? 'badge-primary' : '' }}
	                      			{{ $rentOrder->status=='accepted' ? 'badge-success' : '' }}
	                      			{{ $rentOrder->status=='rejected' ? 'badge-danger' : '' }} ">		
	                      			{{ $rentOrder->status }}</span>
	                      	</td>
	                      	<td>
	                      		<a href="{{ route('accept-r-order', $rentOrder->id) }}" 
	                      			class="btn btn-outline-success">
	                      			<i class="fas fa-check"></i>
	                      		</a>  
	                      		<a href="{{ route('reject-r-order', $rentOrder->id) }}" 
	                      			class="btn btn-outline-danger">
	                      			<i class="fas fa-times"></i>
	                      		</a>
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