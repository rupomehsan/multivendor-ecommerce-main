<?php

namespace App\Http\Controllers\Api\purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Validator;
use DataTables;
class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Purchase = Purchase::latest()->get();
        if ($request->ajax()) {
            return Datatables::of($Purchase)
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
//        return response([
//            "status" => 'success',
//            "data"=>$Purchase
//        ]);

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
//       dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
                "date" => "required",
                "ref_no" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//
            $Purchase = new Purchase();
            $Purchase->date = $request->date;
            $Purchase->ref_no = $request->ref_no;
            $Purchase->note = $request->note;
            $Purchase->image = $request->image;
            $Purchase->payment_status = $request->payment_status;
            $Purchase->created_by = $request->created_by;
            $Purchase->cost = $request->cost;
            $Purchase->sub_total = $request->sub_total;
            $Purchase->order_tax = $request->order_tax;
            $Purchase->shipping_charge = $request->shipping_charge;
            $Purchase->other_charge = $request->other_charge;
            $Purchase->discount = $request->discount;
            $Purchase->paid_amount = $request->paid_amount;
            $Purchase->quantity = $request->quantity;
            $Purchase->sell_price = $request->sell_price;
            $Purchase->item_tax = $request->item_tax;
            $Purchase->quantity = $request->quantity;
            $Purchase->invoice_id = $request->invoice_id;
            $Purchase->available_stock = $request->available_stock;
            $Purchase->status = $request->status;
            if ($Purchase->save()) {
                return response([
                    "status" => "success",
                    "message" => "Purchase Successfully Create"
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
        try {
            $getPurchase = Purchase::where("id", $id)->first();
            if ($getPurchase) {
                return response([
                    "status" => "success",
                    "data" => $getPurchase
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $getPurchase = Purchase::where("id", $id)->first();
            if ($getPurchase) {
                return response([
                    "status" => "success",
                    "data" => $getPurchase
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
            $Purchase = Purchase::where("id", $id)->first();
            $Purchase->name = $request->name ?? $Purchase->name;
            $Purchase->description = $request->description ?? $Purchase->description;
            $Purchase->meta_tag_title = $request->meta_tag_title ?? $Purchase->meta_tag_title;
            $Purchase->meta_tag_desc = $request->meta_tag_desc ?? $Purchase->meta_tag_desc;
            $Purchase->meta_tag_keyword = $request->meta_tag_keyword ?? $Purchase->meta_tag_keyword;
            $Purchase->image = $request->image ?? $Purchase->image;
            $Purchase->parent_id = $request->parent_id ?? $Purchase->parent_id;
            $Purchase->top = $request->top ?? $Purchase->top;
            $Purchase->column = $request->column ?? $Purchase->column;
            $Purchase->sort_order = $request->sort_order ?? $Purchase->sort_order;
            $Purchase->filter_id = $request->filter_id ?? $Purchase->filter_id;
            $Purchase->path_id = $request->path_id ?? $Purchase->path_id;
            $Purchase->store_id = $request->store_id ?? $Purchase->store_id;
            $Purchase->layout_id = $request->layout_id ?? $Purchase->layout_id;
            $Purchase->status = $request->status ?? $Purchase->status ;
            $Purchase->keyword = $request->keyword;

            if ($Purchase->update()) {
                return response([
                    "status" => "success",
                    "message" => "Purchase Successfully Update"
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
            $Purchase = Purchase::find($id);
            if ($Purchase) {
                $Purchase->delete();
                return response([
                    "status" => "success",
                    "message" => "Purchase Successfully Delete"
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

    public function manageApproval(Request $request)
    {
//        dd($request->all());
        try {
            $target         = Purchase::where('id', $request->id)->first();
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

    public function  searchPurchase(Request $request){
        try {
            $searchPurchase =Purchase::where('name','LIKE','%'.$request->searchData.'%')->paginate(20);
            if ($searchPurchase){
                return response([
                    "status" => 'success',
                    "data"=> $searchPurchase
                ]);
            }else{
                return response([
                    'status' => 'error',
                    'message'=> "Data Not Found"
                ]);
            }
        }catch (\Exception $e){
            return response([
                'status'=> 'server_error',
                'message'=> $e->getMessage()
            ]);
        }
    }
}
