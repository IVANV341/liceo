<?php

use Illuminate\Support\Facades\Route;

// PÁGINA DE INICIO
Route::get('/', function () {
    return view('home');
})->name('home');

// EL COLEGIO
Route::prefix('colegio')->group(function () {
    Route::get('/', function () {
        return view('colegio.index');
    })->name('colegio');
    
    Route::get('/mision-vision', function () {
        return view('colegio.mision');
    })->name('colegio.mision');
    
    Route::get('/politica-de-calidad', function () {
        return view('colegio.politica_de_calidad');
    })->name('colegio.politica_de_calidad');
});

// SERVICIOS
Route::prefix('servicios')->group(function () {
    Route::get('/', function () {
        return view('servicios.index');
    })->name('servicios');
    
    Route::get('/guarderia', function () {
        return view('servicios.guarderia');
    })->name('servicios.guarderia');
    
    Route::get('/preescolar', function () {
        return view('servicios.preescolar');
    })->name('servicios.preescolar');
    
    Route::get('/basica-primaria', function () {
        return view('servicios.basica_primaria');
    })->name('servicios.basica_primaria');
    
    Route::get('/basica-secundaria', function () {
        return view('servicios.basica_secundaria');
    })->name('servicios.basica_secundaria');
    
    Route::get('/educacion-media', function () {
        return view('servicios.educacion_media');
    })->name('servicios.educacion_media');
});

// NOTICIAS
Route::get('/noticias', function () {
    return view('noticias.index');
})->name('noticias');

// ACTIVIDADES
Route::get('/actividades', function () {
    return view('actividades.index');
})->name('actividades');

// GALERÍA
Route::get('/galeria', function () {
    return view('galeria.index');
})->name('galeria');

// PUBLICACIONES
Route::get('/publicaciones', function () {
    return view('publicaciones.index');
})->name('publicaciones');

// CONTACTO
Route::get('/contacto', function () {
    return view('contacto.index');
})->name('contacto');

// ADMISIONES
Route::get('/admisiones', function () {
    return view('admisiones.index');
})->name('admisiones');

// PQRSD
Route::get('/pqrsd', function () {
    return view('pqrsd.index');
})->name('pqrsd');