@extends('layout.layout_admin')
@section('title','Destinos')

@section('content')
    <h1 class="btn-group-justified text-white text-center">Destinos</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("destinos/create")}}">Agregar Nuevo</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Descripción</th>
                <th>Actualizar</th>
                <th>Eliminar </th>

                </thead>
                <tbdoy>
                    @foreach($destinos as $destino)
                        <tr>
                            <td>{{$destino->descripcion}}</td>
                            <td><a href="{{route("destinos.edit",$destino->id_destino)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td class="table-success">
                                <a href="{{route('destinos.destroy',$destino->id_destino)}}" onclick="return confirm('¿Seguro que desea eliminar?')" class="btn btn-outline-danger" name="Eliminar"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>

@endsection
