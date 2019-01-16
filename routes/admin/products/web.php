<?php

/*****Admin/Products*****/
Route::get('/', "ProductsController@index")->name('index');
Route::post('/add', "ProductsController@add")->name('add');
Route::post('/{id}/update', "ProductsController@update")->where('id', '[0-9]+')->name('update');
Route::get('/{id}/delete', "ProductsController@delete")->where('id', '[0-9]+')->name('delete');