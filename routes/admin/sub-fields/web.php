<?php

/*****Admin/Sub Fields*****/
Route::get('/', "SubFieldsController@index")->name('index');
Route::post('/add', "SubFieldsController@add")->name('add');
Route::post('/{id}/update', "SubFieldsController@update")->where('id', '[0-9]+')->name('update');
Route::get('/{id}/delete', "SubFieldsController@delete")->where('id', '[0-9]+')->name('delete');