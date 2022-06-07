<?php

namespace App\Http\Controllers\Api\compare;

use App\Http\Controllers\Controller;
use App\Models\CompareList;
use Illuminate\Http\Request;

class CompareListController extends Controller
{
    public function index()
    {
        try {
            $clientIp = request()->ip();
            $getCompareList = CompareList::with(['product','product.category','product.brand','product.reviews'])->where("client_ip", $clientIp)->get();
            $getCompareListCount = CompareList::with(['product'])->where("client_ip", $clientIp)->count();
            if ($getCompareList) {
                return response([
                    "status" => "success",
                    "data" => $getCompareList,
                    "count" => $getCompareListCount
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
            $existItem = CompareList::where("product_id", $request->product_id)->where("client_ip", $clientIp)->first();
            if ($existItem) {
                $existItem = CompareList::where("product_id", $request->product_id)->where("client_ip", $clientIp)->delete();
                return response([
                    "status" => "error",
                    "message" => "Item Remove From Compare List"
                ]);
            } else {
                $addToCompareList = new CompareList();
                $addToCompareList->client_ip = $clientIp;
                $addToCompareList->product_id = $request->product_id;
                $addToCompareList->customer_id = $request->customer_id;
                if($addToCompareList->save()){
                    return response([
                        "status" => "success",
                        "message"=> "Successfully Added To The Compare List"
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


}
