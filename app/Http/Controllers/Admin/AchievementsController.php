<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Achievements;

class AchievementsController extends Controller
{
    public function index()
    {
        return Achievements::all();
    }
    public function add()
    {
        Achievements::create(

            request()->validate([
                'title_en' => 'required',
                'title_ar' => 'required',
                'text_en' => 'required',
                'text_ar' => 'required',
                'file_name' => 'required',
            ])
        );
    }
    public function update($locale, Achievements $achievement)
    {


        $achievement->update(

            request()->validate([
                'title_en' => 'required',
                'title_ar' => 'required',
                'text_en' => 'required',
                'text_ar' => 'required',
                'file_name' => 'required',
            ])
        );
    }
    public function delete($locale, $id)
    {

        Achievements::destroy($id);
    }
}
