@extends('layout.layout')
@section('title','Vehiculos')
@section('content')
    <h1 class=" text-white text-center">Vehículos</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("vehiculos/create")}}">Agregar Nuevo</a></button>
        </div>
    </div>    <div class="row">
        <div class="col">
            <table class="table">
                <thead>

                <th>Modelo</th>
                <th>Marca</th>
                <th>Placas</th>
                <th>Modificar</th>
                <th>Eliminar</th>

                </thead>
                <tbody>

                @foreach($vehiculos as $vehiculo)
                    <tr>
                        <td>{{$vehiculo->modelo}}</td>
                        <td>{{$vehiculo->placas}}</td>
                        <td>{{isset($vehiculo->getMarca[0])?$vehiculo->getMarca[0]->descripcion:""}}</td>
                        <td><a href="{{route("vehiculos.edit",$vehiculo->id_vehiculo)}}">Modificar</a></td>
                        <td>
                            <form action="{{url("vehiculos")."/".$vehiculo->id_vehiculo}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>

                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
