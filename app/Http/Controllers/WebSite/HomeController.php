<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactUs as ContactMail;
use App\Slider;
use App\TextWord;
use App\ContactUs;
use App\Subscribes;
use App\Contacts;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slider::all();

        $contacts = Contacts::first();


        return view("website.index", [
            'slides' => $slides,
            'active' => 'Index',
            'contacts' => $contacts,
            'about_text_word' => TextWord::find(1)
        ]);
    }
    public function add(Request $request)
    {
        $contacts = new ContactUs;
        $contacts->name = $request['name'];
        $contacts->email = $request['email'];
        $contacts->subject = $request['subject'];
        $contacts->message = $request['message'];
        $contacts->reply = "";
        $contacts->save();
        // Mail::send('sendMail', [], function($message)
        // {
        //     $message->to($contacts, 'Sender Name')->subject('Welcome!');
        // });
        // Mail::to($contacts->email,)->send(new ContactMail);

        return back();
    }
    public function subscribe(Request $request)
    {
        $subscribes = new Subscribes;
        $subscribes->content = $request['subscribe'];
        $subscribes->save();
        // Mail::send('sendMail', [], function($message)
        // {
        //     $message->to($contacts, 'Sender Name')->subject('Welcome!');
        // });
        // Mail::to($contacts->email,)->send(new ContactMail);

        return back();
    }
}
