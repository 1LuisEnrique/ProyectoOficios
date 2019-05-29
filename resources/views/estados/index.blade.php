@extends('layout.layout_admin')
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
                <th>Descripción</th>
                <th>Actualizar</th>
                <th> Eliminar</th>
                </thead>
                <tbdoy>
                    @foreach($estados as $estado)
                        <tr>
                            <td>{{$estado->descripcion}}</td>
                            <td><a href="{{route("estados.edit",$estado->id_estado)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td class="table-success">
                                <a href="{{route('estados.destroy',$estado->id_estado)}}" onclick="return confirm('¿Seguro que desea eliminar el Estado?')" class="btn btn-outline-danger" name="Eliminar"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection
