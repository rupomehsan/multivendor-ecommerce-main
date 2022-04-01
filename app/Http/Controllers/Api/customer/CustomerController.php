<?php /** @noinspection ALL */

namespace App\Http\Controllers\Api\customer;

use App\Http\Controllers\Controller;
use App\Models\CustomerDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $getCustomer = User::with(['customer_details'])->whereJsonContains('user_role',"4")->paginate(5);
            return response([
                "status" => 'success',
                "data" => $getCustomer
            ],200);
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
                "email"=> 'required|email:rfc,dns|unique:users',
                "phone"=> "required",
                "password"=> "required|min:6",
                "confirm_password"=> "required|min:6",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $customer = new User();
            $customer->name = $request->name;
            $customer->password = Hash::make($request->description);
            $customer->phone = $request->phone;
            $customer->email = $request->email;
            $customer->image = $request->image;
            $customer->user_role= ["4"];
            if($customer->save()){
                $customerDetails = new CustomerDetails();
                $customerDetails->user_id = $customer->id;
                $customerDetails->customer_group_id = $request->customer_group_id;
                $customerDetails->language_id =$request->language_id;
                $customerDetails->firstname =$request->firstname;
                $customerDetails->lastname =$request->lastname;
                $customerDetails->fax =$request->fax;
                $customerDetails->wishlist =$request->wishlist;
                $customerDetails->newsletter =$request->newsletter;
                $customerDetails->address_id =$request->address_id;
                $customerDetails->custom_field =$request->custom_field;
                $customerDetails->token =$request->token;
                $customerDetails->safe =$request->safe;
                $customerDetails->code =$request->code;
                $customerDetails->save();
                if($customerDetails->save()){
                    return response([
                        "status" => "success",
                        "message" => "Cutomer Successfully Create"
                    ]);
                }

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $getCustomer = User::where("id",$id)->first();
            if($getCustomer){
                return response([
                    "status" => "success",
                    "data" => $getCustomer
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
                "name" => "required|min:5",
                "email"=> 'required|email:rfc,dns|unique:users',
                "phone"=> "required",
                "access"=> "required",
                "password"=> "required|min:6",
                "confirm_password"=> "required|min:6",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $customer = User::where("id",$id)->first();
            $customer->name = $request->name ??  $customer->name ;
            $customer->password =Hash::make($request->password)  ?? $customer->password;
            $customer->phone = $request->phone ?? $customer->phone;
            $customer->image = $request->image ?? $customer->image;
            $customer->email = $request->email ??  $customer->email;
            if($customer->update()){
                $customerDetails = CustomerDetails::where('user_id',$id);
                $customerDetails->customer_group_id = $request->customer_group_id ?? $customerDetails->customer_group_id;
                $customerDetails->language_id =$request->language_id ?? $customerDetails->language_id;
                $customerDetails->firstname =$request->firstname ?? $customerDetails->firstname;
                $customerDetails->lastname =$request->lastname ?? $customerDetails->lastname;
                $customerDetails->fax =$request->fax ?? $customerDetails->fax;
                $customerDetails->wishlist =$request->wishlist ?? $customerDetails->wishlist;
                $customerDetails->newsletter =$request->newsletter ?? $customerDetails->newsletter;
                $customerDetails->address_id =$request->address_id ?? $customerDetails->address_id;
                $customerDetails->custom_field =$request->custom_field ?? $customerDetails->custom_field;
                $customerDetails->token =$request->token ?? $customerDetails->token;
                $customerDetails->safe =$request->safe ?? $customerDetails->safe;
                $customerDetails->code =$request->code ?? $customerDetails->code;
                $customerDetails->update();
                return response([
                    "status" => "success",
                    "message" => "Admin Successfully Update"
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $customer = User::find($id);
            if($customer){
                $customer->delete();
                $customerDetails = CustomerDetails::where('user_id',$id);
                if($customerDetails){
                    $customerDetails->delete();
                }
                return response([
                    "status" => "success",
                    "message" => "User Successfully Delete"
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
}
