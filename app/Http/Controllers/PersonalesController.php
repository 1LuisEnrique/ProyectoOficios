<?php

namespace App\Http\Controllers;

use App\Personales;
use App\Profesiones;
use Illuminate\Http\Request;

class PersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personales=Personales::all();
        return view("Personales.index",compact("personales"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $profesiones= Profesiones::all();
        return view("Personales.create",compact("profesiones"));
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
        Personales::create($request->all());
        return redirect("personales");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personales  $personales
     * @return \Illuminate\Http\Response
     */
    public function show(Personales $personales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personales  $personales
     * @return \Illuminate\Http\Response
     */
    public function edit(Personales $personales)
    {
        //
        $profesiones = Profesiones::all();
        return view("Personales.edit",compact('personal','profesiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personales  $personales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personales $personal)
    {
        //
        $personal->update($request->all());
        return redirect("personales");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personales  $personales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personales $personal)
    {
        //
        $personal->delete();

        //return redirect("profesiones");
        //Vehiculos::destroy($id);
        //return redirect("origenes");
        return redirect("personales");
    }
}
