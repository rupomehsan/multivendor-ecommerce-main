<?php

namespace App\Http\Controllers\Api\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    public function userLogin(Request $request)
    {
        try {
//            dd(request()->all());
            $validator = Validator::make(request()->all(), [
                'email'    => 'required',
                'password' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            if (!auth()->attempt($validator->validated())) {
                return response([
                    'status'  => 'error',
                    'message' => "Credentials doesn't matched...",
                ], 401);
            }
            $accessToken = auth()->user()->createToken('secrets key number');
            return  response([
               "status"=> "success",
                "message"=> "You Are Successfully Log In",
                'data'    => [
                    'token' => 'Bearer ' . $accessToken->plainTextToken,
                    'user'  => auth()->user(),
                ],
            ]);
        } catch (\Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ]);
        }
    }
}
