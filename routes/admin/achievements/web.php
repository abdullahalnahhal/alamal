<?php
/*****Admin/Achievements*****/
Route::get('/', "AchievementsController@index")->name('index');
Route::post('/add', "AchievementsController@add")->name('add');
Route::post('/{id}/update', "AchievementsController@update")->where('id', '[0-9]+')->name('update');
Route::get('/{id}/delete', "AchievementsController@delete")->where('id', '[0-9]+')->name('delete');