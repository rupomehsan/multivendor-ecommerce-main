<?php

namespace App\Http\Controllers\Api\purchase;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\PurchaseProduct;
use App\Models\Purchases;
use App\Models\ReturnProduct;
use DataTables;
use Illuminate\Http\Request;
use Validator;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Purchase = Purchases::all();
        if ($request->ajax()) {
            return Datatables::of($Purchase)
                ->addIndexColumn()
                ->addColumn('payment_status', function ($row) {
                    if ($row->payment_status === "Due") {
                        $btn = '<span class="alert alert-danger border py-2 px-3 m-2">' . $row->payment_status . '</span>';

                        $btn = $btn . '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editPayment">PayNow</a>';
//                        $btn = $btn.'<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem">PayNow</a>';
                        return $btn;
                    } else {
                        $btn = '<span class="alert alert-danger border py-2 px-3 m-2">Paid</span>';
                        return $btn;
                    }

                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm viewItem mr-1">View</a>';
                    $btn = $btn . '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm returnItem">Return</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action', 'payment_status'])
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
                "invoice_id" => "required|unique:purchase_products",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
            $Purchase = new Purchases();
            $Purchase->supplier_id = $request->supplier_id;
            $Purchase->product_id = $request->product_id;
            $Purchase->date = $request->date;
            $Purchase->invoice_id = $request->invoice_id;
            $Purchase->note = $request->note;
            $Purchase->image = $request->image;
            $Purchase->created_by = $request->created_by;
            $Purchase->order_tax = $request->order_tax;
            $Purchase->shipping_charge = $request->shipping_charge;
            $Purchase->other_charge = $request->other_charge;
            $Purchase->discount = $request->discount;
            $Purchase->paid_amount = $request->paid_amount;
            $Purchase->sub_total = $request->sub_total;
            $Purchase->grand_total = $request->payable_amount;
            $Purchase->due_amount = $request->due_amount;
            $Purchase->payment_method = $request->payment_method;
            if ($request->due_amount > 0) {
                $Purchase->payment_status = "Due";
            }
            $Purchase->status = $request->status;
            $Purchase->save();
            if ($request->product) {
                foreach ($request->product as $itemProduct) {
                    $PurchaseProduct = new PurchaseProduct();
                    $product = Product::where('id', $itemProduct['product_id'])->first();
                    $product->quantity = $product->quantity + $itemProduct['quantity'];
                    $product->update();
                    $PurchaseProduct->product_id = $itemProduct['product_id'];
                    $PurchaseProduct->invoice_id = $request->invoice_id;
                    $PurchaseProduct->cost = $itemProduct['cost'];
                    $PurchaseProduct->item_total = $itemProduct['item_total'];
                    $PurchaseProduct->quantity = $itemProduct['quantity'];
                    $PurchaseProduct->sell = $itemProduct['sell'];
                    $PurchaseProduct->item_tax = $itemProduct['item_tax'];
                    $PurchaseProduct->save();
                }
                return response([
                    "status" => "success",
                    "message" => "Product Successfully Purchase "
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
            $getPurchase = Purchases::where("id", $id)->first();
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
            $getPurchase = Purchases::where("id", $id)->first();
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
            $Purchase = Purchases::find($id);
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

    public function manageApproval(Request $request)
    {
//        dd($request->all());
        try {
            $target = Purchases::where('id', $request->id)->first();
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

    public function searchPurchase(Request $request)
    {
        try {
            $searchPurchase = Purchases::where('name', 'LIKE', '%' . $request->searchData . '%')->paginate(20);
            if ($searchPurchase) {
                return response([
                    "status" => 'success',
                    "data" => $searchPurchase
                ]);
            } else {
                return response([
                    'status' => 'error',
                    'message' => "Data Not Found"
                ]);
            }
        } catch (\Exception $e) {
            return response([
                'status' => 'server_error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function getPurchaseProduct($id)
    {
        $getPurchaseProduct = Purchases::with(['purchase_products.product',])->where('id', $id)->first();
        return response([
            "status" => "success",
            "data" => $getPurchaseProduct
        ]);

    }

    public function getReturnProduct($id)
    {
        $getReturnProduct = Purchases::with(['purchase_products.product',])->where('id', $id)->first();
        return response([
            "status" => "success",
            "data" => $getReturnProduct
        ]);

    }

    public function viewProduct($id)
    {
        $getReturnProduct = Purchases::with(['return_products.product','purchase_products.product','supplier'])->where('id', $id)->first();
        return response([
            "status" => "success",
            "data" => $getReturnProduct
        ]);

    }

    public function purchaseDue(Request $request)
    {
//        dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
                "due_payable_amount" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }

            $duepayment = Purchases::where('id', $request->purchase_id)->first();

            if ($duepayment) {
                if ($request->due_payable_amount > $duepayment->due_amount) {
                    return response([
                        "status" => "success",
                        "message" => "Your Amount is greater then Due amount"
                    ]);
                }
                $duepayment->paid_amount = $duepayment->paid_amount + $request->due_payable_amount;
                $duepayment->due_amount = $duepayment->due_amount - $request->due_payable_amount;
                if ($duepayment->due_amount == 0) {
                    $duepayment->payment_status = "Paid";
                    $duepayment->update();
                    return response([
                        "status" => "success",
                        "message" => "Payment Complete Remaining Due Amount " . $duepayment->due_amount . "$"
                    ]);
                } else {
                    $duepayment->update();
                    return response([
                        "status" => "success",
                        "message" => "Your Payment Successfully Complete"
                    ]);
                }
            }
        } catch (\Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }
    }

    public function returnProduct(Request $request)
    {

        try {
//            dd($request->all());
            foreach ($request->product as $returnProduct) {
                $prucahseProduct = PurchaseProduct::where("product_id", $returnProduct['product_id'])->where('invoice_id', $returnProduct['invoice_id'])->first();
//                dd($prucahseProduct);
                if ( $returnProduct['quantity']  > $prucahseProduct->quantity) {
                    return response([
                        "status" => "success",
                        "message" => "Sorry.....Your Quantity More Then For Return Quantity"
                    ]);
                }

                $prucahseProduct->quantity = $prucahseProduct->quantity - $returnProduct['quantity'];
                $product = Product::where('id',$returnProduct['product_id'])->first();
                $product->quantity = $product->quantity - $returnProduct['quantity'];
                $product->update();
                $prucahseProduct->update();
                ReturnProduct::insert($request->product);
            }
            return response([
                "status" => "success",
                "message" => "Return Successfully Complete"
            ]);
        } catch (\Exception $e) {
            return response([
                "status" => 'server_error',
                "data" => $e->getMessage()
            ], 500);
        }
///        dd($request->all());
//        $retunProduct = new ReturnProduct();
//        $retunProduct::created();
//          ReturnProduct::insert($request->product);

    }


}
