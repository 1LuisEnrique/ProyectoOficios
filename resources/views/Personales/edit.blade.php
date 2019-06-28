@extends('layouts.app')
@section('title','Actualizar Personal')
@section('content')
    <h1 class=" text-white text-center">Actualizar Personal</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("personales")}}">Regresar</a></button>

        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("personales.update",$personale->id_personal)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="{{$personale->nombre}}" placeholder="Nombre">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="ap">Apellido Paterno</label>
                            <input type="text" class="form-control" name="ap" value="{{$personale->ap}}" placeholder="Apellido Paterno">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="am">Apellido Materno</label>
                            <input type="text" class="form-control" name="am" value="{{$personale->am}}" placeholder="Apellido Materno">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="clave_personal">Clave Personal</label>
                            <input type="text" class="form-control" name="clave_personal" value="{{$personale->clave_personal}}" placeholder="Clave personal">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <br>
                        <div class="col-lg-4"></div>

                        <div class="col-lg-4">
                            <label class="col-lg-4" for="exampleInputPassword1">Profesion</label>
                            <select class="col-lg-7" name="id_profesion" id="">
                                <br>
                                @foreach($profesiones as $profesion)
                                    <option value="{{$profesion->id_profesion}}" {{$profesion->id_profesion==$profesion->id_profesion?"selected":""}} >{{$profesion->descripcion}}</option>
                                @endforeach
                                <br>
                                <br>
                            </select>
                            <br>
                            <br>
                        </div>
                        <br>
                    </div>
                    <br>
                </div>
                <br>
                <center><button type="submit" class="btn btn-primary">Actualizar</button></center>
                <br>
            </form>
        </div>
    </div>
@endsection
