<?php

/*****Admin/Partners*****/
Route::get('/', "PartnersController@index")->name('index');
Route::post('/add', "PartnersController@add")->name('add');
Route::patch('/{partner}/update', "PartnersController@update")->name('update');
Route::delete('/{id}/delete', "PartnersController@delete")->where('id', '[0-9]+')->name('delete');
