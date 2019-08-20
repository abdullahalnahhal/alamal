<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Downloads;

class DownloadsController extends Controller
{
    public function index()
    {
        return Downloads::all();
    }
    public function add()
    {

        Downloads::create(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required'
            ])
        );
    }
    public function update($locale, $download)
    {


        Downloads::find($download)->update(

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
        Downloads::destroy($id);
    }
}
