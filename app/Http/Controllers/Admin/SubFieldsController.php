<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SubFields;

class SubFieldsController extends Controller
{
    public function index()
    {
        return SubFields::all();
    }
    public function add()
    {


        SubFields::create(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required',
                'field_id' => 'required'
            ])
        );
    }
    public function update($locale, $field)
    {
        SubFields::find($field)->update(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required',
                'field_id' => 'required'
            ])
        );
    }
    public function delete($locale, $id)
    {
        SubFields::destroy($id);
    }
}
