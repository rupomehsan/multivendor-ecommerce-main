<?php

namespace App\Http\Controllers\Api\order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $getOrder = Order::where('session_id',auth()->id())->get();
            return response([
                "status" => 'success',
                "data" => $getOrder
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
                "quantity" => "required|min:1",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $Order = new Order();
            $Order->api_id = $request->api_id;
            $Order->customer_id = $request->customer_id;
            $Order->product_id = $request->product_id;
            $Order->recurring_id = $request->recurring_id;
            $Order->option = $request->option;
            $Order->quantity = $request->quantity;
            if($Order->save()){
                return response([
                    "status" => "success",
                    "message" => "Successfully Added To Order "
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
                "quantity" => "required|min:1",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $Order = Order::where("id",$id)->first();
            $Order->api_id = $request->api_id ?? $Order->api_id;
            $Order->customer_id = $request->customer_id ?? $Order->customer_id;
            $Order->product_id = $request->product_id ?? $Order->product_id ;
            $Order->recurring_id = $request->recurring_id ?? $Order->recurring_id ;
            $Order->option = $request->option ?? $Order->option;
            $Order->quantity = $request->quantity ?? $Order->quantity;
            if($Order->update()){
                return response([
                    "status" => "success",
                    "message" => "Order Successfully Update"
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
            $Order = Order::find($id);
            if($Order){
                $Order->delete();
                return response([
                    "status" => "success",
                    "message" => "Order Successfully Delete"
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
