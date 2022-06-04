<?php

use App\Http\Controllers\Api\admin\AdminController;
use App\Http\Controllers\Api\attribute\AttributeController;
use App\Http\Controllers\Api\brand\BrandController;
use App\Http\Controllers\Api\carousels\CarouselsController;
use App\Http\Controllers\Api\category\CategoryController;
use App\Http\Controllers\Api\coupon\CouponController;
use App\Http\Controllers\Api\customer\CustomerController;
use App\Http\Controllers\Api\deliveryPerson\DeliveryPersonController;
use App\Http\Controllers\Api\mobileAds\MobileAdsController;
use App\Http\Controllers\Api\payment\PaymentController;
use App\Http\Controllers\Api\slider\SliderController;
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
    Route::post('categories/file-upload', [\App\Http\Controllers\Api\category\CategoryController::class, "fileUploader"]);
    Route::post('manage-category-approval', [\App\Http\Controllers\Api\category\CategoryController::class, "manageApproval"]);
    Route::get('search-category', [\App\Http\Controllers\Api\category\CategoryController::class, "searchCategory"]);
    /*Brand
    index,store,update,edit,delete
    */
    Route::resource('brands', BrandController::class);
    Route::post('brands/file-upload', [\App\Http\Controllers\Api\brand\BrandController::class, "fileUploader"]);
    Route::post('manage-brands-approval', [\App\Http\Controllers\Api\brand\BrandController::class, "manageApproval"]);
    /*Attribute
      index,store,update,edit,delete
      */
    Route::resource('attributes', AttributeController::class);
    Route::post('manage-attributes-approval', [\App\Http\Controllers\Api\attribute\AttributeController::class, "manageApproval"]);
    /* Product
      index,store,update,edit,delete
      */
    Route::resource('products', \App\Http\Controllers\Api\product\ProductController::class);
    Route::get('get-all-products', [\App\Http\Controllers\Api\product\ProductController::class, "getAllProduct"]);
    Route::get('get-related-products-by-category/{id}', [\App\Http\Controllers\Api\product\ProductController::class, "getRelatedProductByCategoryId"]);
    Route::get('get-search-products', [\App\Http\Controllers\Api\product\ProductController::class, "getSearchProduct"]);
    Route::post('manage-products-approval', [\App\Http\Controllers\Api\product\ProductController::class, "manageApproval"]);
    Route::post('products/file-upload', [\App\Http\Controllers\Api\product\ProductController::class, "fileUploader"]);
    Route::get('get-product-by-price-categoryId', [\App\Http\Controllers\Api\product\ProductController::class, "getProductByPriceCategoryId"]);
    Route::get('universal/search-product', [\App\Http\Controllers\Api\product\ProductController::class, "getUniversalSearchProduct"]);
    Route::get('get-product-by-categoryId-and-shopId', [\App\Http\Controllers\Api\product\ProductController::class, "getProductByCategoryIdAndShopId"]);
    Route::post('product/review', [\App\Http\Controllers\Api\product\ProductController::class, "productRating"]);
    /* Order
     store,update,edit,delete
     */
    Route::post('product/order', [\App\Http\Controllers\Api\order\OrderController::class, "orderProduct"]);
    /* Recurrings
      index,store,update,edit,delete
      */
    Route::resource('recurrings', \App\Http\Controllers\Api\recurring\RecurringController::class);
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
    Route::post('manage-vendors-approval', [\App\Http\Controllers\Api\vendor\VendorController::class, "manageApproval"]);
    Route::post('vendors/file-upload', [\App\Http\Controllers\Api\vendor\VendorController::class, "fileUploader"]);
    Route::get('shop-details/{id}', [\App\Http\Controllers\Api\vendor\VendorController::class, "getShopDetails"]);
    Route::get('get-all-stores', [\App\Http\Controllers\Api\vendor\VendorController::class, "getAllShop"]);
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
    /*Customer
    index,store,update,edit,delete
    */
    Route::resource('customers', CustomerController::class);
    Route::post('manage-customers-approval', [\App\Http\Controllers\Api\customer\CustomerController::class, "manageApproval"]);
    Route::post('customers/file-upload', [\App\Http\Controllers\Api\customer\CustomerController::class, "fileUploader"]);
    /*Supplier
    index,store,update,edit,delete
    */
    Route::resource('suppliers', \App\Http\Controllers\Api\supplier\SupplierController::class);
    Route::post('manage-suppliers-approval', [\App\Http\Controllers\Api\supplier\SupplierController::class, "manageApproval"]);
    Route::post('suppliers/file-upload', [\App\Http\Controllers\Api\supplier\SupplierController::class, "fileUploader"]);
    /*Purchase
    index,store,update,edit,delete
    */
    Route::resource('purchase', \App\Http\Controllers\Api\purchase\PurchaseController::class);
    Route::get('purchase/payment/get-for-due-payment/{id}', [\App\Http\Controllers\Api\purchase\PurchaseController::class, "getPurchaseProduct"]);
    Route::get('purchase/payment/get-for-return-product/{id}', [\App\Http\Controllers\Api\purchase\PurchaseController::class, "getReturnProduct"]);
    Route::get('purchase/view/{id}', [\App\Http\Controllers\Api\purchase\PurchaseController::class, "viewProduct"]);
    Route::post('purchase/payment/purchase-due', [\App\Http\Controllers\Api\purchase\PurchaseController::class, "purchaseDue"]);
    Route::post('purchase/product-return', [\App\Http\Controllers\Api\purchase\PurchaseController::class, "returnProduct"]);
    Route::post('manage-purchase-approval', [\App\Http\Controllers\Api\purchase\PurchaseController::class, "manageApproval"]);
    Route::post('purchase/file-upload', [\App\Http\Controllers\Api\purchase\PurchaseController::class, "fileUploader"]);
    /*Advertisement
    index,store,update,edit,
    */
    Route::resource('mobile-ads', MobileAdsController::class);
    /*Notification
    index,store,update,edit,delete
    */
    Route::resource('notifications', \App\Http\Controllers\Api\notification\NotificationController::class);
    Route::post('notifications/store', [\App\Http\Controllers\Api\notification\NotificationController::class, "sendNotification"]);
    Route::post('notifications/manage-notifications/store', [\App\Http\Controllers\Api\notification\NotificationController::class, "manageNotification"]);
    Route::get('notifications/manage-notifications/get', [\App\Http\Controllers\Api\notification\NotificationController::class, "getManageNotification"]);
    Route::post('notifications/file-upload', [\App\Http\Controllers\Api\notification\NotificationController::class, "fileUploader"]);
    /* Settings
    index,store,update,edit,
    */
    Route::resource('settings', \App\Http\Controllers\Api\setting\SettingController::class);
    Route::post('settings/file-upload', [\App\Http\Controllers\Api\setting\SettingController::class, "fileUploader"]);

    /* Smtp
    store,index,
    */
    Route::resource('smtps', \App\Http\Controllers\Api\smtp\SmtpController::class);
    /* Settings
    store,update,edit,show
    */
    Route::resource('carts', \App\Http\Controllers\Api\cart\CartController::class);
    Route::get('cart/get-client-carts', [\App\Http\Controllers\Api\cart\CartController::class, "getClientCart"]);
    Route::post('cart/client-cart-update', [\App\Http\Controllers\Api\cart\CartController::class, "ClientCartUpdate"]);
    Route::post('cart/client-cart-item-delete', [\App\Http\Controllers\Api\cart\CartController::class, "ClientCartDelete"]);
    Route::get('get-client-cart-all-items', [\App\Http\Controllers\Api\cart\CartController::class, "getClientCartItem"]);
    /* compare
   store,show,delete
   */
    Route::post('add-to-compare', [\App\Http\Controllers\Api\compare\CompareListController::class, 'store']);
    Route::get('get-all-compare-list', [\App\Http\Controllers\Api\compare\CompareListController::class, 'index']);
    /* wishlist
   store,show,delete
   */
    Route::post('add-to-wishlist', [\App\Http\Controllers\Api\wishlist\WishListController::class, 'store']);
    Route::get('get-all-wishlist', [\App\Http\Controllers\Api\wishlist\WishListController::class, 'index']);
    /* Contact
      store
  */
    Route::post('contact', [\App\Http\Controllers\Api\contact\ContactController::class, 'store']);
    /* Authentication
    store,show,delete
    */
    Route::post('user/login', [\App\Http\Controllers\Api\auth\AuthController::class, 'userLogin']);

});
