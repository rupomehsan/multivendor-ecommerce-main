<?php

namespace App\Http\Controllers\Api\recurring;

use App\Http\Controllers\Controller;
use App\Models\Recurring;
use Illuminate\Http\Request;
use Validator;

class RecurringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getRecurring = Recurring::paginate(5);
            return response([
                "status" => 'success',
                "data" => $getRecurring
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
                "name"=> "required",
                "price"=> "required",
                "duration"=> "required",
                "cycle"=> "required",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $Recurring = new Recurring();
            $Recurring->language_id = $request->language_id;
            $Recurring->name = $request->name;
            $Recurring->price = $request->price;
            $Recurring->frequency = $request->frequency;
            $Recurring->duration = $request->duration;
            $Recurring->cycle = $request->cycle;
            $Recurring->trial_status = $request->trial_status;
            $Recurring->trial_price = $request->trial_price;
            $Recurring->trial_frequency = $request->trial_frequency;
            $Recurring->trial_duration = $request->trial_duration;
            $Recurring->trial_cycle = $request->trial_cycle;
            $Recurring->sort_order = $request->sort_order;
            if($Recurring->save()){
                return response([
                    "status" => "success",
                    "message" => "Recurring Successfully Create"
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
            $getRecurring = Recurring::where("id",$id)->first();
            if($getRecurring){
                return response([
                    "status" => "success",
                    "data" => $getRecurring
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
                "name"=> "required",
                "price"=> "required",
                "duration"=> "required",
                "cycle"=> "required",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $Recurring = Recurring::where("id",$id)->first();
            $Recurring->language_id = $request->language_id ?? $Recurring->language_id;
            $Recurring->name = $request->name ?? $Recurring->name;
            $Recurring->price = $request->price ?? $Recurring->price;
            $Recurring->frequency = $request->frequency ?? $Recurring->frequency;
            $Recurring->duration = $request->duration ?? $Recurring->duration;
            $Recurring->cycle = $request->cycle ?? $Recurring->cycle;
            $Recurring->trial_status = $request->trial_status ?? $Recurring->trial_status;
            $Recurring->trial_price = $request->trial_price ?? $Recurring->trial_price;
            $Recurring->trial_frequency = $request->trial_frequency ??  $Recurring->trial_frequency;
            $Recurring->trial_duration = $request->trial_duration ?? $Recurring->trial_duration;
            $Recurring->trial_cycle = $request->trial_cycle ??  $Recurring->trial_cycle;
            $Recurring->sort_order = $request->sort_order ?? $Recurring->sort_order;
            if($Recurring->update()){
                return response([
                    "status" => "success",
                    "message" => "Recurring Successfully Update"
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
            $Recurring = Recurring::find($id);
            if($Recurring){
                $Recurring->delete();
                return response([
                    "status" => "success",
                    "message" => "Recurring Successfully Delete"
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
