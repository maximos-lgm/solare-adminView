<?php

use Illuminate\Support\Facades\Route;


// login

Route::get('/login', function () { return view('Auth.login');});
// registro de administrador
Route::get('/register', function () { return view('Auth.Registro');});
// -----------------------------------------------------------------------------

 Route::get('/', function () { return view('paginas.Dashboard');});

Route::get('/dashboard', function () {return view('paginas.Dashboard');});


Route::get('/Ventas', function () {return view('paginas.Ventas');});