<?php

/*****Admin/Downloads*****/
Route::post('/upload', "MediaController@upload")->name('upload');
Route::delete('/remove', "MediaController@remove")->name('remove');
