<?php

/*****Admin/contacts*****/
Route::get('/', "ContactsController@index")->name('index');
Route::patch('/', "ContactsController@update")->name('update');
