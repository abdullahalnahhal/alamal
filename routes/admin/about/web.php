<?php

/*****Admin/About*****/
Route::get('/get/words', "AboutController@getAboutWord");
Route::get('/get/sections', "AboutController@getSections");
Route::post('/add-word', "AboutController@addWord")->name('add-word');
Route::post('/add-section', "AboutController@addSection")->name('add-section');
Route::delete('/{id}/delete-section', "AboutController@deleteSection")->where('id', '[0-9]+')->name('delete-section');
Route::patch('/{id}/update-section', "AboutController@updateSection")->where('id', '[0-9]+')->name('update-section');
