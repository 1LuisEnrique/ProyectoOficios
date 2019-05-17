<?php

Route::get("/",function(){
   return view("layout.layout");
});

Route::resource('destinos','DestinosController');

Route::resource('estados','EstadosController');

Route::resource('marcas','MarcasController');

Route::resource('municipios','MunicipiosController');

Route::resource('origenes','OrigenesController');

Route::resource('profesiones','ProfesionesController');

Route::resource('vehiculos','VehiculosController');

Route::resource('personales','PersonalesController');

Route::resource('plantillas','PlantillasController');









