<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/concessionaria', 'VeiculoController@index');
