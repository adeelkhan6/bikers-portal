@extends('admin.admin_sidebar_app')

@section('admin_content')
<div class="container">
    <div class="row">
        <div class="offset-1 col-md-10">
            <h6 class="text-center mt-3" style="color: purple;"><i class="far fa-user"></i>&nbsp; 
                Admin Dashboard
            </h6><hr />

            <div class="card-deck mt-4">
                <div class="card bg-info">
                    <a class="card-link" href="{{ route('orders') }}">
                        <div class="card-body text-white text-center">
                            <i class="far fa-file"></i>
                            <h5 class="card-title">Orders</h5>
                            <p class="card-text text-warning">{{ $orders }}</p>
                        </div>
                    </a>
                </div>

                <div class="card bg-info">
                    <a class="card-link" href="{{ route('rent-orders') }}">
                        <div class="card-body text-white text-center">
                            <i class="far fa-clock"></i>
                            <h5 class="card-title">Rent Orders</h5>
                            <p class="card-text text-warning">{{ $rentOrders }}</p>
                        </div>
                    </a>
                </div>

                <div class="card bg-info">
                    <a class="card-link" href="{{ route('add-product') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-shopping-bag"></i>
                            <h5 class="card-title">Add Product</h5>
                            <p class="card-text text-warning">{{ $products }}</p>
                        </div>
                    </a>
                </div>

                 <div class="card bg-info">
                    <a class="card-link" href="{{ route('add-rent-bike') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-pen-alt"></i>
                            <h5 class="card-title">Add Rent Bike</h5>
                            <p class="card-text text-warning">{{ $rentBikes }}</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="card-deck mt-4">
                <div class="card bg-primary">
                    <a class="card-link" href="{{ route('bikes') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-motorcycle"></i>
                            <h5 class="card-title">Bikes</h5>
                            <p class="card-text">{{ $bikes }}</p>
                        </div>
                    </a>
                </div>

                <div class="card bg-primary">
                    <a class="card-link" href="{{ route('parts') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-cogs"></i>
                            <h5 class="card-title">Parts</h5>
                            <p class="card-text">{{ $parts }}</p>
                        </div>
                    </a>
                </div>

                <div class="card bg-primary">
                    <a class="card-link" href="{{ route('accessories') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-glasses"></i>
                            <h5 class="card-title">Accessories</h5>
                            <p class="card-text">{{ $accessories}}</p>
                        </div>
                    </a>
                </div>

                <div class="card bg-primary">
                    <a class="card-link" href="{{ route('rent-bikes') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-bicycle"></i>
                            <h5 class="card-title">Rent Bikes</h5>
                            <p class="card-text">{{ $rentBikes }}</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="card-deck mt-4">
                 <div class="card bg-info">
                    <a class="card-link" href="{{ route('inventory') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-warehouse"></i>
                            <h5 class="card-title">Inventory</h5>
                            <p class="card-text">{{ $products }}</p>
                        </div>
                    </a>
                </div>

                <div class="card bg-info">
                    <a class="card-link" href="{{ route('users') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-users"></i>
                            <h5 class="card-title">Users</h5>
                            <p class="card-text">{{ $users }}</p>
                        </div>
                    </a>
                </div>

                <div class="card bg-info">
                    <a class="card-link" href="{{ route('admin-dashboard') }}">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-tachometer-alt" style="color: yellow;"></i>
                            <h5 class="card-title">Dashboard</h5>
                            <p class="card-text">00</p>
                        </div>
                    </a>
                </div>
                <div class="card bg-info">
                    <a class="card-link" href="#">
                        <div class="card-body text-white text-center">
                            <i class="fas fa-users"></i>
                            <h5 class="card-title">Admin Profile</h5>
                            <p class="card-text">1</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection