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
    public function  store(Request $request){
//        dd($request->all());
        $getSettings = Setting::first();
//        dd($getMngNotification);
        if (!$getSettings) {
            try {
                $validate = Validator::make(request()->all(), [
//                    "system_name" => 'required',
//                    "app_version" => 'required',
//                    "mail_address" => 'required',
//                    "update_app" => 'required',
//                    'image' => 'required'
                ]);

//            dd($validate->errors()->messages());

                if ($validate->fails()) {
                    $errors = $validate->errors()->messages();
                    return validateError($errors);
                }
                $setting = new Setting();
                $setting->system_name = $request->system_name;
                $setting->app_version = $request->app_version;
                $setting->mail_address = $request->mail_address;
                $setting->update_app = $request->update_app;
                $setting->developed_by = $request->developed_by;
                $setting->facebook = $request->facebook;
                $setting->instagram = $request->instagram;
                $setting->twitter = $request->twitter;
                $setting->youtube = $request->youtube;
                $setting->copyright = $request->copyright;
                $setting->logo = $request->logo;
                $setting->description = $request->description;
                $setting->privacy_policy = $request->privacy_policy;
                $setting->cookies_policy = $request->cookies_policy;
                $setting->terms_policy = $request->terms_policy;
                if ($setting->save()) {
                    return response([
                        'status' => 'success',
                        'message' => "Settings Successfully Create",
                    ], 200);
                }
            } catch (Exception$e) {
                return response([
                    'status' => 'server_error',
                    'message' => $e->getMessage(),
                ], 500);
            }
        }else{
            try {
                $validate = Validator::make(request()->all(), [
//                    "system_name" => 'required',
//                    "app_version" => 'required',
//                    "mail_address" => 'required',
//                    "update_app" => 'required',
//                    'image' => 'required'
                ]);

//            dd($validate->errors()->messages());

                if ($validate->fails()) {
                    $errors = $validate->errors()->messages();
                    return validateError($errors);
                }
                $setting =  Setting::first();
                $setting->system_name = $request->system_name ?? $setting->system_name;
                $setting->app_version = $request->app_version ?? $setting->app_version;
                $setting->mail_address = $request->email ?? $setting->mail_address;
                $setting->update_app = $request->update_app ?? $setting->update_app;
                $setting->developed_by = $request->developed_by ?? $setting->developed_by;
                $setting->facebook = $request->facebook ?? $setting->facebook;
                $setting->instagram = $request->instagram ?? $setting->instagram;
                $setting->twitter = $request->twitter ?? $setting->twitter;
                $setting->youtube = $request->youtube ?? $setting->youtube;
                $setting->copyright = $request->copyright ?? $setting->copyright;
                $setting->logo = $request->logo ?? $setting->logo;
                $setting->description = $request->description ?? $setting->description;
                $setting->privacy_policy = $request->privacy_policy ?? $setting->privacy_policy;
                $setting->cookies_policy = $request->cookies_policy ?? $setting->cookies_policy;
                $setting->terms_policy = $request->terms_policy ?? $setting->terms_policy;
                if ($setting->update()) {
                    return response([
                        'status' => 'success',
                        'message' => "Settings Successfully Update",
                    ], 200);
                }
            } catch (Exception$e) {
                return response([
                    'status' => 'server_error',
                    'message' => $e->getMessage(),
                ], 500);
            }
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
        return response([
            'status' => 'server_error',

        ], 500);
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


    public function fileUploader(Request $request)
    {
//      dd($request->all());
        $validate = Validator::make(request()->only('file'), [
            'file' => 'required|max:10240',
        ]);
        if ($validate->fails()) {
            return response([
                'status' => 'validation_error',
                'data'   => $validate->errors(),
            ], 422);
        }
        try {

            if (request()->hasFile('file')) {

                foreach ($request->file('file') as $imagedata){

                    $folder    = $request->folder ?? 'all';
                    $imageName = $folder . "/" . time() . '.' . $imagedata->getClientOriginalName();
                    if (config('app.env') === 'production') {
                        $imagedata->move('uploads/' . $folder, $imageName);
                    } else {
                        $imagedata->move(public_path('/uploads/' . $folder), $imageName);
                    }

                    $protocol = request()->secure() ? 'https://' : 'http://';
                    $mainProtocol = $protocol . $_SERVER['HTTP_HOST'] . '/uploads/' . $imageName;
                    $data[] = $mainProtocol;
                }
                $finalImage = json_encode($data);
                return response([
                    'status'  => 'success',
                    'message' => 'File uploaded successfully',
                    'data'    => $finalImage
                ], 200);
            }
        } catch (\Exception$e) {
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
