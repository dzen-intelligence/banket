<?php

require_once 'app_routes/approutes.php';

Route::get('/', 'HallController@lists')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
