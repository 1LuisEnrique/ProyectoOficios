<?php

namespace App\Http\Controllers;

use App\Origenes;
use App\Profesiones;
use Illuminate\Http\Request;

class ProfesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profesiones=Profesiones:: orderby('id_profesion')->get();
        return view("profesiones.index",compact('profesiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("profesiones.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $profesiones=array('descripcion'=>$request->descripcion);
        Profesiones::create($profesiones);
        return redirect("profesiones");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function show(Profesiones $profesiones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesiones $profesione)
    {
        //
        return view("profesiones.edit",compact('profesione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesiones $profesione)
    {
        //
        $profesione->update($request->all());
        return redirect("profesiones");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesiones  $profesiones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesiones $idprofesion)
    {
        //
        $idprofesion->delete();
        return redirect("profesiones");
    }
}
