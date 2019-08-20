<?php

/*****Admin/Products*****/
Route::get('/', "ProductsController@index")->name('index');
Route::post('/add', "ProductsController@add")->name('add');
Route::patch('/{product}/update', "ProductsController@update")->name('update');
Route::delete('/{id}/delete', "ProductsController@delete")->where('id', '[0-9]+')->name('delete');
