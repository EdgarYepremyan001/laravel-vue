<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function auth;
use function response;

class LoginAPIController extends Controller
{
    public function login(Request $request){
        $data = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if(!Auth('web')->attempt($data)){
            return response()->json(["Login false"]);
        }else{
            $accessToken = auth('web')->user()->createToken('authToken')->accessToken;
            return response()->json(["welcome to Home Page"]);
        }

    }
}
