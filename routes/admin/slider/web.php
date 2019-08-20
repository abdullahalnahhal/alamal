<?php

/*****Admin/News*****/
Route::get('/', "SliderController@index")->name('index');
Route::post('/add', "SliderController@add")->name('add');
Route::patch('/{slider}/update', "SliderController@update")->name('update');
Route::delete('/{id}/delete', "SliderController@delete")->where('id', '[0-9]+')->name('delete');
