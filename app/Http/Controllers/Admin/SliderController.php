<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
     public function index()
     {
          return Slider::all();
     }
     public function add()
     {


          Slider::create(

               request()->validate([
                    'title_ar' => 'required',
                    'title_en' => 'required',
                    'text_ar' => 'required',
                    'text_en' => 'required',
                    'file_path' => 'required'
               ])
          );
     }
     public function update($locale, $slider)
     {
          Slider::find($slider)->update(

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
          Slider::destroy($id);
     }
}
