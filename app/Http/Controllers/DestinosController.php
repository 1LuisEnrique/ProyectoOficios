<?php

namespace App\Http\Controllers;

use App\Destinos;
use Illuminate\Http\Request;

class DestinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $destinos=Destinos:: orderby('id_destino')->get();
        return view("destinos.index",compact('destinos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("destinos.create");

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
        $destino=array('descripcion'=>$request->descripcion);
        Destinos::create($destino);
        return redirect("destinos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function show(Destinos $destinos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinos $destino)
    {
        //
        return view("destinos.edit",compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destinos $destino)
    {
        //
        $destino->update($request->all());
        return redirect("destinos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destinos  $destinos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinos $iddestino)
    {
        //
        $iddestino->delete();
        return redirect("destinos");
    }
}
