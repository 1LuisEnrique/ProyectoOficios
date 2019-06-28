@extends('layout.layout_user')
@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div>
                    <br>
                    <h1 class="panel-title"><center>! Registrate !</center></h1>
                </div>
                <div class="panel-body">

                    <form method="post" action="{{url("register")}}">
                        @csrf
                        <div class="form-group">

                            <label for="name" class=" col-form-label text-md-right">{{ __('Usuario') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="email" class=" col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password" class=" col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">



                            <label for="nombre" class=" col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <input id="nombre" type="text" class="form-control" name="nombre" required>


                            <label for="ap" class=" col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>
                            <input id="ap" type="text" class="form-control" name="ap" required autocomplete="new-password">


                            <label for="am" class=" col-form-label text-md-right">{{ __('Apellido Materno') }}</label>
                            <input id="am" type="text" class="form-control" name="am" required autocomplete="new-password">


                            <label for="clave_personal" class=" col-form-label text-md-right">{{ __('Clave Personal') }}</label>
                            <input id="clave_personal" type="text" class="form-control" name="clave_personal" required autocomplete="new-password">

                            <label for="profesion" class=" col-form-label text-md-right">{{ __('Profesion') }}</label>
                            <input id="profesion" type="text" class="form-control" name="profesion" required autocomplete="new-password">

                            <br>

                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Registrar') }}
                            </button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ap" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                            <div class="col-md-6">
                                <input id="ap" type="text" class="form-control" name="ap" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="am" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-6">
                                <input id="am" type="text" class="form-control" name="am" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="clave_personal" class="col-md-4 col-form-label text-md-right">{{ __('Clave Personal') }}</label>

                            <div class="col-md-6">
                                <input id="clave_personal" type="text" class="form-control" name="clave_personal" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profesion" class="col-md-4 col-form-label text-md-right">{{ __('Profesion') }}</label>

                            <div class="col-md-6">
                                <input id="profesion" type="text" class="form-control" name="profesion" required autocomplete="new-password">
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    -->
</div>
@endsection
