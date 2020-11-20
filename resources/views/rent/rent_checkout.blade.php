@extends('layouts.app')


@section('content')
	<div class="container mt-4 mb-4">
		<div class="row">
			<div class="col-sm-8">
				<h4 class="mb-4" style="color: purple;">
					Form for Order 
					&nbsp;<i class="far fa-file"></i>
					<span class="float-right">Payable: ${{ $rentOrder['total_rent'] }}</span>
				</h4>
				<form method="POST" action="{{ route('rent-order-store') }}">
					@csrf
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="fname">Fisrt Name</label>
							<input type="text" class="form-control" name="fname" id="fname" 
								placeholder="user first name">
						</div>

						<div class="form-group col-sm-6">
							<label for="lname">Last Name</label>
							<input type="text" class="form-control" name="lname" id="lname" 
								placeholder="user last name">
						</div>
					</div>

					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" class="form-control" name="address" id="address" 
							placeholder="user address">
					</div>

					<div class="form-row">
						<div class="form-group col-sm-4">
							<label for="countary">Country</label>
							<select class="form-control" name="countary" id="countary">
								<option value="pakistan">Pakistan</option>
							</select>
						</div>

						<div class="form-group col-sm-4">
							<label for="city">City</label>
							<input type="text" class="form-control" name="city" id="city" placeholder="user city">
						</div>

						<div class="form-group col-sm-4">
							<label for="zip">Zip</label>
							<input type="text" class="form-control" name="zip" id="zip" placeholder="zip code">
						</div>
					</div>

					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="user phone">
					</div>

					<h4>Payment Via Credit Card!</h4>

					<div class="form-row">
						<div class="form-group col-sm-6">
							<label for="noc">Name On Card</label>
							<input type="text" class="form-control" name="noc" id="noc" 
								placeholder="user name on card">
						</div>

						<div class="form-group col-sm-6">
							<label for="ccn">Credit Card Number</label>
							<input type="text" class="form-control" name="ccn" id="ccn" 
								placeholder="user credit card number">
						</div>

						<div class="form-group col-sm-6">
							<label for="exdate">Expiration Date</label>
							<input type="month" class="form-control" name="exdate" id="exdate">
						</div>

						<div class="form-group col-sm-6">
							<label for="cvv">Cvv</label>
							<input type="text" class="form-control" name="cvv" id="cvv" placeholder="user cvv #">
						</div>

					</div>
					
					
						<div class="offset-3 col-sm-6 mt-3">
							<button type="submit" class="btn btn-outline-primary btn-block badge-pill">
							Order now
							&nbsp;<i class="fas fa-chevron-right"></i> 
							</button>
						</div>
						
			
					

				</form>
			</div>
		</div>
	</div>

@endsection