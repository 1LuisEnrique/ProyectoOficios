@extends('layout.layout_admin')
@section('title','Modificar Estado')
@section('content')

    <h1 class=" text-white text-center">Modificar Estado</h1>
    <div class="row">
        <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("estados")}}">Regresar</a></button>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("estados.update",$estado->id_estado)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-2">
                        <label class="col-lg-1" for="exampleInputPassword1">Reemplazar por:</label>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <center><input class="col-lg-8" type="text"  value="{{$estado->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="estado"></center>
                    </div>
                    <div class="col-lg-12">
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </center>
                        <br>
                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection
