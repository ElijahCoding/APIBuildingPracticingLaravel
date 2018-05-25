<?php

use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::post('/register', 'RegisterController@register');
Route::post('/login', 'LoginController@login');
