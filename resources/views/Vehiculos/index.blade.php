@extends('layouts.app')
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
                <th>Actualizar</th>
                <th>Eliminar</th>

                </thead>
                <tbody>

                @foreach($vehiculos as $vehiculo)
                    <tr>
                        <td>{{$vehiculo->modelo}}</td>
                        <td>{{isset($vehiculo->getMarca[0])?$vehiculo->getMarca[0]->descripcion:""}}</td>
                        <td>{{$vehiculo->placas}}</td>
                        <td><a href="{{route("vehiculos.edit",$vehiculo->id_vehiculo)}}" class="btn/outline/primary"><i class="far fa-edit"></i></a></td>
                        <td class="table-success">
                            <a href="{{route('vehiculos.destroy',$vehiculo->id_vehiculo)}}" onclick="return confirm('¿Seguro que desea eliminar el vehiculo?')" class="btn btn-outline-danger" name="Eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
