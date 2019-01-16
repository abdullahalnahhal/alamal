<?php

/*****Admin/contact us*****/
Route::get('/', "ContactUsController@index")->name('index');
Route::get('/{id}/message', "ContactUsController@message")->where('id', '[0-9]+')->name('message');
Route::post('/{id}/reply', "ContactUsController@reply")->where('id', '[0-9]+')->name('reply');
