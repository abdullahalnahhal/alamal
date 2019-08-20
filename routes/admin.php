<?php

/*****Admin/change lang*****/
Route::get('/', function ($locale) {
	return view('admin.index');
})->name('index');
Route::post('/login', 'AuthController@login');
Route::middleware(['auth:api'])->get('/info', 'AuthController@info');
Route::middleware(['auth:api'])->post('/logout', 'AuthController@logout');
