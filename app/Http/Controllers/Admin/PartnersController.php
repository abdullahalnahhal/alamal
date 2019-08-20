<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Partners;

class PartnersController extends Controller
{
    public function index()
    {
        return Partners::all();
    }
    public function add()
    {


        Partners::create(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required'
            ])
        );
    }
    public function update($locale, $partner)
    {
        Partners::find($partner)->update(

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
        Partners::destroy($id);
    }
}
