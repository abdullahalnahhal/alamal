<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Partners;

class PartnersController extends Controller
{
    public function index()
    {
    	return view("admin.partners.index",[
            'partners'=>Partners::all(),
        ]);
    }
    public function add(Request $request)
    {
    	$slider = new Partners();
        $slider->title_en = $request->all()['title-en'];
    	$slider->title_ar = $request->all()['title-ar'];
        $slider->description_en = $request->all()['content-en'];
        $slider->description_ar = $request->all()['content-ar'];
        $slider->file_name = $request->all()['file-name'];
    	$slider->save();
        return back();
    }
    public function update(Request $request, $locale, $id)
    {
        $slider = Partners::find($id);
        $slider->title_en = $request->all()['title-en'];
        $slider->title_ar = $request->all()['title-ar'];
        $slider->description_en = $request->all()['content-en'];
        $slider->description_ar = $request->all()['content-ar'];
        $slider->save();
        return back();
    }
    public function delete($locale, $id)
    {
        Partners::find($id)->delete();
        return back();
    }
}
