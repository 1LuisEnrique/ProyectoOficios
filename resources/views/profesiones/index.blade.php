@extends('layouts.app')
@section('title','Profesiones')

@section('content')


    <h1 class="btn-group-justified text-white text-center">Profesiones</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("profesiones/create")}}">Agregar Nuevo</a></button>
        </div>    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>
                <tbdoy>
                    @foreach($profesiones as $profesion)
                        <tr>
                            <td>{{$profesion->descripcion}}</td>
                            <td><a href="{{route("profesiones.edit",$profesion->id_profesion)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td class="table-success">
                                <a href="{{route('profesiones.destroy',$profesion->id_profesion)}}" onclick="return confirm('¿Seguro que desea eliminar esta Profesion?')" class="btn btn-outline-danger" name="Eliminar"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>

@endsection
