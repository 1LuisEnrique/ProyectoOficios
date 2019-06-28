<?php

namespace App\Http\Controllers;

use App\Personales;
use App\UnidadesAdmin;
use Illuminate\Http\Request;

class UnidadesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $unidades_admin=UnidadesAdmin::all();
        return view("unidades_admin.index",compact("unidades_admin"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personales = Personales::all();
        return view("unidades_admin.create",compact("personales"));

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
     * @param  \App\UnidadesAdmin  $unidadesAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadesAdmin $unidadesAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnidadesAdmin  $unidadesAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadesAdmin $unidadesAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadesAdmin  $unidadesAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadesAdmin $unidadesAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnidadesAdmin  $unidadesAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadesAdmin $unidadesAdmin)
    {
        //
    }
}
