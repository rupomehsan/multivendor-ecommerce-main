<?php

namespace App\Http\Controllers\Api\carousels;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Validator;

class CarouselsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getCarousel = Carousel::with(['category'])->paginate(5);
            return response([
                "status" => 'success',
                "data" => $getCarousel
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
        try {
            $validator = Validator::make($request->all(), [
                "category_id" => "required",
                "image" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $carousel = new Carousel();
            $carousel->category_id = $request->category_id;
            $carousel->image = $request->image;
            if ($carousel->save()) {
                return response([
                    "status" => "success",
                    "message" => "Carousel Successfully Create"
                ]);
            }
        } catch (Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ]);
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
            $getCarousel = Carousel::where("id", $id)->first();
            if ($getCarousel) {
                return response([
                    "status" => "success",
                    "data" => $getCarousel
                ]);
            } else {
                return response([
                    "status" => 'not_found'
                ], 404);
            }
        } catch (Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ]);
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
                "category_id" => "required",
                "image" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $carousel = Carousel::where("id", $id)->first();
            $carousel->category_id = $request->category_id ?? $carousel->category_id;
            $carousel->image = $request->image ?? $carousel->image;
            $carousel->status = $request->status ?? $carousel->status;
            if ($carousel->update()) {
                return response([
                    "status" => "success",
                    "message" => "Carousel Successfully Update"
                ]);
            }
        } catch (Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ]);
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
            $carousel = Carousel::find($id);
            if ($carousel) {
                $carousel->delete();
            }
            return response([
                "status" => "success",
                "message" => "Carousel Successfully Delete"
            ], 200);
        } catch (\Exception $e) {
            return response([
                "status" => "server_error",
                "message" => $e->getMessage()
            ], 500);
        }
    }
}
