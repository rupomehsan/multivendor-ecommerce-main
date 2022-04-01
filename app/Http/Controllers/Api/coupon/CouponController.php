<?php

namespace App\Http\Controllers\Api\coupon;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getCoupne = Coupon::paginate(5);
            return response([
                "status" => 'success',
                "data" => $getCoupne
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
        return response([
            "status" => 'server_error',
        ],500);

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
                "coupon_name" => "required",
                "type"=> 'required',
                "per_user_use"=> "required",
                "amount"=> "required",
                "start_date"=> "required",
                "end_date"=> "required",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $coupon = new Coupon();
            $coupon->coupon_name = $request->coupon_name;
            $coupon->type =$request->type;
            $coupon->per_user_use = $request->per_user_use;
            $coupon->amount = $request->amount;
            $coupon->start_date = $request->start_date;
            $coupon->end_date = $request->end_date;
            if($coupon->save()){
                return response([
                    "status" => "success",
                    "message" => "Coupon Successfully Create"
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
            $getCoupon = Coupon::where("id",$id)->first();
            if($getCoupon){
                return response([
                    "status" => "success",
                    "data" => $getCoupon
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
                "coupon_name" => "required",
                "type"=> 'required',
                "per_user_use"=> "required",
                "amount"=> "required",
                "start_date"=> "required",
                "end_date"=> "required",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $coupon = Coupon::where("id",$id)->first();
            $coupon->coupon_name = $request->coupon_name ??  $coupon->coupon_name ;
            $coupon->type =$request->type ?? $coupon->type;
            $coupon->per_user_use = $request->per_user_use ?? $coupon->per_user_use;
            $coupon->amount = $request->amount ?? $coupon->amount;
            $coupon->start_date = $request->start_date ??  $coupon->start_date;
            $coupon->end_date = $request->end_date ??  $coupon->end_date;
            $coupon->status = $request->status ??  $coupon->status;
            if($coupon->update()){
                return response([

                    "status" => "success",
                    "message" => "Coupon Successfully Update"
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
            $coupon = Coupon::find($id);
            if($coupon){
                $coupon->delete();
                return response([
                    "status" => "success",
                    "message" => "Coupons Successfully Delete"
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
