@extends('layout.layout')
@section('title','Profesiones')

@section('content')


    <h1 class="btn-group-justified text-white text-center">Cargos </h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("profesiones/create")}}">Agregar Nuevo</a></button>
        </div>    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>No.</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>
                <tbdoy>
                    @foreach($profesiones as $profesion)
                        <tr>
                            <td>{{$profesion->id_profesion}}</td>
                            <td>{{$profesion->descripcion}}</td>
                            <td><a href="{{route("profesiones.edit",$profesion->id_profesion)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{url("profesiones")."/".$profesion->id_profesion}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button href="" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>

@endsection
