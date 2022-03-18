<?php

namespace App\Http\Controllers\Api\category;

use App\Http\Controllers\Api\Exception;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Validator;
use function response;
use function validateError;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getcategory = Category::paginate(5);
            return response([
                "status" => 'success',
                "data" => $getcategory
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
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
//        dd($request->all());
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->meta_tag_title = $request->meta_tag_title;
        $category->meta_tag_desc = $request->meta_tag_desc;
        $category->meta_tag_keyword = $request->meta_tag_keyword;
        $category->image = $request->image;
        if($category->save()){
            return response([
                "status" => "success",
                "message" => "Category Successfully Create"
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
        $getCategory = Category::where("id",$id)->first();
        if($getCategory){
            return response([
                "status" => "success",
                "data" => $getCategory
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
            "name"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
        $category = Category::where("id",$id)->first();
        $category->name = $request->name ??  $category->name ;
        $category->description = $request->description ?? $category->description;
        $category->meta_tag_title = $request->meta_tag_title ?? $category->meta_tag_title ;
        $category->meta_tag_desc = $request->meta_tag_desc ?? $category->meta_tag_desc;
        $category->meta_tag_keyword = $request->meta_tag_keyword ?? $category->meta_tag_keyword;
        $category->image = $request->image ?? $category->image;
        $category->status = $request->status ??  $category->status ;
        if($category->update()){
            return response([
                "status" => "success",
                "message" => "Category Successfully Update"
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
            $category = Category::find($id);
            $subCategory = SubCategory::where('category_id',$id);
            $subSubCategory = SubSubCategory::where('sub_category_id',$id);
            if($category){
                $category->delete();
            }
            if ($subCategory){
                $subCategory->delete();
            }
            if ($subSubCategory){
                $subSubCategory->delete();
            }
            return response([
              "status" => "success",
                "message" => "Category Successfully Delete"
            ],200);
        }catch (\Exception $e){
           return response([
               "status" =>"server_error",
               "message" => $e->getMessage()
           ],500);
        }
    }
}
