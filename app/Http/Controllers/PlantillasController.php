<?php

namespace App\Http\Controllers;

use App\Personales;
use App\Plantillas;
use App\Profesiones;
use Illuminate\Http\Request;

class PlantillasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plantillas=Plantillas::all();
        return view("plantilla.index",compact("plantillas"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $plantillas= Plantillas::all();
        return view("plantilla.create",compact("plantillas"));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plantillas  $plantillas
     * @return \Illuminate\Http\Response
     */
    public function show(Plantillas $plantillas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plantillas  $plantillas
     * @return \Illuminate\Http\Response
     */
    public function edit(Plantillas $plantillas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plantillas  $plantillas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plantillas $plantillas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plantillas  $plantillas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plantillas $plantillas)
    {
        //
    }
}
