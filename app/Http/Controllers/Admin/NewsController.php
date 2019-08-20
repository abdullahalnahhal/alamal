<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        return News::all();
    }
    public function add()
    {


        News::create(

            request()->validate([
                'title' => 'required',
                'text' => 'required',
                'published' => 'required',
                'file_path' => 'required'
            ])
        );
    }
    public function update($locale, $news)
    {
        News::find($news)->update(

            request()->validate([
                'title' => 'required',
                'text' => 'required',
                'published' => 'required',
                'file_path' => 'required'
            ])
        );
    }
    public function delete($locale, $id)
    {
        News::destroy($id);
    }
}
