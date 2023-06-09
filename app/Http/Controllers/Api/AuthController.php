<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use App\CmsUser;
use Auth;
use JwtAuth;

class AuthController extends Controller
{
  public function login(Request $request){
    $credentials = $request->only('email','password');
        if (Auth::guard('api')->attempt($credentials)) {
          $user = Auth::guard('api')->user();
          $jwt = JwtAuth::generateToken($user);
          $success = true;
          return compact('success','user','jwt');

        }else {
          $success = false;
          $message = "Invalid credentials";
          return compact('success','message');
        }
}

}
