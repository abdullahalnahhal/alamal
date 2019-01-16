<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
    	return view("admin.news.index",[
            'news'=>News::all()
        ]);
    }
    public function add(Request $request)
    {
    	$slider = new News();
    	$slider->title = $request->all()['title'];
        $slider->content = $request->all()['content'];
        $slider->image = $request->all()['file-name'];
    	$slider->publish = $request->all()['publish']??0;
    	$slider->save();
        return back();
    }
    public function edit(Request $reequest, $locale, $id)
    {
        return view("admin.news.edit",[
            'news'=>News::find($id)
        ]);
    }
    public function update(Request $request, $locale, $id)
    {
        $slider = News::find($id);
        $slider->title = $request->all()['title'];
        $slider->content = $request->all()['content'];
        $slider->publish = $request->all()['publish']??0;
        if ($request->all()['file-name']) {
            $slider->image = $request->all()['file-name'];
        }
        $slider->save();
        return redirect(\App::getLocale().'/admin/news');
    }
    public function delete($locale, $id)
    {
        News::find($id)->delete();
        return back();
    }
    public function publish($locale, $id)
    {
        $slider = News::find($id);
        $slider->publish = 1;
        $slider->save();
        return back();
    }
    public function unpublish($locale, $id)
    {
        $slider = News::find($id);
        $slider->publish = 0;
        $slider->save();
        return back();
    }
}
