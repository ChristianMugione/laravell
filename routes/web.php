<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Welcome to this website made with Laravel';
});

//Ruta simple
Route::get('/ruta', function () {
    return 'Welcome to page Ruta';
});

//Ruta 
Route::get('/ruta/loquesea', function () {
    return "Ruta Loquesea";
});

//Ruta con variable
Route::get('/ruta/{variable}', function ($variable) {
    return "La variable es: $variable";
});

//Ruta con mas variables
Route::get('/ruta/{variable}/{otravariable}', function ($variable, $otravariable) {
    return "La variable es: $variable y la otra es: $otravariable";
});

//Variable opcional (hay que darle un valor por defecto)
Route::get('/otraruta/{variable}/{otravariable?}', function ($variable, $otravariable = "Xdefecto") {
    return "La variable es: $variable y la otra es: $otravariable";
});

//CONTROLADORES
//Para crear un controlador se va a la terminal y se pone:
//  > php artisan make:controller NombreController
// por convencion el nombre del controlador debe terminar en Controller
//Ruta que usa controlador
Route::get('home/', HomeController::class);
