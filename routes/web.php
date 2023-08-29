<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return View ("paginas.index");
});

Route::get('/sobre', function () {
    return View ("paginas.sobre");
});

Route::get('/mundo', function () {
    return View ("paginas.mundo");
});

Route::get('/personagens', function () {
    return View ("paginas.personagens");
});