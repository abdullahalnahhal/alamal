<?php
/*****Admin/contacts*****/
Route::get('/', "ContactsController@index")->name('index');
Route::post('/', "ContactsController@update")->name('update');