<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{


    public function login(Request $request){

        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $user = Auth::user();

            $success['token']=$user->createToken("Login")->accessToken;

            return response()->json([
                'success' => $success
            ],200);
        }

        return response()->json([
            'error' => 'Giriş Yapılamadı.'
        ],401);


    }




}
