<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cineinicio');
});
/*
Route::middleware([ 
    'auth:sanctum',//Esto asegura que el usuario está autenticado utilizando Sanctum, que es un paquete de Laravel para la autenticación de API.
    config('jetstream.auth_session'),//Esto verifica si el usuario tiene una sesión activa. Se relaciona con Jetstream, que maneja la autenticación y el estado de la sesión.
    'verified',// Este middleware asegura que el usuario ha verificado su dirección de correo electrónico. Si no lo ha hecho, será redirigido a una página para que complete la verificación.
])->group(function () {
    Route::get('/cineinicio', function () {//dashboard cineinicio
        return view('cineinicio');
    })->name('cineinicio');
    
});*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('/dashboard', function () {
        $user = Auth::user(); // Obtener el usuario autenticado

        if ($user->role == 'administrador') {
            return view('dashboard');
        }/* elseif ($user->role == 'cajero') {
            return view('cajero.index');
        } */else {
            return view('cineinicio');//dashboard welcome cambia a dashboard para cerrar seccion
        }
    })->name('dashboard');
    
});



/*
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified', 'role',])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/cajero/dashboard', function () {
        return view('cajero.dashboard');
    })->name('cajero.dashboard');

    Route::get('/cliente/dashboard', function () {
        return view('cliente.dashboard');
    })->name('cliente.dashboard');
});*/
