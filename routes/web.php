<?php

use App\Http\Controllers\ControllerMessages;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', [ControllerMessages::class, 'mostrar']) -> name('mostrar.mensaje');