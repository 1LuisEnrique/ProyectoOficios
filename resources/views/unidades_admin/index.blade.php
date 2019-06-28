@extends('layouts.app')
@section('title','Unidades Administrativas')
@section('content')

    <h1 class="btn-group-justified text-white text-center">Unidades Administrativas</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("unidades_admin/create")}}">Agregar Nueva</a></button>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Plantilla</th>
                <th>Jefe o encargado</th>


                </thead>
                <tbdoy>
                    @foreach($unidades_admin as $unidad_admin)
                        <tr>
                            <td>{{$unidad_admin->descripcion_unidad}}</td>
                            <td>{{isset($unidad_admin->getPersonal[0])?$unidad_admin->getPersonal[0]->nombre:""}}</td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>

@endsection
