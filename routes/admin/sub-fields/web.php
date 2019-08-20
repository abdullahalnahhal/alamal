<?php

/*****Admin/Sub Fields*****/
Route::get('/', "SubFieldsController@index")->name('index');
Route::post('/add', "SubFieldsController@add")->name('add');
Route::patch('/{id}/update', "SubFieldsController@update")->where('id', '[0-9]+')->name('update');
Route::delete('/{id}/delete', "SubFieldsController@delete")->where('id', '[0-9]+')->name('delete');
