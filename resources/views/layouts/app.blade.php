<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />

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
                                        <li class="nav-item"><a class="navbar-brand" href="{{ route('createOrder')}}">place an order</a></li>
                                        <li class="nav-item"><a class="navbar-brand" href="{{route('listOrders')}}">retrieve an order</a></li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item"><a class="navbar-brand" href="{{ route('loanForm')}}">Request a loan</a></li>
                        <li class="nav-item"><a class="navbar-brand" href="{{ route('businessRegister')}}">Register business</a>

                        </li>

                        <li class="dropdown mega-dropdown active">
                            <a href="#" class="navbar-brand" data-toggle="dropdown">Trainings</a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li class="nav-item"><a class="navbar-brand" href="{{ route('trains',['id'=>'sales'])}}">Sales technique</a></li>
                                        <li class="nav-item"><a class="navbar-brand" href="{{ route('trains',['id'=>'marketing'])}}">Marketing of products</a></li>
                                        <li class="nav-item"><a class="navbar-brand" href="{{ route('trains',['id'=>'finance'])}}">Finance management</a></li>
                                        <li class="nav-item"><a class="navbar-brand" href="{{ route('trains',['id'=>'investments'])}}">How to invest and expand</a></li>
                                        <li class="nav-item"><a class="navbar-brand" href="{{ route('trains',['id'=>'other resources'])}}">Other resource sites</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <form action="" method="get" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" name="search" id="search" class="form-control" placeholder="Search..." required>
                                    <span class="input-group-btn">
                                      <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                      </button>
                                    </span>
                                </div>
                            </form>
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
                        <div class="dropdown mega-dropdown-menu active">
                            <a href="#" class="navbar-brand" data-toggle="dropdown"><img src="{{asset('images/default_image.png')}}" alt="user" height="40px"></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul type="none"> @guest

                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Sign Up</a></li> 
                                        @else
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-1 form-group">
            <div class="row col-md-12 form-group">
                <div class="col-md-2">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <ul class="navbar-nav">
                        @foreach($categories = App\Category::all() as $category)
                        <li class="nav-item"><a class="navbar-brand" href="{{route('fetchProduct', ['id' => $category->id])}}">{{$category->categoryname}}</a></li>
                        @endforeach {{--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
                            <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                <div class="w3ls_vegetables">
                                    <ul>
                                        <li><a href="frozen.html">Frozen Snacks</a></li>
                                        <li><a href="frozen.html">Frozen Nonveg</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-md-8 row" id="content">
                    @yield('content') @yield('contents')
                </div>
                <div class="col-md-2">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum in, nisi, delectus dignissimos tempora perspiciatis laboriosam
                        cumque aliquid iure veritatis dicta incidunt vero?
                    </p>
                </div>
            </div>
        </main>
    </div>
    <script>
        $(document).ready(function(){
            $('#search').keyup(function(){

                var search = $('#search').val();

                var data = {
                    search: search
                }

                $.ajax({
                    url: '/search',
                    type: 'GET',
                    data: data,
                        success: function (result) {
                            $("#content").html(result);
                        }
                })
            })

            $('#search-btn').keyup(function(){

                var search = $('#search').val();

                var data = {
                    search: search
                }

                $.ajax({
                    url: '/search',
                    type: 'GET',
                    data: data,
                        success: function (result) {
                            $("#content").html(result);
                        }
                })
            })
        })
    </script>

</body>

</html>