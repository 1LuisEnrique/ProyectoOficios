@extends('layout.layout')
@section('title','Personal')
@section('content')
    <h1 class=" text-white text-center">Plantilla</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("plantillas/create")}}">Agregar Subordinado</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>

                <th>Jefe</th>
                <th>Subordinado</th>
                </thead>
                <tbody>

                @foreach($plantillas as $plantilla)
                    <tr>
                        <td>{{$plantilla->jefe}}</td>
                        <td>{{$plantilla->id_subordinado}}</td>

                        <td>{{isset($plantilla->getPlantilla[0])?$plantilla->getPlantilla[0]->id_subordinado:""}}</td>

                        <td>
                            <form action="{{url("")."/".$plantilla->id_JefesPersonales}}" method="post">
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
