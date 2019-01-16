<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TextWord;
use App\AboutSections;

class AboutController extends Controller
{
    public function index()
    {
    	return view("admin.about.index",[
            'word'=>TextWord::find(1),
            'sections'=>AboutSections::get()
        ]);
    }
    public function addWord(Request $request)
    {
        $word = TextWord::find(1);
        if (empty($word)) {
            $word = new TextWord();
        }
        $word->text_en = $request->all()['about-word-text-en'];
        $word->text_ar = $request->all()['about-word-text-ar'];
        $word->save();
        return back();
    }
    public function addSection(Request $request)
    {
    	$section = new AboutSections();
        $section->title_en = $request->all()['section-title-en'];
    	$section->title_ar = $request->all()['section-title-ar'];
        $section->text_en = $request->all()['section-content-en'];
        $section->text_ar = $request->all()['section-content-ar'];
    	$section->file_name = $request->all()['file-name'];
    	$section->save();
        return back();
    }
    public function deleteSection($locale, $id)
    {
        AboutSections::find($id)->delete();
        return back();
    }
    public function getSection($locale, $id)
    {
        return AboutSections::find($id);
    }
    public function updateSection(Request $request, $locale, $id)
    {
    	$section = AboutSections::find($id);
        $section->title_en = $request->all()['section-title-en'];
        $section->title_ar = $request->all()['section-title-ar'];
        $section->text_en = $request->all()['section-content-en'];
        $section->text_ar = $request->all()['section-content-ar'];
    	$section->save();
        return back();
    }
    
}
