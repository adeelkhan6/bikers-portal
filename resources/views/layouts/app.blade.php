<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'bikers portal')</title>

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('fonts/css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('fonts/js/all.min.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-danger shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fas fa-biking" style="font-size: 22px;"></i>
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto navbar-font-size">
                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Bikes</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('kawasaki') }}" class="dropdown-item">Kawasaki</a>
                                <a href="{{ route('yamaha') }}" class="dropdown-item">Yamaha</a>
                                <a href="{{ route('honda') }}" class="dropdown-item">Honda</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Parts</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('headlight') }}" class="dropdown-item">Headlight</a>
                                <a href="{{ route('tyre') }}" class="dropdown-item">Tyre</a>
                                <a href="{{ route('rim') }}" class="dropdown-item">Rim</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Accessories</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('helmet') }}" class="dropdown-item">Helmet</a>
                                <a href="{{ route('jacket') }}" class="dropdown-item">Jacket</a>
                                <a href="{{ route('shoes') }}" class="dropdown-item">Shoes</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rent') }}" class="nav-link">Rent</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto navbar-font-size">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                                
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            @if (auth()->user()->role->name === 'admin')
                           
                                    <a class="dropdown-item" href="{{ route('admin-dashboard') }}">
                                        {{ __('dashboard') }}
                                    </a>
                             @endif

                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
                        @guest ()
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cart') }}">{{ __('') }}
                                <i class="fas fa-shopping-cart"></i>

                        @if (session('cart'))
                                <span class="badge badge-warning" style="border-radius: 2px; padding-bottom: 1px;">
                                {{ count(session('cart')) }}
                                </span>
                        @endif

                                </a>
                            </li>

                        @else

                        @if (auth()->user()->role->name === 'customer')

                            <a class="nav-link" href="{{ route('cart') }}">{{ __('') }}
                            <i class="fas fa-shopping-cart"></i>

                        @if (session('cart'))

                            <span class="badge badge-warning" style="border-radius: 2px; padding-bottom: 1px;">
                            {{ count(session('cart')) }}
                            </span>

                        @endif

                            </a>

                        @endif

                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>












                                                