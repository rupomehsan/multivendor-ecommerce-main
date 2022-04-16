<?php

namespace App\Http\Controllers\Api\supplier;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Validator;
use DataTables;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        try {
            $getCustomer = Supplier::latest()->get();
            if ($request->ajax()) {
                return Datatables::of($getCustomer)
                    ->addIndexColumn()
                    ->addColumn('image',function($row){
                        if($row->image && count(json_decode($row->image)) > 0){
                            $imageUrl = json_decode($row->image)[0];
                        }else{
                            $imageUrl = asset('/assets/image/logo.png');
                        }
                        return '<img src="'.$imageUrl.'" height="40" width="100" />';
                    })
                    ->addColumn('status',function($row){
                        $activeStatus = $row->status === 'active' ? 'checked' : '';
                        $status = '<label class="switch"><input type="checkbox" id="approval" data-id="'.$row->id.'" '.$activeStatus.' /><span class="slider"></span></label>';
                        return $status;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Edit</a>';
                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['image','action','status'])
                    ->make(true);
            }
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
                "name" => "required|min:5",
                "email"=> 'required|email:rfc,dns|unique:suppliers',
                "phone"=> "required",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $supplier = new Supplier();
            $supplier->name = $request->name;
            $supplier->code_name = $request->code_name;
            $supplier->phone = $request->phone;
            $supplier->email = $request->email;
            $supplier->address = $request->address;
            $supplier->city = $request->city;
            $supplier->state = $request->state;
            $supplier->country = $request->country;
            $supplier->store = $request->store;
            $supplier->details = $request->details;
            if($supplier->save()){
                return response([
                    "status" => "success",
                    "message" => "Supplier Successfully Create"
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
        try {
            $getSupplier = Supplier::where("id",$id)->first();
            if($getSupplier){
                return response([
                    "status" => "success",
                    "data" => $getSupplier
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
//                "name" => "required|min:5",
//                "email"=> 'required|email:rfc,dns|unique:users',
//                "phone"=> "required",
//                "access"=> "required",
//                "password"=> "required|min:6",
//                "confirm_password"=> "required|min:6",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $supplier = Supplier::where("id",$id)->first();
            $supplier->name = $request->name;
            $supplier->code_name = $request->code_name;
            $supplier->phone = $request->phone;
            $supplier->email = $request->email;
            $supplier->address = $request->address;
            $supplier->city = $request->city;
            $supplier->state = $request->state;
            $supplier->country = $request->country;
            $supplier->store = $request->store;
            $supplier->details = $request->details;
            $supplier->update();
            return response([
                "status" => "success",
                "message" => "Supplier Successfully Update"
            ]);

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
            $supplier = Supplier::find($id);
            if($supplier){
                $supplier->delete();
                return response([
                    "status" => "success",
                    "message" => "Supplier Successfully Delete"
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


    public function manageApproval(Request $request)
    {
//        dd($request->all());
        try {
            $target         = Supplier::where('id', $request->id)->first();
            $target->status = $request->status;
            if ($target->update()) {
                return response([
                    'status'  => 'success',
                    'message' => 'Successfully Update',
                ], 200);
            }
        }catch (\Exception $e){
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }

    }

    public function fileUploader(Request $request)
    {
//      dd($request->all());
        $validate = Validator::make(request()->only('file'), [
            'file' => 'required|max:10240',
        ]);
        if ($validate->fails()) {
            return response([
                'status' => 'validation_error',
                'data'   => $validate->errors(),
            ], 422);
        }
        try {
            if (request()->hasFile('file')) {

                foreach ($request->file('file') as $imagedata){

                    $folder    = $request->folder ?? 'all';
                    $imageName = $folder . "/" . time() . '.' . $imagedata->getClientOriginalName();
                    if (config('app.env') === 'production') {
                        $imagedata->move('uploads/' . $folder, $imageName);
                    } else {
                        $imagedata->move(public_path('/uploads/' . $folder), $imageName);
                    }
                    $protocol = request()->secure() ? 'https://' : 'http://';
                    $mainProtocol = $protocol . $_SERVER['HTTP_HOST'] . '/uploads/' . $imageName;
                    $data[] = $mainProtocol;
                }
                $finalImage = json_encode($data);
                return response([
                    'status'  => 'success',
                    'message' => 'File uploaded successfully',
                    'data'    => $finalImage
                ], 200);
            }
        } catch (\Exception$e) {
            return response([
                'status'  => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}


