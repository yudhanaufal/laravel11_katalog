<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/nugget', function () {
    return view('nugget');
});
Route::get('/kentang', function () {
    return view('kentang');
});
Route::get('/olahanikan', function () {
    return view('olahanikan');
});
Route::get('/kebab_burger', function () {
    return view('kebab_burger');
});
Route::get('/sosis', function () {
    return view('sosis');
});
Route::get('/gorengan', function () {
    return view('gorengan');
});
Route::get('/dry', function () {
    return view('dry');
});