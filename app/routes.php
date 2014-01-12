<?php

Route::get('/install', 'InstallController@step');
Route::post('/install', 'InstallController@setStep');
