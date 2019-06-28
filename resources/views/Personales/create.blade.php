@extends('layouts.app')
@section('title','Añadir Personal')
@section('content')
    <h1 class=" text-white text-center">Registrar Personal</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("personales")}}">Regresar</a></button>

        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("personales")}}">

                @csrf
                <div class="form-group">

                    <div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="ap">Apellido Paterno</label>
                            <input type="text" class="form-control" name="ap" placeholder="Apellido Paterno">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="am">Apellido Materno</label>
                            <input type="text" class="form-control" name="am" placeholder="Apellido Materno">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="clave_personal">Clave Personal</label>
                            <input type="text" class="form-control" name="clave_personal" placeholder="Clave personal">
                        </div>
                    </div>

                    <div class="col-lg-12">

                        <div class="col-lg-12">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <label for="clave_personal">Profesion</label>
                                <input type="text" class="form-control" name="profesion" placeholder="ej. ISC">
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                    <br>
                </div>
                <br>
                <br>
                <center><button type="submit" class="btn btn-primary">Agregar</button></center>
                <br>
            </form>
        </div>
    </div>

@endsection
