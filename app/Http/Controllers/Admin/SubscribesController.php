<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscribes;

class SubscribesController extends Controller
{
    public function index()
    {
    	return view("admin.subscribes.index",[
            'subscribes'=>Subscribes::all()
        ]);
    }
}
