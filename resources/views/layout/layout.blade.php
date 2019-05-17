<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
    <style>
        #textfoot{
            font-color:"red;";
        }
    </style>

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

        <nav>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="navbar-nav" data-toggle="dropdown-submenu">Agregar Datos
                        <span class="caret"></span></a>
                    <ul class="dropdown-submenu">
                        <li><a href="destinos">Destinos</a></li>
                        <li><a href="estados">Estados</a></li>
                        <li><a href="marcas">Marcas</a></li>
                        <li><a href="municipios">Municipios</a></li>
                        <li><a href="origenes">Origenes</a></li>
                        <li><a href="profesiones">Cargos</a></li>
                        <li><a href="vehiculos">Vehiculos</a></li>
                        <li><a href="personales">Personal</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="{{url("plantillas")}}" class="nav-link text-white">Plantilla</a></li>
                <li class="nav-item"><a href="{{url("oficios")}}" class="nav-link text-white">Generar Oficios</a></li>
                <li class="nav-item"><a href="" class="nav-link text-white">Historial Oficios</a></li>
                <li class="nav-item"><a href="" class="nav-link text-white">Salir</a></li>
            </ul>
        </nav>
    </div>
</header>
<section class="container">
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
