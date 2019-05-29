<?php

namespace App\Http\Controllers;

use App\Estados;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estados=Estados::orderby('id_estado')->get();
        return view("estados.index",compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("estados.create");
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
        $estado=array('descripcion'=>$request->descripcion);
        Estados::create($estado);
        return redirect("estados");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function show(Estados $estados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function edit(Estados $estado)
    {
        //
        return view("estados.edit",compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estados $estado)
    {
        //
        $estado->update($request->all());
        return redirect("estados");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estados $idestado)
    {
        //
        $idestado->delete();
        return redirect("estados");
    }
}
