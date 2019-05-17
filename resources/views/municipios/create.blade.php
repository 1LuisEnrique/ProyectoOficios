@extends('layout.layout')
@section('title','Agregar Municipios')
@section('content')

    <h1 class=" text-white text-center">Registrar Nuevo Municipio</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("municipios")}}">Regresar</a></button>

        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("municipios")}}">

                @csrf
                <div class="form-group">
                    <div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-1">
                            <label class="col-lg-6" for="exampleInputPassword1">Nombre</label>
                        </div>
                        <div class="col-lg-4">
                            <input class="col-lg-6" type="text" class="form-control"  name="descripcion" placeholder="Municipio">
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label class="col-lg-3" for="exampleInputPassword3">Perteneciente a: </label>
                            <div>
                                <select class="col-lg-6" name="id_estado" id="">
                                    @foreach($estados as $estado)
                                        <option value="{{$estado->id_estado}}">{{$estado->descripcion}}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                    </div>
                    <br>
                    <br>
                    <div>
                        <center>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
