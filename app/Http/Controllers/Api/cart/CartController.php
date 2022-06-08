<?php

namespace App\Http\Controllers\Api\cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        try {

            $clientIP = request()->ip();
//            dd($clientIP);
            $validator = Validator::make($request->all(), [
                "quantity" => "required|min:1"
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $cartExist = Cart::where("product_id", $request->product_id)->where('client_id', $clientIP)->first();
            $product = Product::where("id", $request->product_id)->first();
            if ($cartExist) {
                $cartExist->quantity = $request->quantity;
                $cartExist->size = $request->size[0]??null;
                $cartExist->color = $request->color[0]??null;
                if($cartExist->update()){
                    return response([
                        "status" => "error",
                        "message" => "Product Quantity Update"
                    ]);
                }

            } else {
                $cart = new Cart();
                $cart->api_id = $request->api_id;
                $cart->customer_id = $request->customer_id;
                $cart->session_id = $request->session_id;
                $cart->shop_id = $request->shop_id;
                $cart->product_id = $request->product_id;
                $cart->recurring_id = $request->recurring_id;
                $cart->client_id = $clientIP;
                $cart->option = $request->option;
                $cart->quantity = $request->quantity;
                $cart->price = $product->price;
                $cart->size = $request->size[0]??null;
                $cart->color = $request->color[0]??null;
                if ($cart->save()) {
                    return response([
                        "status" => "success",
                        "message" => "Successfully Added To Cart "
                    ]);
                }
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
            $order = Cart::where("id", $id)->first();
            $order->api_id = $request->api_id ?? $order->api_id;
            $order->customer_id = $request->customer_id ?? $order->customer_id;
            $order->product_id = $request->product_id ?? $order->product_id;
            $order->recurring_id = $request->recurring_id ?? $order->recurring_id;
            $order->option = $request->option ?? $order->option;
            $order->quantity = $request->quantity ?? $order->quantity;
            if ($order->update()) {
                return response([
                    "status" => "success",
                    "message" => "Cart Successfully Update"
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
            $order = Cart::find($id);
            if ($order) {
                $order->delete();
                return response([
                    "status" => "success",
                    "message" => "Cart Successfully Delete"
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

    public function getClientCart()
    {
        try {
            $clientIP = request()->ip();
            $cart = Cart::with(["product"])->where('client_id', $clientIP)->get();
            $countCartItem = Cart::with(["product"])->where('client_id', $clientIP)->count();
            return response([
                "status" => "success",
                "data" => $cart,
                "count" => $countCartItem,
            ]);
        } catch (\Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ], 500);
        }
    }

    public function ClientCartUpdate(Request $request)
    {
        try {
            $clientIP = request()->ip();
            $cart = Cart::where('client_id', $clientIP)->where("id", $request->id)->first();
            $cart->quantity = $request->quantity;
            if ($cart->update()) {
                return response([
                    "status" => "success",
                    "message" => "Quantity Successfully Update"
                ]);
            }

        } catch (\Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ], 500);
        }
    }

    public function ClientCartDelete(Request $request)
    {
        try {
            $clientIP = request()->ip();
            $cart = Cart::where('client_id', $clientIP)->where("id", $request->id);
            if ($cart->delete()) {
                return response([
                    "status" => "success",
                    "message" => "Item Successfully Delete"
                ]);
            }

        } catch (\Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ], 500);
        }
    }

    public function getClientCartItem(Request $request)
    {
        try {
            $clientIP = request()->ip();
            $cart = Cart::with(["product","store_details"])->where('client_id', $clientIP)->get();
            if ($cart) {
                return response([
                    "status" => "success",
                    "data" => $cart
                ]);
            }
        } catch (\Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ], 500);
        }
    }


}
