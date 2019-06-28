@extends('layouts.app')
@section('title','Personal')
@section('content')
    <h1 class=" text-white text-center">Personal</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("personales/create")}}">Agregar Nuevo</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>

                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th> Clave</th>
                <th>Profesion</th>
                <th> Actualizar</th>
                <th> Eliminar</th>
                </thead>
                <tbody>
                @foreach($personales as $personal)
                    <tr>
                        <td>{{$personal->nombre}}</td>
                        <td>{{$personal->ap}}</td>
                        <td>{{$personal->am}}</td>
                        <td>{{$personal->clave_personal}}</td>
                        <td>{{$personal->profesion}}</td>
                        <td><a href="{{route("personales.edit",$personal->id_personal)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                        <td class="table-success">
                            <a href="{{route('personales.destroy',$personal->id_personal)}}" onclick="return confirm('¿Seguro que desea eliminar el Personal?')" class="btn btn-outline-danger" name="Eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
