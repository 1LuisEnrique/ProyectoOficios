<?php

namespace App\Http\Controllers;

use App\Municipios;
use App\Origenes;
use Illuminate\Http\Request;

class OrigenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $origenes=Origenes:: orderby('id_origen')->get();
        return view("origenes.index",compact('origenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("origenes.create");

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
        $origen=array('descripcion'=>$request->descripcion);
        Origenes::create($origen);
        return redirect("origenes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Origenes  $origenes
     * @return \Illuminate\Http\Response
     */
    public function show(Origenes $origen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Origenes  $origenes
     * @return \Illuminate\Http\Response
     */
    public function edit(Origenes $origen)
    {
        //
        return view("origenes.edit",compact('origen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Origenes  $origenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Origenes $origen)
    {
        //
        $origen->update($request->all());
        return redirect("origenes");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Origenes  $origenes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Origenes $origene)
    {
        //
        $origene->delete();
        return redirect("origenes");
    }
}
