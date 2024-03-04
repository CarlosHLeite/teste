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
    return view('login');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/pagamentos', function () {
    return view('pagamentos');
});

Route::get('/funcionarios', function () {
    return view('funcionarios');
});

Route::get('/permissoes', function () {
    return view('permissoes');
});