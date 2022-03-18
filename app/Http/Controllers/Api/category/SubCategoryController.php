<?php

namespace App\Http\Controllers\Api\category;

use App\Http\Controllers\Api\Exception;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Validator;
use function response;
use function validateError;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getSubCategory = SubCategory::with(['category'])->paginate(5);
            return response([
                "status" => 'success',
                "data" => $getSubCategory
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
            "category_id"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
//        dd($request->all());
        $subCategory = new SubCategory();
        $subCategory->name = $request->name;
        $subCategory->category_id = $request->category_id;
        $subCategory->image = $request->image;
        if($subCategory->save()){
            return response([
                "status" => "success",
                "message" => "SubCategory Successfully Create"
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
        $subCategory = SubCategory::where("id",$id)->first();
        if($subCategory){
            return response([
                "status" => "success",
                "data" => $subCategory
            ]);
        }else{
            return response(redirect(url('/not-found')), 404);
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
            "category_id"=> "required",
            "name"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
        $subCategory = SubCategory::where("id",$id)->first();
        $subCategory->category_id = $request->category_id ?? $subCategory->category_id;
        $subCategory->name = $request->name ?? $subCategory->name;
        $subCategory->status = $request->status ??  $subCategory->status ;
        if($subCategory->update()){
            return response([
                "status" => "success",
                "message" => "SubCategory Successfully Update"
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
            $subCategory = SubCategory::find($id);

            if ($subCategory){
                $subCategory->delete();
                $subSubCategory = SubSubCategory::where("id",$id);
                if ($subSubCategory){
                    $subSubCategory->delete();
                }
            }else{
                return response(redirect(url('/not-found')), 404);
            }

            return response([
                "status" => "success",
                "message" => "SubCategory Successfully Delete"
            ],200);
        }catch (\Exception $e){
            return response([
                "status" =>"server_error",
                "message" => $e->getMessage()
            ],500);
        }
    }
}
