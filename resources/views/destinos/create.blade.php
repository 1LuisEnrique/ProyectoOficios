@extends('layouts.app')
@section('title','Agregar Destinos')
@section('content')

    <h1 class="btn-group-justified text-white text-center">Agregar Destino</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("destinos")}}">Regresar</a></button>
        </div>
    </div>
    <div class="row col-lg-12">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("destinos")}}">
                @csrf
                <div class="form-group center-block ">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2">
                        <label class="col-lg-1" for="exampleInputPassword1">Descripción</label>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <center><input class="col-lg-8" type="text" class="form-control" name="descripcion" placeholder="Destino"></center>
                    </div>
                    <div class="col-lg-12">
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Agregar</button>

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
