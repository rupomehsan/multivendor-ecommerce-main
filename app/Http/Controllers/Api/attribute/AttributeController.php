<?php

namespace App\Http\Controllers\Api\attribute;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Validator;
use DataTables;
use function response;
use function validateError;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $attributes = Attribute::latest()->get();
        if ($request->ajax()) {
            return Datatables::of($attributes)
                ->addIndexColumn()
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
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
                "name" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $attribute = new Attribute();
            $attribute->name = $request->name;
            if ($attribute->save()) {
                return response([
                    "status" => "success",
                    "message" => "Attribute Successfully Create"
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
        try {
            $getAttribute = Attribute::where("id", $id)->first();
            if ($getAttribute) {
                return response([
                    "status" => "success",
                    "data" => $getAttribute
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try {
            $getAttribute = Attribute::where("id", $id)->first();
            if ($getAttribute) {
                return response([
                    "status" => "success",
                    "data" => $getAttribute
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
                "name" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $attribute = Attribute::where("id", $id)->first();
            $attribute->name = $request->name ?? $attribute->name;
            if ($attribute->update()) {
                return response([
                    "status" => "success",
                    "message" => "Attribute Successfully Update"
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
            $attribute = Attribute::find($id);
            if ($attribute) {
                $attribute->delete();
                return response([
                    "status" => "success",
                    "message" => "Attribute Successfully Delete"
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

    public function manageApproval(Request $request)
    {
//        dd($request->all());
        try {
            $target         = Attribute::where('id', $request->id)->first();
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



}
