@extends('layout.layout')
@section('title','Modificar Origen')
@section('content')
    <h1 class="bg-primary text-white text-center">Modificar Origen</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("origenes")}}">Regresar</a></div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("origenes.update",$origen->id_origen)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="descripcion">Reemplazar por:</label>
                    <input type="text"  value="{{$origen->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="origen">
                </div>

                <button type="submit" class="btn-primary">Modificar</button>
            </form>
        </div>
    </div>
@endsection
