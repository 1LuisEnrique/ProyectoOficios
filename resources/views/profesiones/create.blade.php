
@extends('layout.layout_admin')
@section('title','Agregar Profesiones')
@section('content')
    <h1 class="btn-group-justified text-white text-center">Agregar Nueva Profesion</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("profesiones")}}">Regresar</a></button>
        </div>
    </div>
    <div class="row col-lg-12">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("profesiones")}}">
                @csrf
                <div class="form-group center-block ">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2">
                        <label class="col-lg-1" for="exampleInputPassword1">Descripción</label>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <center><input class="col-lg-8" type="text" class="form-control" name="descripcion" placeholder="ej. I.S.C"></center>
                    </div>
                    <div class="col-lg-12">
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </center>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div>
    </div>
@endsection
