@extends('layouts.app')

@section('content')
@include('layouts.errors')
    <div class="container">

        <div class="mt-5 text-center">
            <h2>Currently Featured Bikes</h2>
            <p class="text-muted">Here's what we are currently excited about at Bikers Portal.</p>
            <br /> <br />
        </div>

        <div class="row">

    @foreach ($bikes as $bike)
        
        <div class="col-md-4">
            <div class="product-info">
                <a href="{{ route('product-detail', $bike->id) }}">
                    <img class="img-fluid" src="{{ asset('storage/image') }}/{{ $bike->image }}" alt="bike">
                </a>
            </div>
                    <p class="mt-3 text-justify">{{ $bike->description }}</p>
        </div>

    @endforeach

        </div>

        <div class="mt-5 text-center">
            <h2>Currently Featured Parts</h2>
            <p class="text-muted">Here's what we are currently excited about at Bikers Portal.</p>
            <br /> <br />
        </div>

        <div class="row">

    @foreach ($parts as $part)
        
        <div class="col-md-4">
            <div class="product-info">
                <a href="{{ route('product-detail', $part->id) }}">
                    <img class="img-fluid" src="{{ asset('storage/image') }}/{{ $part->image }}" alt="bike">
                </a>
            </div>
                    <p class="mt-3 text-justify">{{ $part->description }}</p>
        </div>

    @endforeach

        </div>

        <div class="mt-5 text-center">
            <h2>Currently Featured Accessories</h2>
            <p class="text-muted">Here's what we are currently excited about at Bikers Portal.</p>
            <br /> <br />
        </div>

        <div class="row">

    @foreach ($accessories as $accessory)
        
        <div class="col-md-4">
            <div class="product-info">
                <a href="{{ route('product-detail', $accessory->id) }}">
                    <img class="img-fluid" src="{{ asset('storage/image') }}/{{ $accessory->image }}" alt="bike">
                </a>   
            </div>
                    <p class="mt-3 text-justify">{{ $accessory->description }}</p>
        </div>

    @endforeach

        </div>
        
        <div class="mt-5 text-center">
            <h2>Rented Bikes</h2>
            <p class="text-muted">Here's what we are currently excited about at Bikers Portal.</p>
            <br /> <br />
        </div>

        <div class="row mb-5">
            <div class="offset-3 col-md-6">
                <div class="product-info">
                    <a href="{{ route('rent') }}">
                        <img class="img-fluid" src="images/r.jpg" alt="bike">
                    </a>
                </div>
                    <p class="mt-3 text-justify">Rent Bikes design varies greatly to suit long distance travel. 
                        Rent Bikes has an exceptionally smooth-riding road bike Disc brakes offer extra confidence
                        and Unbeatable performance and value. it also gives you low fuel consumption 
                        which also adds more value to it.
                    </p>
            </div>
        </div>
    </div>

    @include('footer')

@endsection