<?php

namespace App\Http\Controllers\Api\contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    public function store(Request  $request){
        try {
            $validator = Validator::make($request->all(),[
                "name" =>"required",
                "email"=> "required",
                "subject"=> "required",
                "message"=> "required",
            ]);
            if($validator->fails()){
                $error = $validator->errors()->messages();
                return validateError($error);
            }
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email= $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            if($contact->save()){
                return  response([
                    "status"=> "success",
                    "message"=> "You Message Successfully Send..."
                ]);
            }

        }catch (\Exception $e){
            return response([
                "status" => "server_error",
                "message"=> $e->getMessage()
            ]);
        }
    }
}
