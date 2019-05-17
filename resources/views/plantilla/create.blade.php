@extends('layout.layout')
@section('title','Añadir Personal')
@section('content')

    <h1 class=" text-white text-center">Agregar a Plantilla</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("plantillas")}}">Regresar</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("plantillas")}}">

                @csrf
                <div class="form-group">

                    <div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="nombre">Jefe</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <br>
                    <br>


                    <div class="col-lg-12">
                        <br>
                        <div class="col-lg-4"></div>

                        <div class="col-lg-4">
                            <label class="col-lg-4" for="exampleInputPassword1">Subordinado</label>
                            <select class="col-lg-7" name="id_profesion" id="">
                                @foreach($plantillas as $plantilla)

                                    <option value="{{$plantilla->id_profesion}}">{{$plantilla->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!--<input type="checkbox" value="hola" name="check">activame-->
                </div>
                <center><button type="submit" class="btn btn-primary">Agregar a Plantilla</button></center>
            </form>
        </div>
    </div>

@endsection
