@extends('admin.admin_sidebar_app')


@section('admin_content')
@include('layouts.errors')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mt-3">
				<h4 style="color: purple;" class="">
					<strong>Orders 
						&nbsp;<i class="far fa-file"></i>
					</strong>
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive">
					 <table class="table table-hover">
			          <thead class="table-dark">
			            <tr>
			              <th>Order_id</th>
			              <th>User</th>
			              <th>Status</th>
			              <th>Order date</th>
			              <th>Details</th>
			              <th>Action</th>
			            </tr>
			          </thead>

            			<tbody>

            	@foreach ($orders as $order)

	                  <tr class="table-primary">
	                    <td>{{ $order->id }}</td>
	                    <td>{{ $order->user->email }}</td>
	                    <td><span class="badge badge-pill 
	                      {{$order->status=='pending' ? 'badge-primary' : ''}}
	                      {{$order->status=='accepted' ? 'badge-success' : ''}}
	                      {{$order->status=='rejected' ? 'badge-danger' : ''}}
	                      ">{{ $order->status }}</span></td>
	                    <td>{{ $order->created_at->format('d/m/y') }}</td>
	                    <td>
	                      <a target="_blank" href="{{ route('order-detail', $order->id) }}">
	                        View
	                      </a>
	                    </td>   
	                    <td >
	                      <a href="{{ route('accept-order', $order->id) }}" class="btn btn-outline-success">
	                      	<i class="fas fa-check"></i>
	                      </a>  
	                      
	                      <a href="{{ route('reject-order', $order->id) }}" class="btn btn-outline-danger">
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