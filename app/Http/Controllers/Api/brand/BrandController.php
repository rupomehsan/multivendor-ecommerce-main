<?php

namespace App\Http\Controllers\Api\brand;

use App\Http\Controllers\Api\Exception;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Validator;
use function response;
use function validateError;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getBrand = Brand::paginate(5);
            return response([
                "status" => 'success',
                "data" => $getBrand
            ],200);
        }catch (Exception $e){
            return response([
                "status" => 'success',
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
        $validator = Validator::make($request->all(),[
            "name"=> "required",
            "brand_category"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
//        dd($request->all());
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->brand_category = $request->brand_category;
        $brand->image = $request->image;
        if($brand->save()){
            return response([
                "status" => "success",
                "message" => "Brand Successfully Create"
            ]);
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
        $getBrand = Brand::where("id",$id)->first();
        if($getBrand){
            return response([
                "status" => "success",
                "data" => $getBrand
            ]);
        }else{
            return response([
                "status" =>'not_found'
            ], 404);
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
        $validator = Validator::make($request->all(),[
            "name"=> "required",
            "brand_category"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
        $brand = Brand::where("id",$id)->first();
        $brand->name = $request->name ??  $brand->name ;
        $brand->brand_category = $request->brand_category ?? $brand->brand_category;
        $brand->image = $request->image ?? $brand->image;
        $brand->status = $request->status ??  $brand->status ;
        if($brand->update()){
            return response([
                "status" => "success",
                "message" => "Brand Successfully Update"
            ]);
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
            $brand = Brand::find($id);
            if($brand){
                $brand->delete();
            }
            return response([
                "status" => "success",
                "message" => "Brand Successfully Delete"
            ],200);
        }catch (\Exception $e){
            return response([
                "status" =>"server_error",
                "message" => $e->getMessage()
            ],500);
        }
    }
}
