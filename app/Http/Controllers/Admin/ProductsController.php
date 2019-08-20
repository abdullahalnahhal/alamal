<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::all();
    }
    public function add()
    {


        Products::create(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required',
                'partner_id' => 'required'
            ])
        );
    }
    public function update($locale, $product)
    {

        Products::find($product)->update(

            request()->validate([
                'title_ar' => 'required',
                'title_en' => 'required',
                'text_ar' => 'required',
                'text_en' => 'required',
                'file_path' => 'required',
                'partner_id' => 'required'
            ])
        );
    }
    public function delete($locale, $id)
    {
        Products::destroy($id);
    }
}
