@extends('layouts.app')
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
                <th>Descripción</th>
                <th>Estado</th>
                <th>Actualizar</th>
                <th>Eliminar</th>

                </thead>
                <tbdoy>
                    @foreach($municipios as $municipio)
                        <tr>
                            <td>{{$municipio->descripcion}}</td>
                            <td>{{isset($municipio->getEstado[0])?$municipio->getEstado[0]->descripcion:""}}</td>
                            <td><a href="{{route("municipios.edit",$municipio->id_municipio)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td class="table-success">
                                <a href="{{route('municipios.destroy',$municipio->id_municipio)}}" onclick="return confirm('¿Seguro que desea eliminar el Municipio?')" class="btn btn-outline-danger" name="Eliminar"><i class="fas fa-trash"></i></a>
                            </td>


                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>

@endsection

