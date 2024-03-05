<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\presentacioneController;
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
    return view('template');
});

Route::view('/panel', 'panel.index')->name('panel');

Route::resource('categorias', categoriaController::class);

Route::resource('presentaciones', presentacioneController::class);

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/401', function () {
    return view('page/401');
});

Route::get('/404', function () {
    return view('page/404');
});

Route::get('/500', function () {
    return view('page/500');
});
