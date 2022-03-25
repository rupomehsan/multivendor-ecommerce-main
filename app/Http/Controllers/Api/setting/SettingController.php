<?php

namespace App\Http\Controllers\Api\setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getSetting = Setting::first();
            return response([
                "status" => 'success',
                "data" => $getSetting
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
                'system_name' => "required",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $Setting = new Setting();
            $Setting->system_name = $request->system_name;
            $Setting->app_version = $request->app_version;
            $Setting->mail_address = $request->mail_address;
            $Setting->update_app = $request->update_app;
            $Setting->developed_by = $request->developed_by;
            $Setting->facebook = $request->facebook;
            $Setting->instagram = $request->instagram;
            $Setting->twitter = $request->twitter;
            $Setting->youtube = $request->youtube;
            $Setting->copyright = $request->copyright;
            $Setting->logo = $request->logo;
            $Setting->description = $request->description;
            $Setting->privacy_policy = $request->privacy_policy;
            $Setting->cookies_policy = $request->cookies_policy;
            $Setting->terms_policy = $request->terms_policy;
            if($Setting->save()){
                return response([
                    "status" => "success",
                    "message" => "Setting Successfully Create"
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
            $getSetting = Setting::where("id",$id)->first();
            if($getSetting){
                return response([
                    "status" => "success",
                    "data" => $getSetting
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
                'system_name' => "required",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $Setting = Setting::where("id",$id)->first();
            $Setting->system_name = $request->system_name ?? $Setting->system_name;
            $Setting->app_version = $request->app_version ?? $Setting->app_version;
            $Setting->mail_address = $request->mail_address ?? $Setting->mail_address;
            $Setting->update_app = $request->update_app ?? $Setting->update_app;
            $Setting->developed_by = $request->developed_by ?? $Setting->developed_by;
            $Setting->facebook = $request->facebook ?? $Setting->facebook;
            $Setting->instagram = $request->instagram ?? $Setting->instagram;
            $Setting->twitter = $request->twitter  ?? $Setting->twitter;
            $Setting->youtube = $request->youtube  ?? $Setting->youtube;
            $Setting->copyright = $request->copyright  ?? $Setting->copyright;
            $Setting->logo = $request->logo  ?? $Setting->logo;
            $Setting->description = $request->description  ?? $Setting->description;
            $Setting->privacy_policy = $request->privacy_policy  ?? $Setting->privacy_policy;
            $Setting->cookies_policy = $request->cookies_policy  ?? $Setting->cookies_policy;
            $Setting->terms_policy = $request->terms_policy  ?? $Setting->terms_policy;
            if($Setting->update()){
                return response([
                    "status" => "success",
                    "message" => "Settings Successfully Update"
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
