@extends('admin.admin_sidebar_app')


@section('admin_content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mt-3">
				<h4 style="color: purple;" class="">
					<strong>Users 
						&nbsp;<i class="fas fa-users"></i>
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
					        <th>Email</th>
					        <th>Gender</th>
					        <th>Contact</th>
					        <th>Status</th>
					        <th>Created_at</th>
					        <th>Updated_at</th>
					        <th>Action</th>
					      </tr>
					    </thead>
					    <tbody>

					    @foreach ($users as $user)
					    
					      <tr class="table-info">
					        <td>{{ $user->name }}</td>
					        <td>{{ $user->email }}</td>
					        <td>{{ $user->gender }}</td>
					        <td>{{ $user->contact }}</td>
					        <td>
					        	<span class="badge badge-pill 

	                      			{{ $user->status=='active' ? 'badge-success' : '' }}
	                      			{{ $user->status=='blocked' ? 'badge-danger' : '' }} ">		
	                      			{{ $user->status }}</span>
					        </td>
					        <td>{{ $user->created_at }}</td>
					        <td>{{ $user->updated_at }}</td>
					        <td>
					        	<a href="{{ route('unblock-user', $user->id) }}" class="btn btn-primary">
					        		<i class="fas fa-user-check"></i>
					        	</a>
					        	<a href="{{ route('block-user', $user->id) }}" class="btn btn-outline-danger"><i class="fas fa-user-lock"></i>
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