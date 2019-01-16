<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
    	return view("admin.contact-us.index",[
            'messages'=>ContactUs::all()
        ]);
    }
    public function message(Request $request, $locale, $id)
    {
        return view("admin.contact-us.message", [
            'message' =>ContactUs::find($id)
        ]);
    }
    public function reply(Request $request, $locale, $id)
    {
        $message = ContactUs::find($id);
        $message->reply = $request->all()['reply']??"";
        $message->save();
        return redirect(\App::getLocale().'/admin/contact-us');
    }
}
