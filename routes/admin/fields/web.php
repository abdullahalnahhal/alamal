<?php

/*****Admin/Fields*****/
Route::get('/', "FieldsController@index")->name('index');
Route::post('/add', "FieldsController@add")->name('add');
Route::patch('/{field}/update', "FieldsController@update")->where('id', '[0-9]+')->name('update');
Route::delete('/{id}/delete', "FieldsController@delete")->where('id', '[0-9]+')->name('delete');
