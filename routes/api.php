<?php

use App\Http\Controllers\Api\admin\AdminController;
use App\Http\Controllers\Api\attribute\AttributeController;
use App\Http\Controllers\Api\brand\BrandController;
use App\Http\Controllers\Api\carousels\CarouselsController;
use App\Http\Controllers\Api\category\CategoryController;
use App\Http\Controllers\Api\category\SubCategoryController;
use App\Http\Controllers\Api\category\SubSubCategoryController;
use App\Http\Controllers\Api\coupon\CouponController;
use App\Http\Controllers\Api\deliveryPerson\DeliveryPersonController;
use App\Http\Controllers\Api\mobileAds\MobileAdsController;
use App\Http\Controllers\Api\payment\PaymentController;
use App\Http\Controllers\Api\slider\SliderController;
use App\Http\Controllers\Api\user\UserController;
use App\Http\Controllers\Api\vendor\VendorController;
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
Route::prefix('v1')->group(function () {
    /*Category
    index,store,update,edit,delete
    */
    Route::resource('categories', CategoryController::class);
    /*sub-Category
    index,store,update,edit,delete
    */
    Route::resource('sub-categories', SubCategoryController::class);
    /*sub-sub-Category
    index,store,update,edit,delete
    */
    Route::resource('sub-sub-categories', SubSubCategoryController::class);
    /*Brand
    index,store,update,edit,delete
    */
    Route::resource('brands', BrandController::class);
    /*Attribute
      index,store,update,edit,delete
      */
    Route::resource('attributes', AttributeController::class);
    /*Slider
     index,store,update,edit,delete
     */
    Route::resource('sliders', SliderController::class);
    /*Carousels
    index,store,update,edit,delete
    */
    Route::resource('carousels', CarouselsController::class);
    /*Payment
     index,store,update,edit,delete
      */
    Route::resource('payments', PaymentController::class);
    /*Vendor
     index,store,update,edit,delete
     */
    Route::resource('vendors', VendorController::class);
    /*Coupon
    index,store,update,edit,delete
    */
    Route::resource('coupons', CouponController::class);
    /*Delivery Person
    index,store,update,edit,delete
   */
    Route::resource('delivery-persons', DeliveryPersonController::class);
    /* Admin
    index,store,update,edit,delete
   */
    Route::resource('admins', AdminController::class);
    /*user
    index,store,update,edit,delete
    */
    Route::resource('users', UserController::class);
    /*Advertisement
    index,store,update,edit,
    */
    Route::resource('mobile-ads', MobileAdsController::class);
    /*Notification
    index,store,update,edit,delete
    */
    Route::resource('notifications', \App\Http\Controllers\Api\notification\NotificationController::class);
    Route::post('notifications/store', [\App\Http\Controllers\Api\notification\NotificationController::class, "sendNotification"]);
    /* Settings
    index,store,update,edit,
    */
    Route::resource('settings', \App\Http\Controllers\Api\setting\SettingController::class);
    /* Settings
    index,store,update,edit,
    */
    Route::resource('smtps', \App\Http\Controllers\Api\smtp\SmtpController::class);
});
