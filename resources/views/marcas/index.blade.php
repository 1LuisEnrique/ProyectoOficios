@extends('layouts.app')
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
                <th>Descripción</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                </thead>
                <tbdoy>
                    @foreach($marcas as $marca)
                        <tr>
                            <td>{{$marca->descripcion}}</td>
                            <td><a href="{{route("marcas.edit",$marca->id_marca)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td class="table-success">
                                <a href="{{route('marcas.destroy',$marca->id_marca)}}" onclick="return confirm('¿Seguro que desea eliminar la Marca?')" class="btn btn-outline-danger" name="Eliminar"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>

@endsection
