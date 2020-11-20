@extends('layouts.app')


@section('content')
@include('layouts.errors')
	<div class="container mt-4">
		<div class="row">
			<div class="offset-4 col-sm-7">
				<h2 style="color: purple;"><i class="far fa-user"></i> &nbsp;User Profile</h2>
			</div>
		</div>
	</div>
	<div class="container mt-4">
		<div class="row">
			<div class="offset-2 col-sm-8">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a href="#home" class="nav-link active" data-toggle="tab">Home</a>
					</li>

				@if (auth()->user()->role->name === 'customer')
				
					<li class="nav-item">
						<a href="#orders" class="nav-link" data-toggle="tab">Orders</a>
					</li>
					<li class="nav-item">
						<a href="#rentOrders" class="nav-link" data-toggle="tab">Rent Orders</a>
					</li>
				@endif

					<li class="nav-item">
						<a href="#profile" class="nav-link" data-toggle="tab">Profile</a>
					</li>
					<li class="nav-item">
						<a href="#changePassword" class="nav-link" data-toggle="tab">Change Password</a>
					</li>
					<li class="nav-item">
						<a href="#changeProfile" class="nav-link" data-toggle="tab">Change Profile</a>
					</li>
				</ul>

				<div class="tab-content mt-4">
					<div class="tab-pane fade show active" id="home">
						<h3>User</h3>
						<p class="text-justify">User profile is gave the facility to user to manage their profiles. User can check his/her orders/rent orders and their status. User can see his/her profile and can modify our profiles by clicking change profile tab like change in address or contact number etc. User can also changer his/her password by clicking change password tab.</p>
					</div>

					<div class="tab-pane fade" id="orders">
						<h3>Orders</h3>
							<div class="table-responsive">
								<table class="table table-hover mt-3">
								    <thead class="thead-dark">
								      <tr>
								        <th>Total Payment</th>
								        <th>Order Date</th>
								        <th>Status</th>
								        <th>View Detail</th>
								      </tr>
								    </thead>
					    			<tbody>

					    @foreach ($orders as $order)
					    	
								      <tr class="table-primary">
								        <td>${{ $order->total_price }}</td>
								        <td>{{ $order->created_at }}</td>
								        <td><span class="badge badge-pill 
				                      		{{$order->status=='pending' ? 'badge-primary' : ''}}
				                      		{{$order->status=='accepted' ? 'badge-success' : ''}}
				                      		{{$order->status=='rejected' ? 'badge-danger' : ''}} ">	
				                      		{{ $order->status }}</span>
				                      	</td>
								        <td>
								        	<a target="_blank" href="{{ route('order-detail', $order->id) }}">
				                        		View
				                      		</a>
								        </td>
								      </tr>

					    @endforeach

					    			</tbody>
			  					</table>
						</div>
				
					</div>

					<div class="tab-pane fade" id="rentOrders">
						<h3>Rent Orders</h3>
							<div class="table-responsive">
								<table class="table table-hover mt-3">
								    <thead class="thead-dark">
								      <tr>
								        <th>Bike</th>
								        <th>Total Rent</th>
								        <th>Start Date</th>
								        <th>End Date</th>
								        <th>Days</th>
								        <th>Status</th>
								      </tr>
								    </thead>
					    			<tbody>

					    @foreach ($rentOrders as $rentOrder)
					    	
								      <tr class="table-primary">
								        <td>{{ $rentOrder->rentBike->name }}</td>
								        <td>${{ $rentOrder->total_rent }}</td>
								        <td>{{ $rentOrder->start_date }}</td>
								        <td>{{ $rentOrder->end_date }}</td>
								        <td>{{ $rentOrder->days }}days</td>
								        <td><span class="badge badge-pill 
				                      		{{$order->status=='pending' ? 'badge-primary' : ''}}
				                      		{{$order->status=='accepted' ? 'badge-success' : ''}}
				                      		{{$order->status=='rejected' ? 'badge-danger' : ''}} ">	
				                      		{{ $order->status }}</span>
				                      	</td>
								      </tr>

					    @endforeach

					    			</tbody>
			  					</table>
						</div>
				
					</div>

					<div class="tab-pane fade" id="profile">
						<h3 class="ml-2">Profile</h3>
						<div class="card border-success mb-3" style="max-width: 18rem;">
							<div class="card-header bg-transparent border-success">Profile</div>
								<div class="card-body">
									<p>Name: {{ auth()->user()->name }}</p>
									<p>Email: {{ auth()->user()->email }}</p>
									<p>Gender: {{ auth()->user()->gender }}</p>
									<p>Phone: {{ auth()->user()->contact }}</p>
								</div>
						</div>
					</div>

					<div class="tab-pane fade" id="changePassword">
						<h3 class="ml-2">Change Password</h3>
						<div class="card border-success mb-3" style="max-width: 18rem;">
							<div class="card-header bg-transparent border-success">Profile</div>
								<div class="card-body">
									<p>Name: {{ auth()->user()->name }}</p>
									<p>Email: {{ auth()->user()->email }}</p>
									<p>Gender: {{ auth()->user()->gender }}</p>
									<p>Phone: {{ auth()->user()->contact }}</p>
								</div>
								<div class="card-footer bg-transparent border-success">
									<button class="btn btn-outline-primary badge-pill float-right" 
										data-toggle="modal" data-target="#changePass">
										Change Password
									</button>
								</div>
						</div>
					</div>

					<div class="tab-pane fade" id="changeProfile">
						<h3 class="ml-2">Change Profile</h3>
						<div class="card border-success mb-3" style="max-width: 18rem;">
							<div class="card-header bg-transparent border-success">Change Profile</div>
								<div class="card-body">
									<p>Name: {{ auth()->user()->name }}</p>
									<p>Email: {{ auth()->user()->email }}</p>
									<p>Gender: {{ auth()->user()->gender }}</p>
									<p>Phone: {{ auth()->user()->contact }}</p>
								</div>
								<div class="card-footer bg-transparent border-success">
									<button class="btn btn-outline-primary badge-pill float-right" 
										data-toggle="modal" data-target="#changePro">
										Change Profile
									</button>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Change Password Model -->
		<form method="POST" action="{{ route('update-password') }}">
			@csrf
						<!-- The Modal -->
			<div class="modal fade" id="changePass">
				<div class="modal-dialog">
					<div class="modal-content">
						
						 <!-- Modal Header -->
						 <div class="modal-header">
						 	<h4 class="modal-title">Changing Password</h4>
						 	<button type="button" class="close" data-dismiss="modal">&times;</button>
						 </div>

						 <!-- Modal body -->
						 <div class="modal-body">
					 		<div class="form-group">
					 			<label for="oldPass" class="col-form-label">Old Password:</label>
					 			<input type="password" class="form-control" name="old_password" id="oldPass" 
					 				placeholder="user's old password">
					 		</div>

					 		<div class="form-group">
					 			<label for="newPass" class="col-form-label">New Password:</label>
					 			<input type="password" class="form-control" name="password" id="newPass" 
					 				placeholder="user's new password">
					 		</div>

					 		<div class="form-group">
					 			<label for="confirmPass" class="col-form-label">Confirm Password:</label>
					 			<input type="password" class="form-control" 
					 				name="password_confirmation" id="confirmPass" 
					 				placeholder="user's new password confirmation">
					 		</div>
						 	
						 </div>

						 <!-- Modal footer -->
						 <div class="modal-footer">
						 	<button type="button" class="btn btn-danger badge-pill" data-dismiss="modal">Close</button>
						 	<button type="submit" class="btn btn-outline-primary badge-pill">
						 		Save Changes
						 	</button>
						 </div>
					</div>
				</div>
			</div>
		</form>	


		<!-- Change Profile Model -->
		<form method="POST" action="{{ route('update-profile') }}">
		@csrf
					<!-- The Modal -->
		<div class="modal fade" id="changePro">
			<div class="modal-dialog">
				<div class="modal-content">
					
					 <!-- Modal Header -->
					 <div class="modal-header">
					 	<h4 class="modal-title">Changinging Profile</h4>
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 </div>

					 <!-- Modal body -->
					 <div class="modal-body">
				 		<div class="form-group">
				 			<label for="name" class="col-form-label">Name:</label>
				 			<input type="text" class="form-control" name="name" id="name" 
				 				placeholder="user's name">
				 		</div>

				 		<div class="form-group">
				 			<label for="contact" class="col-form-label">Contact:</label>
				 			<input type="text" class="form-control" name="contact" id="contact" 
				 				placeholder="user's contact #">
				 		</div>
					 	
					 </div>

					 <!-- Modal footer -->
					 <div class="modal-footer">
					 	<button type="button" class="btn btn-danger badge-pill" data-dismiss="modal">Close</button>
					 	<button type="submit" class="btn btn-outline-primary badge-pill">
					 		Save Changes
					 	</button>
					 </div>
				</div>
			</div>
		</div>
	</form>
	</div>

@endsection