@extends('layouts.app')
@section('title','Origenes')

@section('content')


    <h1 class="btn-group-justified text-white text-center">Origenes</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("origenes/create")}}">Agregar Nuevo</a></button>
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
                    @foreach($origenes as $origen)
                        <tr>
                            <td>{{$origen->descripcion}}</td>
                            <td><a href="{{route("origenes.edit",$origen->id_origen)}}" class="btn btn-outline-primary"><i class="far fa-edit"></i></a></td>
                            <td class="table-success">
                                <a href="{{route('origenes.destroy',$origen->id_origen)}}" onclick="return confirm('¿Seguro que desea eliminar lugar de Origen?')" class="btn btn-outline-danger" name="Eliminar"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection
