<?php

/*****Admin/settings*****/
Route::get('/', "SettingsController@index")->name('index');
Route::post('/update', "SettingsController@update")->name('update');