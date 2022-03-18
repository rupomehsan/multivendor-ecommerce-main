<?php

use App\Http\Controllers\Api\attribute\AttributeController;
use App\Http\Controllers\Api\brand\BrandController;
use App\Http\Controllers\Api\category\CategoryController;
use App\Http\Controllers\Api\category\SubCategoryController;
use App\Http\Controllers\Api\category\SubSubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){
    /*
     Category
    store,update,edit,delete
    */
    Route::resource('categories', CategoryController::class);
    /*
     sub-Category
    store,update,edit,delete
    */
    Route::resource('sub-categories', SubCategoryController::class);
    /*
     sub-sub-Category
    store,update,edit,delete
    */
    Route::resource('sub-sub-categories', SubSubCategoryController::class);
    /*
     Brand
    store,update,edit,delete
    */
    Route::resource('brands', BrandController::class);
  /*
     Attribute
    store,update,edit,delete
    */
    Route::resource('attributes', AttributeController::class);


});
