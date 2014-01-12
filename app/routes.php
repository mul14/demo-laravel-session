<?php
Route::get('/', function(){
    return Redirect::to('install');
});
Route::get('/install', 'InstallController@step');
Route::post('/install', 'InstallController@setStep');
