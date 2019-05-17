@extends('layout.layout')
@section('title','Municipios')

@section('content')

    <h1 class="btn-group-justified text-white text-center">Municipios</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("municipios/create")}}">Agregar Nuevo</a></button>
        </div>    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>No.</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>

                </thead>
                <tbdoy>
                    @foreach($municipios as $municipio)
                        <tr>
                            <td>{{$municipio->id_municipio}}</td>
                            <td>{{$municipio->descripcion}}</td>
                            <td>{{isset($municipio->getEstado[0])?$municipio->getEstado[0]->descripcion:""}}</td>
                            <td><a href="" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td>
                                <form action="{{url("municipios")."/".$municipio->id_municipio}}" method="post">
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
