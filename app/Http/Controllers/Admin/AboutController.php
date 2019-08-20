<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TextWord;
use App\AboutSections;

class AboutController extends Controller
{



    public function getAboutWord()
    {
        return TextWord::find(1);
    }
    public function getSections()
    {
        return AboutSections::get();
    }
    public function addWord()
    {

        $data = request()->validate([
            'text_en' => 'required',
            'text_ar' => 'required'
        ]);

        $word = TextWord::firstOrNew([]);


        $word->exists ? $word->update($data) : $word->create($data);
    }
    public function addSection()
    {

        AboutSections::create(

            request()->validate([
                'text_en' => 'required',
                'text_ar' => 'required',
                'title_en' => 'required',
                'title_ar' => 'required',
                'file_path' => 'required'
            ])
        );
    }
    public function deleteSection($locale, $id)
    {
        AboutSections::destroy($id);
    }

    public function getSection($locale, AboutSections $section)
    {
        return $section;
    }

    public function updateSection(Request $request, $locale, $id)
    {
        AboutSections::find($id)->update(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required'
            ])
        );
    }
}
