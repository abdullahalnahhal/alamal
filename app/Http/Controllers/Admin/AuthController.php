<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use App\User;

class AuthController extends Controller
{

     public function login(Request $request)
     {


          $this->validate($request, [
               'email' => 'required',
               'password' => 'required'
          ]);

          $user = User::whereEmail($request->input('email'))->first();


          if (!$user) return response('Wrong Creds', 500);

          if ((Hash::check($request->input('password'), $user->password))) {

               $token = $user->createToken('alamal')->accessToken;

               return response()->json([
                    'user' => $user,
                    'access_token' => $token
               ]);
          } else {
               return response('Wrong Creds', 500);
          }
     }

     public function info(Request $request)
     {

          $user = $request->user();


          $user['roles'] = ['admin'];

          return ['data' => $user];
     }

     public function logout(Request $request)
     {

          return response('', 200);
     }
}
