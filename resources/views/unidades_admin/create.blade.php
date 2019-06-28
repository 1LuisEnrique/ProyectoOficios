@extends('layouts.app')
@section('title','Añadir Personal')
@section('content')

    <h1 class=" text-white text-center">Registrar Unidad Administrativa</h1>
    <div class="row">
        <div>
            <button type="submit" class="btn-primary"><a class="btn-primary" href="{{url("unidades_admin")}}">Regresar</a></button>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("unidades_admin")}}">
                @csrf
                <div class="form-group">

                    <div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="nombre">Nombre Unidad o Jefatura</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <br>
                    <br>


                    <div class="col-lg-12">
                        <br>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label class="col-lg-5" for="exampleInputPassword1">Jefe o Encargado</label>
                            <select class="col-lg-7" name="id_personal" id="">
                                @foreach($personales as $personal)
                                    <option value="{{$personal->id_personal}}">{{$personal->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <br>
                    <center><button type="submit" class="btn btn-primary">Registrar</button></center>
                </div>
            </form>
        </div>
    </div>

@endsection

