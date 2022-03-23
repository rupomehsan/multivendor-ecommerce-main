<?php

namespace App\Http\Controllers\Api\vendor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getVendor = User::where('user_role',3)->paginate(5);
            return response([
                "status" => 'success',
                "data" => $getVendor
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
            $vendor = new User();
            $vendor->name = $request->name;
            $vendor->password = Hash::make($request->description);
            $vendor->phone = $request->phone;
            $vendor->email = $request->email;
            if($vendor->save()){
                return response([
                    "status" => "success",
                    "message" => "Vendor Successfully Create"
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
        //
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
            $getVendor = User::where("id",$id)->first();
            if($getVendor){
                return response([
                    "status" => "success",
                    "data" => $getVendor
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
                "password"=> "required|min:6",
                "confirm_password"=> "required|min:6",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $vendor = User::where("id",$id)->first();
            $vendor->name = $request->name ??  $vendor->name ;
            $vendor->password =Hash::make($request->password)  ?? $vendor->password;
            $vendor->phone = $request->phone ?? $vendor->phone;
            $vendor->image = $request->image ?? $vendor->image;
            $vendor->email = $request->email ??  $vendor->email;
            if($vendor->update()){
                return response([

                    "status" => "success",
                    "message" => "User Successfully Update"
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
            $vendor = User::find($id);
            if($vendor){
                $vendor->delete();
            }
            return response([
                "status" => "success",
                "message" => "Vendor Successfully Delete"
            ],200);
        }catch (\Exception $e){
            return response([
                "status" =>"server_error",
                "message" => $e->getMessage()
            ],500);
        }
    }
}
