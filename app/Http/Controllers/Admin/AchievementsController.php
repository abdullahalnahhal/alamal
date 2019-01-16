<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Achievements;

class AchievementsController extends Controller
{
    public function index()
    {
    	return view("admin.achievements.index",[
            'achievements'=>Achievements::all()
        ]);
    }
    public function add(Request $request)
    {
    	$slider = new Achievements();
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
        $slider = Achievements::find($id);
        $slider->title_en = $request->all()['title-en'];
        $slider->title_ar = $request->all()['title-ar'];
        $slider->description_en = $request->all()['description-en'];
        $slider->description_ar = $request->all()['description-ar'];
        $slider->save();
        return back();
    }
    public function delete($locale, $id)
    {
        Achievements::find($id)->delete();
        return back();
    }
}
