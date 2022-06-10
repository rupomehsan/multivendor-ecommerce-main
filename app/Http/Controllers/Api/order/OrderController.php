<?php

namespace App\Http\Controllers\Api\order;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
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
            $getOrder = Order::where('session_id', auth()->id())->get();
            return response([
                "status" => 'success',
                "data" => $getOrder
            ], 200);
        } catch (Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }
    }

    private function genUserCode()
    {
        $this->invoice_id = [
            'invoice_id' => mt_rand(1000000000, 9999999999)
        ];
        $rules = ['invoice_id' => 'unique:orders'];
        $validate = Validator::make($this->invoice_id, $rules)->passes();
        return $validate ? $this->invoice_id['invoice_id'] : $this->genUserCode();
    }



    public function orderProduct(Request $request)
    {
        dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
//                "customer_id" => 'required',
//                "full_name" => 'required',
//                "phone" => 'required',
//                "email" => 'required',
//                "address" => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $clientIp = request()->ip();
            $landingClientProduct = [];
            if($request->request_from==="landing"){
                $catItem = explode(",", $request->final_cart_item);
                $i = 0;
                foreach ($catItem as $clientCatItem){
                    $cart = Cart::where("id",$clientCatItem)->where("client_id",$clientIp)->first();
                    $landingClientProduct[$i]['product_id']= $cart->product_id;
                    $landingClientProduct[$i]['quantity']= $cart->quantity;
                    $landingClientProduct[$i]['itemTotal']= $cart->quantity * $cart->price;
                    $i++;
                }
            }
            $order = new Order();
            $order->invoice_id = "IN" . $this->genUserCode();
            $order->sub_total = $request->sub_total;
            $order->discount = $request->discount;
            $order->grand_total = $request->grand_total;
            $order->customer_id = $request->customer_id;
            $order->invoice_prefix = "IN";
            $order->store_id = $request->store_id;
            $order->store_name = $request->store_name;
            $order->store_url = $request->store_url;
            $order->customer_group_id = $request->customer_group_id;
            $order->firstname = $request->firstname;
            $order->lastname = $request->lastname;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            if($request->packaging){
            $order->packaging = $request->packaging->packaging;
            }
            if($request->division){
                $division = json_decode($request->division);
                $order->division= $division->name;
            }
            if($request->district){
                $district = json_decode($request->district);
                $order->district= $district->name;
            }
            if($request->station){
                $station = json_decode($request->station);
                $order->station= $station->name;
            }
            $order->fax = $request->fax;
            $order->custom_field = $request->custom_field;
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
//            $order->order_status_id = $request->order_status_id;
            $order->order_status_id = $request->order_status_id;
            $order->order_status = "pending";
            $order->affiliate_id = $request->affiliate_id;
            $order->commission = $request->commission;
            $order->marketing_id = $request->marketing_id;
            $order->tracking = $request->tracking;
            $order->language_id = $request->language_id;
            $order->currency_id = $request->currency_id;
            $order->currency_code = $request->currency_code;
            $order->currency_value = $request->currency_value;
            $order->ip = $clientIp;
            $order->forwarded_ip = $request->forwarded_ip;
            $order->user_agent = $request->user_agent;
            $order->accept_language = $request->accept_language;
            $order->save();
//            dd($order);
            if ($request->product) {
//                dd($request->product);
                foreach ($request->product as $product) {
                    $orderProduct = new OrderProduct();
                    $orderProduct->customer_id = $request->customer_id;
                    $orderProduct->invoice_id = $order->invoice_id;
                    $orderProduct->product_id = $product['product_id'];
                    $orderProduct->quantity   = $product['quantity'];
                    $orderProduct->item_total = $product['itemTotal'];
                    $orderProduct->save();
                }
                return response([
                    "status" => "success",
                    "message" => "Order Successfully Complete"
                ]);
            }else if($request->request_from==="landing"){
                foreach ($landingClientProduct as $product) {
                    $orderProduct = new OrderProduct();
                    $orderProduct->customer_id = $request->customer_id;
                    $orderProduct->invoice_id = $order->invoice_id;
                    $orderProduct->product_id = $product['product_id'];
                    $orderProduct->quantity   = $product['quantity'];
                    $orderProduct->item_total = $product['itemTotal'];
                    $orderProduct->save();
                }
                return response([
                    "status" => "success",
                    "message" => "Order Successfully Complete"
                ]);
            }

        } catch (\Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "quantity" => "required|min:1",
            ]);
            if ($validator->fails()) {
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
            if ($Order->save()) {
                return response([
                    "status" => "success",
                    "message" => "Successfully Added To Order "
                ]);
            }
        } catch (Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                "quantity" => "required|min:1",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $Order = Order::where("id", $id)->first();
            $Order->api_id = $request->api_id ?? $Order->api_id;
            $Order->customer_id = $request->customer_id ?? $Order->customer_id;
            $Order->product_id = $request->product_id ?? $Order->product_id;
            $Order->recurring_id = $request->recurring_id ?? $Order->recurring_id;
            $Order->option = $request->option ?? $Order->option;
            $Order->quantity = $request->quantity ?? $Order->quantity;
            if ($Order->update()) {
                return response([
                    "status" => "success",
                    "message" => "Order Successfully Update"
                ]);
            }
        } catch (Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Order = Order::find($id);
            if ($Order) {
                $Order->delete();
                return response([
                    "status" => "success",
                    "message" => "Order Successfully Delete"
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
}
