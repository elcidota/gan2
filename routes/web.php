<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get(url: '/login', action: 'App\Http\Controllers\LoginController@index');
Route:: post(url: '/login', action: 'App\Http\Controllers\LoginController@auth');
Route:: get(url: '/Inventory', action: 'App\Http\Controllers\InventoryController@index');
