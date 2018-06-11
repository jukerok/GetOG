<?php

Route::get('/showForm', 'Razz\GetOG\GetOgController@show');


Route::post('/getOG', 'Razz\GetOG\GetOgController@index');
