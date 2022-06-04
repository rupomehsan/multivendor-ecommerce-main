<?php /** @noinspection ALL */

namespace App\Http\Controllers\Api\customer;

use App\Http\Controllers\Controller;
use App\Models\CustomerDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        try {

            $getCustomer = User::with(['customer_details'])->whereJsonContains('user_role',"4")->get();
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
//       dd($request->all());
        try {
            $validator = Validator::make($request->all(),[
                "name" => "required|min:5",
                "email"=> 'required|email:rfc,dns|unique:users',
                "phone"=> "required",
                "password"=> "required|min:6",
            ]);
            if ($validator->fails()){
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $customer = new User();
            $customer->name = $request->name;
            $customer->password = Hash::make($request->password);
            $customer->phone = $request->phone;
            $customer->email = $request->email;
            $customer->image = $request->image;
            $customer->user_role= ["4"];
            if($customer->save()){
                $customerDetails = new CustomerDetails();
                $customerDetails->user_id = $customer->id;
                $customerDetails->customer_group_id = $request->customer_group_id;
                $customerDetails->language_id =$request->language_id;
                $customerDetails->firstname =$request->name;
                $customerDetails->lastname =$request->lastname;
                $customerDetails->fax =$request->fax;
                $customerDetails->newsletter =$request->newsletter;
                $customerDetails->address =$request->address;
                $customerDetails->custom_field =$request->custom_field;
                $customerDetails->token =$request->token;
                $customerDetails->safe =$request->safe;
                $customerDetails->code =$request->code;
                $customerDetails->company_name =$request->company_name;
                $customerDetails->website =$request->website;
                $customerDetails->tracking_code =$request->tracking_code;
                $customerDetails->commission =$request->commission;
                $customerDetails->tax_id =$request->tax_id;
                $customerDetails->payment_method =$request->payment_method;
                $customerDetails->cheque_payee_name =$request->cheque_payee_name;
                $customerDetails->save();
                if($customerDetails->save()){
                    return response([
                        "status" => "success",
                        "message" => "Successfully Register"
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
        try {
            $getCustomer = User::with('customer_details')->where("id",$id)->first();
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
            $customer = User::where("id",$id)->first();
            $customer->name = $request->name ??  $customer->name ;
            $customer->phone = $request->phone ?? $customer->phone;
            $customer->image = $request->image ?? $customer->image;
            $customer->update();
            $customerDetails = CustomerDetails::where('user_id',$id)->first();
            $customerDetails->customer_group_id = $request->customer_group_id;
            $customerDetails->language_id =$request->language_id;
            $customerDetails->firstname =$request->name;
            $customerDetails->lastname =$request->lastname;
            $customerDetails->fax =$request->fax;
            $customerDetails->wishlist =$request->wishlist;
            $customerDetails->newsletter =$request->newsletter;
            $customerDetails->address =$request->address;
            $customerDetails->custom_field =$request->custom_field;
            $customerDetails->token =$request->token;
            $customerDetails->safe =$request->safe;
            $customerDetails->code =$request->code;
            $customerDetails->company_name =$request->company_name;
            $customerDetails->website =$request->website;
            $customerDetails->tracking_code =$request->tracking_code;
            $customerDetails->commission =$request->commission;
            $customerDetails->tax_id =$request->tax_id;
            $customerDetails->payment_method =$request->payment_method;
            $customerDetails->cheque_payee_name =$request->cheque_payee_name;

//            dd($customerDetails);
            $customerDetails->update();
                return response([
                    "status" => "success",
                    "message" => "Customer Successfully Update"
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
            $customer = User::find($id);
            if($customer){
                $customer->delete();
                $customerDetails = CustomerDetails::where('user_id',$id);
                if($customerDetails){
                    $customerDetails->delete();
                }
                return response([
                    "status" => "success",
                    "message" => "Customer Successfully Delete"
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
            $target         = User::where('id', $request->id)->first();
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
