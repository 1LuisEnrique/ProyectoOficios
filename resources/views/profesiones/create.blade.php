@extends('layout.layout')
@section('title','Agregar Profesiones')
@section('content')

    <h1 class="btn-group-justified text-white text-center">Agregar Nuevo Cargo</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("profesiones")}}">Regresar</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("profesiones")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre Cargo</label>
                    <center><input class="col-lg-5" type="text" class="form-control" name="descripcion" placeholder="Profesion"></center>
                    <left class="col-lg-4"><button type="submit" class="btn btn-primary">Agregar</button>
                    </left>
                </div>
            </form>
        </div>
    </div>
@endsection
