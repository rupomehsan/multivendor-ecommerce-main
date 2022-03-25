<?php

namespace App\Http\Controllers\Api\notification;

use App\Http\Controllers\Controller;
use App\Models\ManageNotification;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        try {
            $getNotifications = Notification::get();
            return response([
                'status' => 'success',
                'data' => $getNotifications,
            ], 200);
        } catch (\Exception$e) {
            return response([
                'status' => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function store(Request $request)
    {
//        dd($request->all());
        try {
            $validator = Validator::make(request()->all(), [
                'title' => 'required',
            ]);

            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $target = new Notification;
            $target->title = $request->title;
            $target->description = $request->description;
            $target->image = $request->description ;
            $target->product_id = $request->product_id;
            $target->external_link = $request->external_link;
            if ($target->save()) {
                return Response::json(['success' => true], 200);
            }
        } catch (\Exception$e) {
            return response([
                'status' => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        try{
            $deliveryPerson = Notification::find($id);
            if($deliveryPerson){
                $deliveryPerson->delete();
                return response([
                    "status" => "success",
                    "message" => "Notification Successfully Delete"
                ],200);
            }else{
                return response([
                    "status" =>'not_found'
                ], 404);
            }
        }catch (\Exception $e){
            return response([
                "status" =>"server_error",
                "message" => $e->getMessage()
            ],500);
        }
    }


    public function sendNotification(Request $request)
    {
//         dd($request->all());
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
        $notification = new Notification;
        $notification->title = $request->title;
        $notification->product_id = $request->product_id ?? '';
        $notification->external_link = $request->external_link ?? '';
        $notification->description = $request->description ?? '';
        $notification->image = $request->image ?? '';
        $notification->save();
        die();
        $api = ManageNotification::first();
        $apiKey = $api->api_key;
        $appId = $api->app_id;

        $content = array(
            "en" => $request->description,
        );
        $headings = array(
            "en" => $request->title, // title
        );
        $hashes_array = array();
        array_push($hashes_array, array(
            "id" => "like-button",
            "text" => "Like",
            "icon" => "http://i.imgur.com/N8SN8ZS.png",
            "url" => "https://yoursite.com",
        ));
        array_push($hashes_array, array(
            "id" => "like-button-2",
            "text" => "Like2",
            "icon" => "http://i.imgur.com/N8SN8ZS.png",
            "url" => "https://yoursite.com",
        ));
        $response = Http::withHeaders([
            'Content-Type' => 'application/json; charset=utf-8',
            'Authorization' => 'Basic ' . $apiKey,
        ])->post('https://onesignal.com/api/v1/notifications', [
            'app_id' => $appId,
            'included_segments' => array(
                'Subscribed Users',
            ),
            // 'data'              => array(
            //     "foo" => "bar",
            // ),
            'headings' => ['en' => $request->title],
            'contents' => $content,
            'url' => 'www.google.com',
            // 'web_buttons'       => $hashes_array,
        ]);
        $jsonResponse = $response->json();
        if (array_key_exists('errors', $jsonResponse)) {
            return response([
                'status' => 'validate_errors',
                'data' => $jsonResponse,
            ]);
        } else {
            return response([
                'status' => 'success',
                'data' => $jsonResponse,
            ]);
        }
    }
}
