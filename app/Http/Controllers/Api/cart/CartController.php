<?php

namespace App\Http\Controllers\Api\cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Validator;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

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

            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $order = new Order();
            $order->invoice_no = $request->invoice_no;
            $order->invoice_prefix = $request->invoice_prefix;
            $order->store_id = $request->store_id;
            $order->store_name = $request->store_name;
            $order->store_url = $request->store_url;
            $order->customer_id = $request->customer_id;
            $order->customer_group_id = $request->customer_group_id;
            $order->firstname = $request->firstname;
            $order->lastname = $request->lastname;
            $order->email = $request->email;
            $order->phone = $request->customer_id;
            $order->fax = $request->customer_id;
            $order->custom_field = $request->customer_id;
            $order->payment_firstname = $request->payment_firstname;
            $order->payment_lastname = $request->payment_lastname;
            $order->payment_company = $request->payment_company;
            $order->payment_address_1 = $request->payment_address_1;
            $order->payment_address_2 = $request->payment_address_2;
            $order->payment_city = $request->payment_city;
            $order->payment_postcode = $request->payment_postcode;
            $order->payment_country = $request->payment_country;
            $order->payment_country_id = $request->payment_country_id;
            $order->payment_zone = $request->payment_zone;
            $order->payment_zone_id = $request->payment_zone_id;
            $order->payment_address_format = $request->payment_address_format;
            $order->payment_custom_field = $request->payment_custom_field;
            $order->payment_method = $request->payment_method;
            $order->payment_code = $request->payment_code;
            $order->shipping_firstname = $request->shipping_firstname;
            $order->shipping_lastname = $request->shipping_lastname;
            $order->shipping_company = $request->shipping_company;
            $order->shipping_address_1 = $request->shipping_address_1;
            $order->shipping_address_2 = $request->shipping_address_2;
            $order->shipping_city = $request->shipping_city;
            $order->shipping_postcode = $request->shipping_postcode;
            $order->shipping_country = $request->shipping_country;
            $order->shipping_country_id = $request->shipping_country_id;
            $order->shipping_zone = $request->shipping_zone;
            $order->shipping_zone_id = $request->shipping_zone_id;
            $order->shipping_address_format = $request->shipping_address_format;
            $order->shipping_custom_field = $request->shipping_custom_field;
            $order->shipping_method = $request->shipping_method;
            $order->shipping_code = $request->shipping_code;
            $order->comment = $request->comment;
            $order->total = $request->total;
            $order->order_status_id = $request->order_status_id;
            $order->affiliate_id = $request->affiliate_id;
            $order->commission = $request->commission;
            $order->marketing_id = $request->marketing_id;
            $order->tracking = $request->tracking;
            $order->language_id = $request->language_id;
            $order->currency_code = $request->currency_code;
            $order->currency_value = $request->currency_value;
            $order->ip = $request->ip;
            $order->user_agent = $request->user_agent;
            $order->accept_language = $request->accept_language;
            $order->forwarded_ip = $request->forwarded_ip;
            if($order->save()){
                return response([
                    "status" => "success",
                    "message" => "Successfully Added To Cart "
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
            $order = Cart::where("id",$id)->first();
            $order->api_id = $request->api_id ?? $order->api_id;
            $order->customer_id = $request->customer_id ?? $order->customer_id;
            $order->product_id = $request->product_id ?? $order->product_id ;
            $order->recurring_id = $request->recurring_id ?? $order->recurring_id ;
            $order->option = $request->option ?? $order->option;
            $order->quantity = $request->quantity ?? $order->quantity;
            if($order->update()){
                return response([
                    "status" => "success",
                    "message" => "Cart Successfully Update"
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
            $order = Cart::find($id);
            if($order){
                $order->delete();
                return response([
                    "status" => "success",
                    "message" => "Cart Successfully Delete"
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
