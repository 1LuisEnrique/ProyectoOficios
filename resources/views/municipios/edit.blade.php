@extends('layout.layout')
@section('title','Modificar Municipios')
@section('content')

    <h1 class=" text-white text-center">Modificar Registro Municipio</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("municipios")}}">Regresar</a></button>

        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("municipios.update",$municipio->id_municipio)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-1">
                            <label class="col-lg-6" for="exampleInputPassword1">Reemplazar por:</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="col-lg-6" type="text" class="form-control"  name="descripcion" value="{{$municipio->descripcion}}" placeholder="Municipio">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label class="col-lg-3" for="exampleInputPassword3">Pertenece a: </label>
                            <div>
                                <select class="col-lg-6" name="id_estado" id="">
                                    @foreach($estados as $estado)
                                        <option value="{{$estado->id_estado}}" {{$estado->estado==$municipio->id_estado?"selected":""}} >{{$estado->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div>
                        <center>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
