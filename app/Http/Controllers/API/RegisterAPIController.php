<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function response;

class RegisterAPIController extends Controller
{
    public function register(Request  $request)
    {
        $data = [
            'name' => $request['name'],
            'surname' => $request['surname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ];
        $register = User::create($data);
        if($register){
            return response()->json(['msg' => 'You are successfully registered']);
        }else{
            return response()->json(['msg' => 'You are not registered']);
        }

    }
}
