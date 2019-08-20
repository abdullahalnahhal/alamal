<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{

     public function upload()
     {

          return [
               'name' => request()->file->store('files')
          ];
     }
     public function remove()
     {

          request()->validate([
               'file_name' => 'required'
          ]);

          Storage::delete(request('file_name'));
     }
}
