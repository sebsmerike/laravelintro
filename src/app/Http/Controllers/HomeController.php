<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke () // Se ejecuta cuando se llama una clase como función
    {
        return view("home");
    }
}
