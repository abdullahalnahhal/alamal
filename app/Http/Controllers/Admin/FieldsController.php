<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fields;

class FieldsController extends Controller
{
    public function index()
    {
    	return view("admin.fields.index",[
            'fields'=>Fields::all()
        ]);
    }
    public function add(Request $request)
    {
    	$field = new Fields();
        $field->title_en = $request->all()['section-title-en'];
    	$field->title_ar = $request->all()['section-title-ar'];
        $field->description_en = $request->all()['section-content-en'];
        $field->description_ar = $request->all()['section-content-ar'];
    	$field->file_name = $request->all()['file-name'];
    	$field->save();
        return back();
    }
    public function update(Request $request, $locale, $id)
    {
        $field = Fields::find($id);
        $field->title_en = $request->all()['title-en'];
        $field->title_ar = $request->all()['title-ar'];
        $field->description_en = $request->all()['description-en'];
        $field->description_ar = $request->all()['description-ar'];
        $field->save();
        return back();
    }
    public function delete($locale, $id)
    {
        Fields::find($id)->delete();
        return back();
    }
}
