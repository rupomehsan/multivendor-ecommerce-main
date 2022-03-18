<?php

namespace App\Http\Controllers\Api\category;

use App\Http\Controllers\Api\Exception;
use App\Http\Controllers\Controller;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Validator;
use function response;
use function validateError;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getsubSubCategory = SubSubCategory::with(['category','sub_category'])->paginate(5);
            return response([
                "status" => 'success',
                "data" => $getsubSubCategory
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
            "sub_category_id"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
//        dd($request->all());
        $subSubCategory = new SubSubCategory();
        $subSubCategory->name = $request->name;
        $subSubCategory->category_id = $request->category_id;
        $subSubCategory->sub_category_id = $request->sub_category_id;
        $subSubCategory->image = $request->image;
        if($subSubCategory->save()){
            return response([
                "status" => "success",
                "message" => "SubSubCategory Successfully Create"
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
        $subSubCategory = SubSubCategory::where("id",$id)->first();
        if($subSubCategory){
            return response([
                "status" => "success",
                "data" => $subSubCategory
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
            "sub_category_id"=> "required",
            "category_id"=> "required",
            "name"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
        $subSubCategory = SubSubCategory::where("id",$id)->first();
        $subSubCategory->category_id = $request->category_id ?? $subSubCategory->category_id;
        $subSubCategory->name = $request->name ?? $subSubCategory->name;
        $subSubCategory->status = $request->status ??  $subSubCategory->status ;
        if($subSubCategory->update()){
            return response([
                "status" => "success",
                "message" => "SubSubCategory Successfully Update"
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
            $subSubCategory = SubSubCategory::find($id);
            if ($subSubCategory){
                $subSubCategory->delete();
            }else{
                return response([
                    "status" => "error",
                    "message" => "SubSubCategory  Delete fails"
                ],200);
            }
            return response([
                "status" => "success",
                "message" => "SubSubCategory Successfully Delete"
            ],200);
        }catch (\Exception $e){
            return response([
                "status" =>"server_error",
                "message" => $e->getMessage()
            ],500);
        }
    }
}
