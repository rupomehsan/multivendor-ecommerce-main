<?php

namespace App\Http\Controllers\Api\slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getSlider = Slider::paginate(5);
            return response([
                "status" => 'success',
                "data" => $getSlider
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
        $validator = Validator::make($request->all(),[
            "title"=> "required",
            "description"=> "required",
            "offer"=> "required",
        ]);

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
            "title"=> "required",
            "description"=> "required",
            "offer"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
//        dd($request->all());
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->image = $request->image;
        $slider->offer = $request->offer;
        if($slider->save()){
            return response([
                "status" => "success",
                "message" => "Slider Successfully Create"
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
        $getSlider = Slider::where("id",$id)->first();
        if($getSlider){
            return response([
                "status" => "success",
                "data" => $getSlider
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
            "title"=> "required",
            "description"=> "required",
            "offer"=> "required",
        ]);
        if ($validator->fails()){
            $errors = $validator->errors()->messages();
            return validateError($errors);
        }
        $slider = Slider::where("id",$id)->first();
        $slider->title = $request->title ??  $slider->title ;
        $slider->description = $request->description ?? $slider->description;
        $slider->offer = $request->offer ?? $slider->offer;
        $slider->image = $request->image ?? $slider->image;
        $slider->status = $request->status ??  $slider->status ;
        if($slider->update()){
            return response([
                "status" => "success",
                "message" => "Slider Successfully Update"
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
            $slider = Slider::find($id);
            if($slider){
                $slider->delete();
            }
            return response([
                "status" => "success",
                "message" => "Slider Successfully Delete"
            ],200);
        }catch (\Exception $e){
            return response([
                "status" =>"server_error",
                "message" => $e->getMessage()
            ],500);
        }
    }
}
