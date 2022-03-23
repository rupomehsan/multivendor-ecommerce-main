<?php

namespace App\Http\Controllers\Api\deliveryperson;

use App\Http\Controllers\Controller;
use App\Models\DeliveryPerson;
use Illuminate\Http\Request;
use Validator;

class DeliveryPersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getDeliveryPerson = DeliveryPerson::paginate(5);
            return response([
                "status" => 'success',
                "data" => $getDeliveryPerson
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
                "name" => "required",
                "email"=> 'required|email:rfc,dns|unique:delivery_people',
                "phone"=> "required",
                "identity_type"=> "required",
                "identity_number"=> "required",

            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $deliveryPerson = new DeliveryPerson();
            $deliveryPerson->name = $request->name;
            $deliveryPerson->email =$request->email;
            $deliveryPerson->phone = $request->phone;
            $deliveryPerson->identity_type = $request->identity_type;
            $deliveryPerson->identity_number = $request->identity_number;
            if($deliveryPerson->save()){
                return response([
                    "status" => "success",
                    "message" => "DeliveryPerson Successfully Create"
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
            $getDeliveryPerson = DeliveryPerson::where("id",$id)->first();
            if($getDeliveryPerson){
                return response([
                    "status" => "success",
                    "data" => $getDeliveryPerson
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
                "name" => "required",
                "email"=> 'required|email:rfc,dns|unique:delivery_people',
                "phone"=> "required",
                "identity_type"=> "required",
                "identity_number"=> "required",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $deliveryPerson = DeliveryPerson::where("id",$id)->first();
            $deliveryPerson->name = $request->name ??  $deliveryPerson->name ;
            $deliveryPerson->email =$request->email ?? $deliveryPerson->email;
            $deliveryPerson->phone = $request->phone ?? $deliveryPerson->phone;
            $deliveryPerson->identity_type = $request->identity_type ?? $deliveryPerson->identity_type;
            $deliveryPerson->identity_number = $request->identity_number ??  $deliveryPerson->identity_number;
            if($deliveryPerson->update()){
                return response([
                    "status" => "success",
                    "message" => "DeliveryPerson Successfully Update"
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
            $deliveryPerson = DeliveryPerson::find($id);
            if($deliveryPerson){
                $deliveryPerson->delete();
            }
            return response([
                "status" => "success",
                "message" => "DeliveryPerson Successfully Delete"
            ],200);
        }catch (\Exception $e){
            return response([
                "status" =>"server_error",
                "message" => $e->getMessage()
            ],500);
        }
    }
}
