<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cotizar', function () {
    return view('cotizar');
})->name('cotizar');

Route::get('/admin', function () {
    return view('admin.principal');
})->name('admin.principal');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/principal', function () {
        return view('principal');
    })->name('dashboard');
    
    Route::get('/mis_seguros', function () {
        return view('user.mis_seguros');
    })->name('user.mis_seguros');

    Route::get('/vehiculos', function () {
        return view('user.vehiculo');
    })->name('user.vehiculo');

    Route::get('/vida', function () {
        return view('user.vida');
    })->name('user.vida');

    Route::get('/vivienda', function () {
        return view('user.vivienda');
    })->name('user.vivienda');
});
