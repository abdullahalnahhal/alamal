<?php

/*****Admin/News*****/
Route::get('/', "NewsController@index")->name('index');
Route::post('/add', "NewsController@add")->name('add');
Route::patch('/{news}/update', "NewsController@update")->name('update');
Route::delete('/{id}/delete', "NewsController@delete")->where('id', '[0-9]+')->name('delete');
