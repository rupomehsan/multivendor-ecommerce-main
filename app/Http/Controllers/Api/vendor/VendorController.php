<?php

namespace App\Http\Controllers\Api\vendor;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\StoreDetails;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $getVendor = User::with('store_details')->withCount('products')->whereJsonContains('user_role', "3")->get();
        if ($request->ajax()) {
            return Datatables::of($getVendor)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    if ($row->image && count(json_decode($row->image)) > 0) {
                        $imageUrl = json_decode($row->image)[0];
                    } else {
                        $imageUrl = asset('/assets/image/logo.png');
                    }
                    return '<img src="' . $imageUrl . '" height="40" width="100" />';
                })
                ->addColumn('status', function ($row) {
                    $activeStatus = $row->status === 'active' ? 'checked' : '';
                    $status = '<label class="switch"><input type="checkbox" id="approval" data-id="' . $row->id . '" ' . $activeStatus . ' /><span class="slider"></span></label>';
                    return $status;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">Edit</a>';
                    $btn = $btn . '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="View" class="view btn btn-primary btn-sm viewItem ml-1">View</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['image', 'action', 'status'])
                ->make(true);
        }
//        return response([
//            "status" => 'success',
//            "data"=>$getVendor
//        ]);

    }

//    public function index()
//    {
//        try {
//            $getVendor = User::whereJsonContains('user_role',"3")->paginate(5);
//            return response([
//                "status" => 'success',
//                "data" => $getVendor
//            ],200);
//        }catch (Exception $e){
//            return response([
//                "status" => 'server_error',
//                "data" => $e->getMessage()
//            ],500);
//        }
//    }

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
//                "name" => "required|min:5",
//                "email"=> 'required|email:rfc,dns|unique:users',
//                "phone"=> "required",
//                "password"=> "required|min:6",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//        dd($request->all());
            $vendor = new User();
            $vendor->name = $request->store_owner;
            $vendor->password = Hash::make($request->password);
            $vendor->phone = $request->phone;
            $vendor->email = $request->email;
            $vendor->image = $request->image;
            $vendor->user_role = ['3', '4'];
            if ($vendor->save()) {
                $store = new StoreDetails();
                $store->user_id = $vendor->id;
                $store->store_name = $request->store_name;
                $store->address = $request->address;
                $store->opening_time = $request->opening_time;
                $store->comments = $request->comments;
                $store->ssl_url = $request->ssl_url;
                $store->store_url = $request->store_url;
                $store->description = $request->description;
                $store->meta_tag_title = $request->meta_tag_title;
                $store->meta_tag_desc = $request->meta_tag_desc;
                $store->meta_tag_keyword = $request->meta_tag_keyword;
//                dd($store);
                if ($store->save()) {
                    return response([
                        "status" => "success",
                        "message" => "Vendor Successfully Create"
                    ]);
                }
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
        try {
            $getVendor = User::with('store_details')->where("id", $id)->first();
            if ($getVendor) {
                return response([
                    "status" => "success",
                    "data" => $getVendor
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
//        dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
//                "name" => "required|min:5",
//                "email"=> 'required|email:rfc,dns|unique:users',
//                "phone"=> "required",
//                "password"=> "required|min:6",
//                "confirm_password"=> "required|min:6",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $vendor = User::where("id", $id)->first();
            $vendor->name = $request->store_owner;
            $vendor->phone = $request->phone;
            $vendor->image = $request->image;
            $vendor->update();
            $store = StoreDetails::where("user_id", $id)->first();
            $store->store_name = $request->store_name;
            $store->address = $request->address;
            $store->opening_time = $request->opening_time;
            $store->comments = $request->comments;
            $store->ssl_url = $request->ssl_url;
            $store->store_url = $request->store_url;
            $store->description = $request->description;
            $store->meta_tag_title = $request->meta_tag_title;
            $store->meta_tag_desc = $request->meta_tag_desc;
            $store->meta_tag_keyword = $request->meta_tag_keyword;
            if ($store->update()) {
                return response([
                    "status" => "success",
                    "message" => "Vendor Successfully Update"
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
            $vendor = User::find($id);
            if ($vendor) {
                $vendor_store = StoreDetails::find($id);
                $vendor->delete();
                $vendor_store->delete();
                return response([
                    "status" => "success",
                    "message" => "Vendor Successfully Delete"
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
            $target = User::where('id', $request->id)->first();
            $target->status = $request->status;
            if ($target->update()) {
                return response([
                    'status' => 'success',
                    'message' => 'Successfully Update',
                ], 200);
            }
        } catch (\Exception $e) {
            return response([
                'status' => 'server_error',
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
                'data' => $validate->errors(),
            ], 422);
        }
        try {
            if (request()->hasFile('file')) {

                foreach ($request->file('file') as $imagedata) {

                    $folder = $request->folder ?? 'all';
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
                    'status' => 'success',
                    'message' => 'File uploaded successfully',
                    'data' => $finalImage
                ], 200);
            }
        } catch (\Exception$e) {
            return response([
                'status' => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function getShopDetails($id)
    {
        try {
            $shop = StoreDetails::where("status", "active")->where("user_id", $id)->first();
            $specialOfferProduct = Product::with(['category',"reviews"])->withCount('reviews')->where("status", "active")->where("vendors_id", $id)->get();
            $featureProduct = Product::with(['category',"reviews"])->withCount('reviews')->where("status", "active")->where("vendors_id", $id)->get();
            $bestSellingProduct = Product::with(['category',"reviews"])->withCount('reviews')->where("status", "active")->where("vendors_id", $id)->get();
            $bestRatedProduct = Product::with(['category',"reviews"])->withCount('reviews')->where("status", "active")->where("vendors_id", $id)->get();
            $getAllProduct = Product::with(['category',"reviews"])->withCount('reviews')->where("status", "active")->where("vendors_id", $id)->get();
            $count = Product::where("status", "active")->withCount('reviews')->where("vendors_id", $id)->count();
            if ($shop) {
                return response([
                    "status" => "success",
                    "data" => [
                        "shopDetails" => $shop,
                        "specialOfferProduct" => $specialOfferProduct,
                        "featureProduct" => $featureProduct,
                        "bestSellingProduct" => $bestSellingProduct,
                        "bestRatedProduct" => $bestRatedProduct,
                        "allProducts" => $getAllProduct,
                        "count" => $count,
                    ]
                ]);
            } else {
                return response([
                    "status" => "error",
                    "message" => "Not Found"
                ], 404);
            }
        } catch (\Exception $e) {
            return response([
                'status' => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function getAllShop()
    {
        try {
            $shop = StoreDetails::where("status", "active")->get();
            if ($shop) {
                return response([
                    "status" => "success",
                    "data" => $shop
                ]);
            } else {
                return response([
                    "status" => "error",
                    "message" => "Not Found"
                ], 404);
            }
        } catch (\Exception $e) {
            return response([
                'status' => 'server_error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }


}
