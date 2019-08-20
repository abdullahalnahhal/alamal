<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Contacts;

class ContactsController extends Controller
{
    public function index()
    {
        return Contacts::all();
    }
    public function update()
    {

        $data = request()->only([
            'address',
            'phone',
            'working_days',
            'email',
            'facebook',
            'instagram',
            'youtube',
            'linkedin',
            'google_plus'
        ]);

        $contacts = Contacts::firstOrNew([]);

        $contacts->exists ? $contacts->update($data) : $contacts->create($data);
    }
}
