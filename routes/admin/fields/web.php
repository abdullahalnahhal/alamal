<?php
/*****Admin/Fields*****/
Route::get('/', "FieldsController@index")->name('index');
Route::post('/add', "FieldsController@add")->name('add');
Route::post('/{id}/update', "FieldsController@update")->where('id', '[0-9]+')->name('update');
Route::get('/{id}/delete', "FieldsController@delete")->where('id', '[0-9]+')->name('delete');