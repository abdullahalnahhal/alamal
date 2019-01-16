<?php
/*****Admin/About*****/
Route::get('/', "AboutController@index")->name('index');
Route::post('/add-word', "AboutController@addWord")->name('add-word');
Route::post('/add-section', "AboutController@addSection")->name('add-section');
Route::get('/{id}/delete-section', "AboutController@deleteSection")->where('id', '[0-9]+')->name('delete-section');
Route::get('/{id}/get-section', "AboutController@getSection")->where('id', '[0-9]+')->name('get-section');
Route::post('/{id}/update-section', "AboutController@updateSection")->where('id', '[0-9]+')->name('update-section');