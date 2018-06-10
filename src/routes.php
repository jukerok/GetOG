<?php

// Route::get('/show', function(){
    // return view('getog::form');
// });

Route::get('/show', 'Razz\GetOG\GetOgController@show');

Route::post('/getOG', 'Razz\GetOG\GetOgController@index');
