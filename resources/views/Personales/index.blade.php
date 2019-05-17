@extends('layout.layout')
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
                <th> Clave Personal</th>
                <th> Profesion</th>

                </thead>
                <tbody>

                @foreach($personales as $personal)
                    <tr>
                        <td>{{$personal->nombre}}</td>
                        <td>{{$personal->ap}}</td>
                        <td>{{$personal->am}}</td>
                        <td>{{$personal->clave_personal}}</td>
                        <td>{{isset($personal->getProfesion[0])?$personal->getProfesion[0]->descripcion:""}}</td>


                        <td><a href="{{route("personales.edit",$personal->id_personal)}}">Modificar</a></td>
                        <td>
                            <form action="{{url("personales")."/".$personal->id_personal}}" method="post">
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
