<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="row navbar-nav ml-auto">
                        <li class="nav-item"><a class="navbar-brand" href="{{route('productAdd')}}">Post product</a></li>

                        <li class="dropdown mega-dropdown active">
                            <a href="#" class="navbar-brand" data-toggle="dropdown">Order<span class="caret"></span></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li><a class="navbar-brand" href="{{('place_order')}}">place an order</a></li><br>
                                        <li><a class="navbar-brand" href="{{('retrieve_order')}}">retrieve an order</a></li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li><a class="navbar-brand" href="{{('loan')}}">Request a loan</a></li>
                        <li><a class="navbar-brand" href="{{('business')}}">Register business</a>

                        </li>

                        <li class="dropdown mega-dropdown active">
                            <a href="#" class="navbar-brand" data-toggle="dropdown">Trainings</a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li><a class="navbar-brand" href="{{('place_order')}}">Sales technique</a></li>
                                        <li><a class="navbar-brand" href="{{('retrieve_order')}}">Marketing of products</a></li>
                                        <li><a class="navbar-brand" href="{{('retrieve_order')}}">Finance management</a></li>
                                        <li><a class="navbar-brand" href="{{('retrieve_order')}}">How to invest and expand</a></li>
                                        <li><a class="navbar-brand" href="{{('retrieve_order')}}">Other resource sites</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <div class="dropdown mega-dropdown-menu active">
                            <a href="#" class="navbar-brand" data-toggle="dropdown"><img src="{{asset('images/default_image.png')}}" alt="user" height="40px"></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('images/9.png')}}" alt="user" height="40px"></a>
    
                        <div class="mega-dropdown-menu">
                            <div class="w3ls_vegetables">
                                <ul class="dropdown-menu drp-mnu">
                                    <li>
    
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} as {{Auth::user()->name }}
                            </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>