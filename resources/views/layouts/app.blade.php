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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset('datepicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datepicker/css/bootstrap-standalone.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
    <link href="{{ asset('open-iconic-master/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet" >
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap-colorpicker.css" rel="stylesheet">
    <link href="/css/jquery.timepicker.css" rel="stylesheet">

</head>
<body>
<header id="header" class="header-responsive " >
    <div  class="colorheader offset-sm-10 col-xs-10 col-sm-12 col-md-10 card "  >
        <link rel="stylesheet" href="{{ URL::asset ('assets/css/estilos.css') }}">
        <div class="col-xs-2 col-sm-2 col-md-1">
            <label href="{{ URL::asset ('assets/img/gem.png') }}" target="_blank"><img id="logo1" src="{{ URL::asset ('assets/img/gem.png') }}" /></label>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-1">
            <label  href="{{ URL::asset ('img/logos/EdoMEXvertical.png') }}" target="_blank"><img id="logo2" src="{{ URL::asset ('img/logos/EdoMEXvertical.png') }}" /></label>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-8 lineas">
            Sistema de Oficios de Comisiones del Tecnológico de Estudios Superiores de Valle de Bravo
        </div>
        <div class="col-xs-3 col-sm-3 col-md-2">
            <label  href="{{ URL::asset ('assets/img/tes.png') }}" target="_blank"><img id="logo3" src="{{ URL::asset ('assets/img/tes.png') }}" /></label>
        </div>

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if(Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>


                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else

                                @component('partials.menu')
                                @endcomponent
                            @endguest
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
</header>
<br>
<br>
<br>

<section class="container" id="wrap_content">
    @yield("content")
</section>
<footer class="colorfooter col-xs-10 col-sm-10 col-md-10 offset-sm-1 footer-responsive">
    <div class="col-xs-6 col-sm-6 col-md-6">
        Tecnológico de Estudios Superiores Valle de Bravo
        Gobierno Del Estado De México
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        Km. 30 de la Carretera Federal Monumento-Valle de Bravo Ejido de San Antonio de la Laguna Valle de Bravo C.P 51200
    </div>
    <div class="container center" style="text-align: center" >
        Algunos Derechos Reservados 2011 Gobierno del Estado de México | <strong>Dudas y comentarios Webmaster</strong>
    </div>
</footer>
</body>
</html>
