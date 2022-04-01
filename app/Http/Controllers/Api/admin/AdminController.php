<?php

namespace App\Http\Controllers\Api\admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getAdmin = User::with(['customer_details'])->whereJsonContains('user_role', "2")->paginate(5);
            return response([
                "status" => 'success',
                "data" => $getAdmin
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
                "name" => "required|min:5",
                "email" => 'required|email:rfc,dns|unique:users',
                "phone" => "required",
                "access" => "required",
                "password" => "required|min:6",
                "confirm_password" => "required|min:6",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $admin = new User();
            $admin->name = $request->name;
            $admin->password = Hash::make($request->description);
            $admin->phone = $request->phone;
            $admin->email = $request->email;
            $admin->image = $request->image;
            $admin->user_role = $request->user_role;
            $admin->access = $request->access;
            if ($admin->save()) {
                $customerDetails = new CustomerDetails();
                $customerDetails->user_id = $admin->id;
                $customerDetails->customer_group_id = $request->customer_group_id;
                $customerDetails->language_id = $request->language_id;
                $customerDetails->firstname = $admin->name;
                $customerDetails->lastname = $request->lastname;
                $customerDetails->fax = $request->fax;
                $customerDetails->wishlist = $request->wishlist;
                $customerDetails->newsletter = $request->newsletter;
                $customerDetails->address_id = $request->address_id;
                $customerDetails->custom_field = $request->custom_field;
                $customerDetails->token = $request->token;
                $customerDetails->safe = $request->safe;
                $customerDetails->code = $request->code;
                return response([
                    "status" => "success",
                    "message" => "Admin Successfully Create"
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
            $getAdmin = User::where("id", $id)->first();
            if ($getAdmin) {
                return response([
                    "status" => "success",
                    "data" => $getAdmin
                ]);
            } else {
                return response([
                    "status" => 'not_found'
                ], 404);
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
                "name" => "required|min:5",
                "email" => 'required|email:rfc,dns|unique:users',
                "phone" => "required",
                "access" => "required",
                "password" => "required|min:6",
                "confirm_password" => "required|min:6",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $admin = User::where("id", $id)->first();
            $admin->name = $request->name ?? $admin->name;
            $admin->password = Hash::make($request->password) ?? $admin->password;
            $admin->phone = $request->phone ?? $admin->phone;
            $admin->image = $request->image ?? $admin->image;
            $admin->email = $request->email ?? $admin->email;
            $admin->access = $request->access ?? $admin->access;
            $admin->user_role = $request->user_role ?? $admin->user_role;
            if ($admin->update()) {
                return response([
                    "status" => "success",
                    "message" => "Admin Successfully Update"
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
            $admin = User::find($id);
            if ($admin) {
                $admin->delete();
                return response([
                    "status" => "success",
                    "message" => "Admin Successfully Delete"
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
