<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('comics') }}">Comics <span class="sr-only">(current)</span></a>
                        </li>
                        {{-- <li class="nav-item active">
                            <a class="nav-link" href="{{ route('blog') }}">Blog <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts') }}">Contact</a>
                        </li> --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>                                 
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-2">
                    <ul class="list-unstyled mx-5">
                        <li class="{{ Route::currentRouteName() == 'admin.index' ? 'active' : '' }}"><a href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                        <li class="{{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}"><a href=""><i class="fa fa-folder-open" aria-hidden="true"></i>Category</a></li>
                        <li class="{{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }} px-1 py-1"><a href="{{ route('admin.products.index') }}"><i class="fas fa-book-open mx-1"></i>Comics</a></li>
                        <li class="{{ Route::currentRouteName() == 'admin.series.index' ? 'active' : '' }} px-2 py-1"><a href="{{ route('admin.series.index') }}"><i class="fas fa-tag fa-lg fa-fw mx-2"></i> Series</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'admin.rateds.index' ? 'active' : '' }} px-2 py-1"><a href="#"><i class="fas fa-tag fa-lg fa-fw mx-2"></i> Rated</a></li>
                    </ul>
                </div>
                <main class="py-4 col-xs-12 col-md-9 col-lg-10">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>
</html>
