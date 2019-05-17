@extends('layout.layout')
@section('title','Añadir vehiculo')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar Vehiculo</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("vehiculos")}}">Volver</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("vehiculos.update",$vehiculo->id_vehiculo)}}">
                @csrf
                @method("PUT")

                <div class="form-group">
                    <label for="exampleInputPassword2">Modelo</label>
                    <input type="text" class="form-control" name="modelo" value="{{$vehiculo->modelo}}" placeholder="Modelo">


                    <select name="id_marca" id="">
                        <option value="">Selecciona una opcion</option>
                        @foreach($marcas as $marca)
                            <option value="{{$marca->id_marca}}" {{$marca->id_marca==$vehiculo->id_marca?"selected":""}} >{{$marca->descripcion}}</option>
                        @endforeach
                    </select>

                    <label for="exampleInputPassword2">Placas</label>
                    <input type="text" class="form-control" name="placas" value="{{$vehiculo->placas}}"placeholder="Placas">

                    <label for="exampleInputPassword3">Estado</label>
                    <input type="text" class="form-control" name="estado" value="{{$vehiculo->estado}}"placeholder="Estado">



                </div>
                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>

@endsection
