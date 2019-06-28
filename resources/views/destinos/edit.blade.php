@extends('layouts.app')
@section('title','Agregar Destino')
@section('content')

    <h1 class=" text-white text-center">Modificar Destino</h1>
    <div class="row">
        <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("destinos")}}">Regresar</a></button>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("destinos.update",$destino->id_destino)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2">
                        <label class="col-lg-2" for="exampleInputPassword1">Reemplazar por:</label>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <center><input class="col-lg-8" type="text"  value="{{$destino->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="destino"></center>
                    </div>
                    <div class="col-lg-12">
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </center>
                        <br>
                    </div>
                    <br>

                </div>
            </form>
        </div>
    </div>
@endsection
