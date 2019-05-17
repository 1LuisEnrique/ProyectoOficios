@extends('layout.layout')
@section('title','Marcas')

@section('content')


    <h1 class="btn-group-justified text-white text-center">Marcas</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("marcas/create")}}">Agregar Nuevo</a></button>
        </div>
    </div>
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
                    @foreach($marcas as $marca)
                        <tr>
                            <td>{{$marca->id_marca}}</td>
                            <td>{{$marca->descripcion}}</td>
                            <td><a href="{{route("marcas.edit",$marca->id_marca)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{url("marcas")."/".$marca->id_marca}}" method="post">
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
