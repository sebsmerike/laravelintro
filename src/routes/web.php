<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Products;

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

Route::get('/home/alert/{type}', 
    [HomeController::class,
    'alert']
);

Route::get('/home/layout/{type}', 
    [HomeController::class,
    'layout']
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

// TEST DB

Route::get('/test/newproduct', function (){
    $product = new Products;

    $product->name = "Prueba";
    $product->price = 99.99;
    $product->scriptable = "009-ja";
    $product->desc = "Producto de prueb, yeei.";

    $product->save();

    return $product;
});

Route::get('/test/getproductid', function (){
    $product = Products::find(2);

    return $product;
});

Route::get('/test/getproductname', function (){
    $product = Products::where('name', 'Prueba')
                            ->first(); // primer registro

    return $product;
});

Route::get('/test/getproducts', function (){
    $product = Products::where('id', '>', 1) // evaluar las condición 
                        ->take(2) // Número de registros
                        ->get(); // Obtener varios registros

    return $product;
});