<?php

namespace App\Http\Controllers;

use App\Estados;
use App\Marcas;
use App\Municipios;
use App\Nacionalidades;
use App\Personales;
use App\Personas;
use App\Vehiculos;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $municipios=Municipios::all();
        return view("municipios.index",compact('municipios'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //

        $estados = Estados::all();
        return view("municipios.create",compact("estados"));

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
        Municipios::create($request->all());
        return redirect("municipios");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function show(Municipios $municipios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipios $municipios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipios $municipios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipios $municipio)
    {
        //
        $municipio->delete();
        return redirect("municipios");
    }
}
