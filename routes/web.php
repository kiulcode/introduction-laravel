<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Ruta home";
});

Route::get('blog', function (){
   return "Listado de publicaciones";
});

Route::get('blog/{slug}', function ($slug){
    return "Datao = $slug";
});

Route::get('buscar', function (Request $request){
    return $request->all();
});
