@extends('layout.layout')
@section('title','Estados')

@section('content')

    <h1 class="btn-group-justified text-white text-center">Estados</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("estados/create")}}">Agregar Nuevo</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>No.</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th> Eliminar</th>
                </thead>
                <tbdoy>
                    @foreach($estados as $estado)
                        <tr>
                            <td>{{$estado->id_estado}}</td>
                            <td>{{$estado->descripcion}}</td>
                            <td><a href="{{route("estados.edit",$estado->id_estado)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{url("estados")."/".$estado->id_estado}}" method="post">
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
