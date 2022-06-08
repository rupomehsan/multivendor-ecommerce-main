<?php

namespace App\Http\Controllers\Api\wishlist;

use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index()
    {
        try {
            $clientIp = request()->ip();
            $getWishList = WishList::with(['product'])->where("client_ip", $clientIp)->get();
            $getWishListCount = WishList::with(['product'])->where("client_ip", $clientIp)->count();
            if ($getWishList) {
                return response([
                    "status" => "success",
                    "data" => $getWishList,
                    "count" => $getWishListCount
                ]);
            }
        } catch (\Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }
    }


    public function store(Request $request)
    {
        try {
            $clientIp = request()->ip();
            $existItem = WishList::where("product_id", $request->product_id)->where("client_ip", $clientIp)->first();
            if ($existItem) {
                $existItem = WishList::where("product_id", $request->product_id)->where("client_ip", $clientIp)->delete();
                return response([
                    "status" => "error",
                    "message" => "Item Remove From Wishlist List"
                ]);
            } else {
                $addToWishList = new WishList();
                $addToWishList->client_ip = $clientIp;
                $addToWishList->product_id = $request->product_id;
                $addToWishList->customer_id = $request->customer_id;
                if ($addToWishList->save()) {
                    return response([
                        "status" => "success",
                        "message" => "Successfully Added To The Wishlist List"
                    ]);
                }
            }


        } catch (\Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }
    }

    public function delete($id)
    {
        try {
            $clientIp = request()->ip();
            $Item = WishList::where("id", $id)->where("client_ip", $clientIp)->delete();
            return response([
                "status" => "success",
                "message" => "Item Remove From Wishlist List"
            ]);
        } catch (\Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }
    }
}
