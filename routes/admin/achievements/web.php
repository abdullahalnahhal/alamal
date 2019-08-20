<?php

/*****Admin/Achievements*****/
Route::get('/', "AchievementsController@index")->name('index');
Route::post('/add', "AchievementsController@add")->name('add');
Route::post('/{achievement}/update', "AchievementsController@update")->where('id', '[0-9]+')->name('update');
Route::delete('/{id}/delete', "AchievementsController@delete")->where('id', '[0-9]+')->name('delete');
