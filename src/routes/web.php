<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    //return view('welcome');
    return "Hello world!";
});

/*
Tipos de peticiones
GET
POST
PUT - INSERT
PATCH - UPDATE
DELETE - DELETE
*/

Route::get('/testgetmethod', function (){
    return "get";
});

Route::post('/testpostmethod', function (){
    return "post";
});

// Rutas con variables

Route::get('/product/{idprod}', function ($idprod){
    return "Select * from product where idCat = {$idprod}";
});

// Rutas con multiple vaialbes

Route::get('/skin/{idskin}/{idcolor?}', function ($idskin, $idcolor=null){
    if ($idcolor)
    {
        return "Select * from skin where idSkin = {$idskin} and color = '{$idcolor}'";
    }
    else
    {
        return "Select * from skin where idSkin = {$idskin}";
    }
    
});

// Controllers

Route::get('/home', 
    HomeController::class // __invoke
);

Route::get('/home/{type}', 
    [HomeController::class,
    'alert']
);

// POST

Route::get('/posts', 
    [PostController::class, // Nombre clase Controller
    'index'] // function name
);

Route::get('/post/create', 
    [PostController::class, // Nombre clase Controller
    'create'] // function name
);

Route::get('/post/{idpost}', 
    [PostController::class, // Nombre clase Controller
    'show'] // function name
);
