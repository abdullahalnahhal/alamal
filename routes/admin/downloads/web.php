<?php

/*****Admin/Downloads*****/
Route::get('/', "DownloadsController@index")->name('index');
Route::post('/add', "DownloadsController@add")->name('add');
Route::patch('/{download}/update', "DownloadsController@update")->name('update');
Route::delete('/{id}/delete', "DownloadsController@delete")->where('id', '[0-9]+')->name('delete');
