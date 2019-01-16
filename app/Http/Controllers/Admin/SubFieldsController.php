<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubFields;
use App\Fields;

class SubFieldsController extends Controller
{
    public function index()
    {
    	return view("admin.sub-fields.index",[
            'sub_fields'=>SubFields::all(),
            'fields'=>Fields::all(),
        ]);
    }
    public function add(Request $request)
    {
    	$slider = new SubFields();
        $slider->field_id = $request->all()['field'];
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
        $slider = SubFields::find($id);
        $slider->field_id = $request->all()['field'];
        $slider->title_en = $request->all()['title-en'];
        $slider->title_ar = $request->all()['title-ar'];
        $slider->description_en = $request->all()['content-en'];
        $slider->description_ar = $request->all()['content-ar'];
        $slider->save();
        return back();
    }
    public function delete($locale, $id)
    {
        SubFields::find($id)->delete();
        return back();
    }
}
