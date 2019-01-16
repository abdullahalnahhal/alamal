<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Downloads;

class DownloadsController extends Controller
{
    public function index()
    {
    	return view("admin.downloads.index",[
            'downloads'=>Downloads::all()
        ]);
    }
    public function add(Request $request)
    {
    	$slider = new Downloads();
        $slider->file_name_en = $request->all()['file-en'];
    	$slider->file_name_ar = $request->all()['file-ar'];

        $slider->file_description_en = $request->all()['description-en'];
        $slider->file_description_ar = $request->all()['description-ar'];

    	$slider->path = $request->all()['file-name'];

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
