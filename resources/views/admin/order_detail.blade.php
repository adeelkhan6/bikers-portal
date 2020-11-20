@extends('layouts.app')


@section('content')
@include('layouts.errors')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive">
					<table class="table table-hover mt-3">
					    <thead class="table-dark">
					        <tr>
						        <th>Image</th>
						        <th>Product name</th>
						        <th>Quantity</th>
						        <th>Price</th>
						        <th>Total price</th>
					        
					        </tr>
					    </thead>
	                    <tbody>

        		@foreach ($order->orderDetails as $detail)
      					  
      					<tr class="table-primary">
					        <td><img src="{{ asset('storage/image') }}/{{ $detail->product->image}}" width="90" alt=""></td>
					         <td>{{ $detail->product->name }}</td>
					        <td>{{ $detail->quantity }}</td>
					        <td>{{ $detail->product->price }}</td>
					        <td>{{ $detail->quantity * $detail->product->price }}</td>
				      	</tr>
				@endforeach
	  
	      				</tbody>

      				</table>
				</div>
					

      <h2 class="mt-5">Address</h2>

      <div class="table-responsive">
      	<table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip</th>
            <th>Cell #</th>

          </tr>
        </thead>
        <tbody>
          <tr class="table-success">
            <td>{{ $order->address->fname}} {{ $order->address->lname }}</td>
            <td>{{ $order->address->address }}</td>
            <td>{{ $order->address->city }}</td>
            <td>{{ $order->address->zip }}</td>
            <td>{{ $order->address->phone }}</td>

          </tr>
        </tbody>
      </table>
      </div> 
		</div>
	</div>
</div>
	</div>
@endsection