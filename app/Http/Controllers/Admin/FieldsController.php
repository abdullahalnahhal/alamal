<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fields;

class FieldsController extends Controller
{
    public function index()
    {
        return Fields::all();
    }
    public function add()
    {


        Fields::create(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required'
            ])
        );
    }
    public function update($locale, $field)
    {
        Fields::find($field)->update(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required'
            ])
        );
    }
    public function delete($locale, $id)
    {
        Fields::destroy($id);
    }
}
