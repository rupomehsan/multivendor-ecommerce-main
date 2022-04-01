<?php

namespace App\Http\Controllers\Api\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getUser = User::whereJsonContains('user_role',"4")->paginate(5);
            return response([
                "status" => 'success',
                "data" => $getUser
            ],200);
        }catch (Exception $e){
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ],500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(),[
                "name" => "required|min:5",
                "email"=> 'required|email:rfc,dns|unique:users',
                "phone"=> "required",
                "password"=> "required|min:6",
                "confirm_password"=> "required|min:6",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $user = new User();
            $user->name = $request->name;
            $user->password = Hash::make($request->description);
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->image = $request->image;
            $user->user_role= ["4"];
            if($user->save()){
                return response([
                    "status" => "success",
                    "message" => "User Successfully Create"
                ]);
            }
        }catch (Exception $e){
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $getUser = User::where("id",$id)->first();
            if($getUser){
                return response([
                    "status" => "success",
                    "data" => $getUser
                ]);
            }else{
                return response([
                    "status" =>'not_found'
                ], 404);
            }
        }catch (Exception $e){
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ],500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(),[
                "name" => "required|min:5",
                "email"=> 'required|email:rfc,dns|unique:users',
                "phone"=> "required",
                "access"=> "required",
                "password"=> "required|min:6",
                "confirm_password"=> "required|min:6",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $user = User::where("id",$id)->first();
            $user->name = $request->name ??  $user->name ;
            $user->password =Hash::make($request->password)  ?? $user->password;
            $user->phone = $request->phone ?? $user->phone;
            $user->image = $request->image ?? $user->image;
            $user->email = $request->email ??  $user->email;
            if($user->update()){
                return response([
                    "status" => "success",
                    "message" => "Admin Successfully Update"
                ]);
            }
        }catch (Exception $e){
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user = User::find($id);
            if($user){
                $user->delete();
                return response([
                    "status" => "success",
                    "message" => "User Successfully Delete"
                ], 200);
            }else {
                return response([
                    "status" => 'not_found'
                ], 404);
            }
        }catch (\Exception $e){
            return response([
                "status" =>"server_error",
                "message" => $e->getMessage()
            ],500);
        }
    }
}
