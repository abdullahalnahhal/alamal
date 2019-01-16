<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
{
    public function index()
    {
    	return view("admin.settings.index",[
            'contacts'=>Settings::all()
        ]);
    }
    public function update(Request $request)
    {
        $settings = Settings::all();
        foreach ($settings as $key) {
            $key->value = $request['contact-'.$key->id];
            $key->save();
        }
        return back();
    }
}
