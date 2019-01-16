<?php
/*****Admin/home*****/
Route::get('/slider', "HomeController@slider")->name('slider.index');
Route::post('/add-to-slider', "HomeController@addToSlider")->name('slider.add');
Route::post('/add-text-to-image-slider', "HomeController@addTextToImageSlider")->name('slider.add.text');
Route::post('/{id}/update-slider-description', "HomeController@updateSliderDescription")->where('id', '[0-9]+')->name('slider.update');
Route::get('/{id}/delete-slider-image', "HomeController@deleteSliderImage")->where('id', '[0-9]+')->name('slider.delete');
