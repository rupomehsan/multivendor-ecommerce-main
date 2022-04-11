<?php

namespace App\Http\Controllers\Api\category;

use App\Http\Controllers\Api\Exception;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use http\Env\Response;
use Illuminate\Http\Request;
use Validator;
use DataTables;
use function response;
use function validateError;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = Category::latest()->get();
        if ($request->ajax()) {
            return Datatables::of($category)
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
//            "data"=>$category
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
                "name" => "required",
                "meta_tag_title" => "required",
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors()->messages();
                return validateError($errors);
            }
//
            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->meta_tag_title = $request->meta_tag_title;
            $category->meta_tag_desc = $request->meta_tag_desc;
            $category->meta_tag_keyword = $request->meta_tag_keyword;
            $category->parent_id = $request->parent_id;
            $category->top = $request->top;
            $category->column = $request->column;
            $category->sort_order = $request->sort_order;
            $category->filter_id = $request->filter_id;
            $category->path_id = $request->path_id;
            $category->store_id = $request->store_id;
            $category->layout_id = $request->layout_id;
            $category->image = $request->image;
            $category->keyword = $request->keyword;
            if ($category->save()) {
                return response([
                    "status" => "success",
                    "message" => "Category Successfully Create"
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
            $getCategory = Category::where("id", $id)->first();
            if ($getCategory) {
                return response([
                    "status" => "success",
                    "data" => $getCategory
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
            $getCategory = Category::where("id", $id)->first();
            if ($getCategory) {
                return response([
                    "status" => "success",
                    "data" => $getCategory
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
            $category = Category::where("id", $id)->first();
            $category->name = $request->name ?? $category->name;
            $category->description = $request->description ?? $category->description;
            $category->meta_tag_title = $request->meta_tag_title ?? $category->meta_tag_title;
            $category->meta_tag_desc = $request->meta_tag_desc ?? $category->meta_tag_desc;
            $category->meta_tag_keyword = $request->meta_tag_keyword ?? $category->meta_tag_keyword;
            $category->image = $request->image ?? $category->image;
            $category->parent_id = $request->parent_id ?? $category->parent_id;
            $category->top = $request->top ?? $category->top;
            $category->column = $request->column ?? $category->column;
            $category->sort_order = $request->sort_order ?? $category->sort_order;
            $category->filter_id = $request->filter_id ?? $category->filter_id;
            $category->path_id = $request->path_id ?? $category->path_id;
            $category->store_id = $request->store_id ?? $category->store_id;
            $category->layout_id = $request->layout_id ?? $category->layout_id;
            $category->status = $request->status ?? $category->status ;
            $category->keyword = $request->keyword;

            if ($category->update()) {
                return response([
                    "status" => "success",
                    "message" => "Category Successfully Update"
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
            $category = Category::find($id);
            if ($category) {
                $category->delete();
                return response([
                    "status" => "success",
                    "message" => "Category Successfully Delete"
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
            $target         = Category::where('id', $request->id)->first();
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

    public function  searchCategory(Request $request){
        try {
        $searchCategory =Category::where('name','LIKE','%'.$request->searchData.'%')->paginate(20);
        if ($searchCategory){
        return response([
            "status" => 'success',
            "data"=> $searchCategory
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
