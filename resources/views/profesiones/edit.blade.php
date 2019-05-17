@extends('layout.layout')
@section('title','Agregar Profesion')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar profesion</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("profesiones")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("profesiones.update",$profesion->id_profesion)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="descripcion">Nombre profesion</label>
                    <input type="text"  value="{{$profesion->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="Profesion">
                </div>

                <button type="submit" class="btn-primary">Aceptar</button>
            </form>
        </div>
    </div>
@endsection
