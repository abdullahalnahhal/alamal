<?php

/*****Admin/News*****/
Route::get('/', "NewsController@index")->name('index');
Route::post('/add', "NewsController@add")->name('add');
Route::get('/{id}/edit', "NewsController@edit")->where('id', '[0-9]+')->name('edit');
Route::post('/{id}/update', "NewsController@update")->where('id', '[0-9]+')->name('update');
Route::get('/{id}/delete', "NewsController@delete")->where('id', '[0-9]+')->name('delete');
Route::get('/{id}/publish', "NewsController@publish")->where('id', '[0-9]+')->name('publish');
Route::get('/{id}/unpublish', "NewsController@unpublish")->where('id', '[0-9]+')->name('unpublish');