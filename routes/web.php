<?php

Route::get("/",function(){
   return view("layout.layout_admin");
});

        Route::resources([
            'destinos'=>'DestinosController',

            'estados'=>'EstadosController',

            'marcas'=>'MarcasController',

            'municipios'=>'MunicipiosController',

            'origenes'=>'OrigenesController',

            'profesiones'=>'ProfesionesController',

            'vehiculos'=>'VehiculosController',

            'personales'=>'PersonalesController',

            'plantillas'=>'PlantillasController',

            'unidades_admin'=>'UnidadesAdminController',
        ]);


Route::get('destinos/{iddestino}/destroy', [
    'uses' => 'DestinosController@destroy',
    'as' => 'destinos.destroy'
]);

Route::get('estados/{idestado}/destroy', [
    'uses' => 'EstadosController@destroy',
    'as' => 'estados.destroy'
]);

Route::get('marcas/{idmarca}/destroy', [
    'uses' => 'MarcasController@destroy',
    'as' => 'marcas.destroy'
]);

Route::get('municipios/{idmunicipio}/destroy', [
    'uses' => 'MunicipiosController@destroy',
    'as' => 'municipios.destroy'
]);

Route::get('origenes/{idorigen}/destroy', [
    'uses' => 'OrigenesController@destroy',
    'as' => 'origenes.destroy'
]);

Route::get('profesiones/{idprofesion}/destroy', [
    'uses' => 'ProfesionesController@destroy',
    'as' => 'profesiones.destroy'
]);

Route::get('vehiculos/{idvehiculo}/destroy', [
    'uses' => 'VehiculosController@destroy',
    'as' => 'vehiculos3.destroy'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
