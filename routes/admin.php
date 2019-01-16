<?php

/*****Admin/change lang*****/
Route::middleware('auth')->get('/', function($locale)
{
	return view('admin.index');
})->name('index');