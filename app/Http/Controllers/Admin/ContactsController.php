<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contacts;

class ContactsController extends Controller
{
    public function index()
    {
    	return view("admin.contacts.index",[
            'contacts'=>Contacts::all()
        ]);
    }
    public function update(Request $request)
    {
        $contacts = Contacts::all();
        foreach ($contacts as $key) {
            $key->value = $request['contact-'.$key->id];
            $key->save();
        }
        return back();
    }
}
