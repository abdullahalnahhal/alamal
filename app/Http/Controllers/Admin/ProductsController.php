<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Partners;
use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
    	return view("admin.products.index",[
            'partners'=>Partners::all(),
            'products'=>Products::all(),
        ]);
    }
    public function add(Request $request)
    {
    	$slider = new Products();
        $slider->title_en = $request->all()['title-en'];
    	$slider->title_ar = $request->all()['title-ar'];
        $slider->description_en = $request->all()['content-en'];
        $slider->description_ar = $request->all()['content-ar'];
        $slider->file_name = $request->all()['file-name'];
        $slider->partner_id = $request->all()['partner'];
    	$slider->save();
        return back();
    }
    public function update(Request $request, $locale, $id)
    {
        $slider = Products::find($id);
        $slider->title_en = $request->all()['title-en'];
        $slider->title_ar = $request->all()['title-ar'];
        $slider->description_en = $request->all()['content-en'];
        $slider->description_ar = $request->all()['content-ar'];
        $slider->partner_id = $request->all()['partner'];
        $slider->save();
        return back();
    }
    public function delete($locale, $id)
    {
        Products::find($id)->delete();
        return back();
    }
}
