<?php

namespace App\Http\Controllers\Api\product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getProduct = Product::paginate(5);
            return response([
                "status" => 'success',
                "data" => $getProduct
            ], 200);
        } catch (Exception $e) {
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
//        dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "description" => "required",
                "model" => "required",
                "brand_id" => "required",
                "category_id" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $Product = new Product();
            $Product->name = $request->name;
            $Product->language_id = $request->language_id;
            $Product->description = $request->description;
            $Product->tag = $request->tag;
            $Product->meta_title = $request->meta_title;
            $Product->meta_description = $request->meta_description;
            $Product->meta_keyword = $request->meta_keyword;
            $Product->model = $request->model;
            $Product->sku = $request->sku;
            $Product->upc = $request->upc;
            $Product->jan = $request->jan;
            $Product->isbn = $request->isbn;
            $Product->location = $request->location;
            $Product->quantity = $request->quantity;
            $Product->stock_status_id = $request->stock_status_id;
            $Product->brand_id = $request->brand_id;
            $Product->shipping = $request->shipping;
            $Product->price = $request->price;
            $Product->points = $request->points;
            $Product->tax_class_id = $request->tax_class_id;
            $Product->date_available = $request->date_available;
            $Product->weight = $request->weight;
            $Product->weight_class_id = $request->weight_class_id;
            $Product->length = $request->length;
            $Product->width = $request->width;
            $Product->height = $request->height;
            $Product->length_class_id = $request->length_class_id;
            $Product->subtract = $request->subtract;
            $Product->minimum = $request->minimum;
            $Product->sort_order = $request->sort_order;
            $Product->category_id = $request->category_id;
            $Product->filters = $request->filters;
            $Product->related_product_id = $request->related_product_id;
            $Product->attributes = $request->attributes;
            $Product->option = $request->option;
            $Product->recurring = $request->recurring;
            $Product->discount = $request->discount;
            $Product->special = $request->special;
            $Product->reward_point = $request->reward_point;
            $Product->seo_keywords = $request->seo_keywords;
            $Product->design = $request->design;
            $Product->viewed = $request->viewed;
            $Product->image = $request->image;
            if ($Product->save()) {
                return response([
                    "status" => "success",
                    "message" => "Product Successfully Create"
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $getProduct = Product::where("id", $id)->first();
            if ($getProduct) {
                return response([
                    "status" => "success",
                    "data" => $getProduct
                ]);
            } else {
                return response(redirect(url('/not-found')), 404);
            }
        } catch (Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }

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
                "name" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $Product = Product::where("id", $id)->first();
            $Product->name = $request->name ??  $Product->name;
            $Product->language_id = $request->language_id ?? $Product->language_id;
            $Product->description = $request->description ?? $Product->description;
            $Product->tag = $request->tag ?? $Product->tag;
            $Product->meta_title = $request->meta_title ?? $Product->meta_title;
            $Product->meta_description = $request->meta_description ?? $Product->meta_description;
            $Product->meta_keyword = $request->meta_keyword ?? $Product->meta_keyword;
            $Product->model = $request->model ?? $Product->model;
            $Product->sku = $request->sku ?? $Product->sku;
            $Product->upc = $request->upc ?? $Product->upc;
            $Product->jan = $request->jan ?? $Product->jan;
            $Product->isbn = $request->isbn ?? $Product->isbn;
            $Product->location = $request->location ??  $Product->location;
            $Product->quantity = $request->quantity ?? $Product->quantity;
            $Product->stock_status_id = $request->stock_status_id ?? $Product->stock_status_id;
            $Product->brand_id = $request->brand_id ?? $Product->brand_id;
            $Product->shipping = $request->shipping ??  $Product->shipping ;
            $Product->price = $request->price ?? $Product->price ;
            $Product->points = $request->points ?? $Product->points;
            $Product->tax_class_id = $request->tax_class_id ??  $Product->tax_class_id;
            $Product->date_available = $request->date_available ?? $Product->date_available;
            $Product->weight = $request->weight ??  $Product->weight;
            $Product->weight_class_id = $request->weight_class_id ?? $Product->weight_class_id;
            $Product->length = $request->length ?? $Product->length;
            $Product->width = $request->width ?? $Product->width  ;
            $Product->height = $request->height ?? $Product->height;
            $Product->length_class_id = $request->length_class_id ?? $Product->length_class_id;
            $Product->subtract = $request->subtract ?? $Product->subtract ;
            $Product->minimum = $request->minimum ?? $Product->minimum;
            $Product->sort_order = $request->sort_order ?? $Product->sort_order;
            $Product->category_id = $request->category_id ??  $Product->category_id;
            $Product->filters = $request->filters ?? $Product->filters;
            $Product->related_product_id = $request->related_product_id ?? $Product->related_product_id;
            $Product->attributes = $request->attributes ?? $Product->attributes;
            $Product->option = $request->option ?? $Product->option;
            $Product->recurring = $request->recurring ?? $Product->recurring;
            $Product->discount = $request->discount ?? $Product->discount;
            $Product->special = $request->special ?? $Product->special;
            $Product->reward_point = $request->reward_point ?? $Product->reward_point;
            $Product->seo_keywords = $request->seo_keywords ??$Product->seo_keywords  ;
            $Product->design = $request->design ?? $Product->design;
            $Product->viewed = $request->viewed ??  $Product->viewed;
            $Product->image = $request->image ?? $Product->image;

            if ($Product->update()) {
                return response([
                    "status" => "success",
                    "message" => "Product Successfully Update"
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
            $Product = Product::find($id);
            if ($Product) {
                $Product->delete();
                return response([
                    "status" => "success",
                    "message" => "Product Successfully Delete"
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