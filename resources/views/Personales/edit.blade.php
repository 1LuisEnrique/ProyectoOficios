@extends('layout.layout')
@section('title','Añadir Personal')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar Personales</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("personales")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("personales.update",$personal->id_personal)}}">
                @csrf
                @method("PUT")

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$personal->nombre}}" placeholder="Nombre">


                    <label for="ap">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ap" value="{{$personal->ap}}"placeholder="Apellido Paterno">

                    <label for="ap">Apellido Materno</label>
                    <input type="text" class="form-control" name="am" value="{{$personal->am}}"placeholder="Apellido materno">

                    <label for="clave personal">Clave Personal</label>
                    <input type="text" class="form-control" name="clave_personal" value="{{$personal->clave_personal}}"placeholder="Clave personal">

                    <select name="id_profesion" id="">
                        <option value="">Selecciona una opcion</option>
                        @foreach($profesiones as $profesion)
                            <option value="{{$profesion->id_profesion}}" {{$profesion->id_profesion==$profesion->id_profesion?"selected":""}} >{{$profesion->descripcion}}</option>
                        @endforeach
                    </select>


                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
