<nav>
<ul class=" nav navbar-nav">

    @guest

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
            </li>

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
            @endif
            @else
                @if(Auth::user()->tipo_usuario==1||Auth::user()->tipo_usuario==0)
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('logout') }}"
                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesion') }}
                    </a>

                    <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
                    <li class="nav-item"><a href="#!" class="nav-link text-white">Generar Oficio</a></li>
                @endif

        @if(Auth::user()->tipo_usuario==1)


                <li class="nav-item"><a href="{{url("plantillas")}}" class="nav-link text-white">Plantilla</a></li>
                <li class="nav-item"><a href="{{url("unidades_admin")}}" class="nav-link text-white">Jefes Unidad-Adm</a></li>
                <li class="nav-item"><a href="" class="nav-link text-white">Asignacion de Personal-Unidad-Adm</a></li>
                        <li class="nav-item dropdown-toggle">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
                                {{"Datos"}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right ">
                                <ul>
                                    <li><a href="{{url("origenes")}}">Origenes</a></li>
                                    <li><a href="{{url("destinos")}}">Destinos</a></li>
                                    <li><a href="{{url("estados")}}">Estados</a></li>
                                    <li><a href="{{url("municipios")}}">Municipios</a></li>
                                    <li><a href="{{url("marcas")}}"> Marcas</a></li>
                                    <li><a href="{{url("vehiculos")}}">Vehiculos</a></li>
                                    <li><a href="{{url("profesiones")}}">Profesiones</a></li>
                                    <li><a href="{{url("personales")}}">Personal</a></li>


                                </ul>

                            </div>
                        </li>
        @endif
    @endguest
</ul>
</nav>
