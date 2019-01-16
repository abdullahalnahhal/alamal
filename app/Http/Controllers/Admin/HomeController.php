<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function slider()
    {
    	return view("admin.home.slider", [
    		'title'=>'Slider',
    		'slides'=>Slider::all()
    	]);
    }
    public function addToSlider(Request $request)
    {

    	$file = $request->file('file');
    	$name = $name = uniqid() . '.' . $file->getClientOriginalExtension();
    	$file->move( public_path()."/slider",$name);
    	return['name' => $name];
    }
    public function addTextToImageSlider(Request $request)
    {
    	$slider = new Slider();
    	$slider->name = $request->all()['file-name'];
        $slider->description_en = $request->all()['description-en'];
    	$slider->description_ar = $request->all()['description-ar'];
    	$slider->save();
        return back();
    }
    public function updateSliderDescription(Request $request,$locale ,$id)
    {
    	$slider = Slider::find($id);
        $slider->description_en = $request->all()['description-en'];
    	$slider->description_ar = $request->all()['description-ar'];
    	$slider->save();
        return back();
    }
    public function deleteSliderImage($locale, $id)
    {
    	Slider::find($id)->delete();
        return back();
    }
}
