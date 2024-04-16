<?php

use App\Http\Controllers\AutomatizacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


# Rutas pasando por el controlador.

Route::get('/',HomeController::class);

Route::get('login',LoginController::class);

Route::get('automatizacion',AutomatizacionController::class);


/*
# Rutas sin pasar por el controlador.

Route::get('/', function () {
    return 'Este es el Home';
});

Route::get('login', function () {
    return 'Este es el login';
});

Route::get('automatizacion', function () {
    return 'En esta pagina de la automatizacion';
});

*/
