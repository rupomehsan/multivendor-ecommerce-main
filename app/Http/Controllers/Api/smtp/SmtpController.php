<?php

namespace App\Http\Controllers\Api\smtp;

use App\Http\Controllers\Controller;
use App\Models\Smtp;
use Illuminate\Http\Request;
use Validator;

class SmtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getSmtp = Smtp::first();
            return response([
                "status" => 'success',
                "data" => $getSmtp
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

                "host" => "required",
                "port" => "required",
                "encryption" => "required",
                "username" => "required",
                "password" => "required"
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $Smtp = new Smtp();
            $Smtp->name = $request->name;
            $Smtp->port = $request->port;
            $Smtp->encryption = $request->encryption;
            $Smtp->username = $request->username;
            $Smtp->password = $request->password;
            if($Smtp->save()){
                return response([
                    "status" => "success",
                    "message" => "Smtp Successfully Create"
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
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
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
            $getSmtp = Smtp::where("id",$id)->first();
            if($getSmtp){
                return response([
                    "status" => "success",
                    "data" => $getSmtp
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
                "host" => "required",
                "port" => "required",
                "encryption" => "required",
                "username" => "required",
                "password" => "required"
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $Smtp = Smtp::where("id",$id)->first();
            $Smtp->name = $request->name ?? $Smtp->name;
            $Smtp->port = $request->port ?? $Smtp->port ;
            $Smtp->encryption = $request->encryption ?? $Smtp->encryption;
            $Smtp->username = $request->username ??  $Smtp->username;
            $Smtp->password = $request->password ?? $Smtp->password ;
            if($Smtp->update()){
                return response([
                    "status" => "success",
                    "message" => "Smtp Successfully Update"
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

    }
}
