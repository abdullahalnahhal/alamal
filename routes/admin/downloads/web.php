<?php

/*****Admin/Downloads*****/
Route::get('/', "DownloadsController@index")->name('index');
Route::post('/add', "DownloadsController@add")->name('add');
Route::post('/{id}/update', "DownloadsController@update")->where('id', '[0-9]+')->name('update');
Route::get('/{id}/delete', "DownloadsController@delete")->where('id', '[0-9]+')->name('delete');
