<?php

/*****Admin/Partners*****/
Route::get('/', "PartnersController@index")->name('index');
Route::post('/add', "PartnersController@add")->name('add');
Route::post('/{id}/update', "PartnersController@update")->where('id', '[0-9]+')->name('update');
Route::get('/{id}/delete', "PartnersController@delete")->where('id', '[0-9]+')->name('delete');