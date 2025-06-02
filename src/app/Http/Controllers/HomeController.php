<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke () // Se ejecuta cuando se llama una clase como función
    {
        return view("home.home");
    }

    public function alert ($type)
    {
        return view("home.alerts", ['type' => $type]);
    }

    public function layout ($type)
    {
        return view("home.layout", ['type' => $type]);
    }
}
