<?php

namespace App\Http\Controllers\Api\notification;

use App\Http\Controllers\Controller;
use App\Models\ManageNotification;
use App\Models\Notification;
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


//    public function store(Request $request)
//    {
////         dd($request->all());
//        $validator = Validator::make(request()->all(), [
//            'title' => 'required',
//        ]);
//        if ($validator->fails()) {
//            $errors = $validator->errors()->messages();
//            return validateError($errors);
//        }
//        $notification = new Notification;
//        $notification->title = $request->title;
//        $notification->product_id = $request->product_id ?? null;
//        $notification->external_link = $request->external_link ?? null;
//        $notification->description = $request->description ?? null;
//        $notification->image = $request->image ?? null;
//        $notification->save();
//        die();
//        $api = ManageNotification::first();
//        $apiKey = $api->api_key;
//        $appId = $api->app_id;
//
//        $content = array(
//            "en" => $request->description,
//        );
//        $headings = array(
//            "en" => $request->title, // title
//        );
//        $hashes_array = array();
//        array_push($hashes_array, array(
//            "id" => "like-button",
//            "text" => "Like",
//            "icon" => "http://i.imgur.com/N8SN8ZS.png",
//            "url" => "https://yoursite.com",
//        ));
//        array_push($hashes_array, array(
//            "id" => "like-button-2",
//            "text" => "Like2",
//            "icon" => "http://i.imgur.com/N8SN8ZS.png",
//            "url" => "https://yoursite.com",
//        ));
//        $response = Http::withHeaders([
//            'Content-Type' => 'application/json; charset=utf-8',
//            'Authorization' => 'Basic ' . $apiKey,
//        ])->post('https://onesignal.com/api/v1/notifications', [
//            'app_id' => $appId,
//            'included_segments' => array(
//                'Subscribed Users',
//            ),
//            // 'data'              => array(
//            //     "foo" => "bar",
//            // ),
//            'headings' => ['en' => $request->title],
//            'contents' => $content,
//            'url' => 'www.google.com',
//            // 'web_buttons'       => $hashes_array,
//        ]);
//        $jsonResponse = $response->json();
//        if (array_key_exists('errors', $jsonResponse)) {
//            return response([
//                'status' => 'validate_errors',
//                'data' => $jsonResponse,
//            ]);
//        } else {
//            return response([
//                'status' => 'success',
//                'data' => $jsonResponse,
//            ]);
//        }
//    }


    public function destroy($id)
    {
        try {
            $deliveryPerson = Notification::find($id);
            if ($deliveryPerson) {
                $deliveryPerson->delete();
                return response([
                    "status" => "success",
                    "message" => "Notification Successfully Delete"
                ], 200);
            } else {
                return response([
                    "status" => 'not_found'
                ], 404);
            }
        } catch (\Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ], 500);
        }
    }

    public function manageNotification(Request $request)
    {
        try {
            $manageNotificatin = ManageNotification::first();
            if ($manageNotificatin) {
                $validator = Validator::make(request()->all(), [
                    "api_key" => 'required',
                    "app_id" => 'required'
                ]);
                if ($validator->fails()) {
                    $errors = $validator->errors()->messages();
                    return validateError($errors);
                }
                $manageNotificatin->app_id = $request->app_id ?? $manageNotificatin->app_id;
                $manageNotificatin->api_key = $request->api_key ?? $manageNotificatin->api_key;
                $manageNotificatin->update();
                return response([
                    "status" => "success",
                    "message" => "Notification Api Successfully Update"
                ]);

            } else {
                $validator = Validator::make(request()->all(), [
                    "api_key" => 'required',
                    "app_id" => 'required'
                ]);
                if ($validator->fails()) {
                    $errors = $validator->errors()->messages();
                    return validateError($errors);
                }
                $manageNotificatin = new ManageNotification();
                $manageNotificatin->app_id = $request->app_id;
                $manageNotificatin->api_key = $request->api_key;
                $manageNotificatin->save();
                return response([
                    "status" => "success",
                    "message" => "Notification Api Successfully Create"
                ]);
            }


        } catch (\Exception $e) {
            return response([
                'status' => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function getManageNotification(Request $request)
    {
        try {
            $getMangageNotification = ManageNotification::first();
            return response([
                'status' => 'success',
                'data' => $getMangageNotification,
            ], 200);
        } catch (\Exception$e) {
            return response([
                'status' => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
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







    public function store(Request $request)
//    public function sendMessage($title, $desc, $link, $imageUrl, $api_id, $api_key)
    {
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
        $notification = new Notification;
        $notification->title = $request->title;
        $notification->product_id = $request->product_id ?? 0;
        $notification->external_link = $request->external_link ?? '';
        $notification->description = $request->description ?? '';
        $notification->image = $request->image ?? '';
        $notification->save();
        $api = ManageNotification::first();
        $api_key = $api->api_key;
        $app_id = $api->app_id;
        // var_dump($title, $desc, $link, $imageUrl, $api_id, $api_key);

        $content = array(
            "en" => $notification->description, // description
        );

        $headings = array(
            "en" => $notification->title, // title
        );

        $hashes_array = array();
        array_push($hashes_array, array(
            "id"   => "like-button",
            "text" => "Click Here",
            "icon" => $notification->image,
            "url"  => $notification->external_link,
        ));

        // array_push($hashes_array, array(
        //     "id"   => "like-button-2",
        //     "text" => "Like2",
        //     "icon" => "http://i.imgur.com/N8SN8ZS.png",
        //     "url"  => "https://yoursite.com",
        // ));

        $fields = array(
            'app_id'             => $app_id,
            'included_segments'  => array(
                'Subscribed Users',
            ),
            'data'               => array(
                "foo" => "bar",
            ),
            'headings'           => $headings,
            'contents'           => $content,
            'web_buttons'        => $hashes_array,
            'chrome_web_icon'    => "https://www.filepicker.io/api/file/Q4gCzkkpS6mcbucRJVbG?filename=name.jpg",
            'chrome_web_image'   => "https://www.filepicker.io/api/file/Q4gCzkkpS6mcbucRJVbG?filename=name.jpg",
            'chrome_big_picture' => "https://www.filepicker.io/api/file/Q4gCzkkpS6mcbucRJVbG?filename=name.jpg",
            'image'              => "https://www.filepicker.io/api/file/Q4gCzkkpS6mcbucRJVbG?filename=name.jpg",
        );

        $fields = json_encode($fields);
        // print("\nJSON sent:\n");
        // print($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            "Authorization: Basic $api_key",
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }


}
