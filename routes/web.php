<?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    Route::view('/', 'landing.home.index');

    Route::prefix('admin')->group(function () {
        Route::view('/dashboard', 'admin.dashboard.index');
        Route::view('/category', 'admin.category.index');
        Route::view('/category/sub-category', 'admin.category.sub_category');
        Route::view('/category/sub-sub-category', 'admin.category.sub_sub_category');
        Route::view('/pos', 'admin.pos.index');
        Route::view('/pos/orders-list', 'admin.pos.order_list');
        Route::view('/attributes', 'admin.attributes.index');
        Route::view('/brands', 'admin.brand.index');
        Route::view('/homepage/slider', 'admin.homepage.slider');
        Route::view('/homepage/carousel', 'admin.homepage.carousel');
        Route::view('/homepage/offers', 'admin.homepage.offer');
        Route::view('/vendors', 'admin.vendors.index');
        Route::view('/vendors/view', 'admin.vendors.view');
        Route::view('/orders/all', 'admin.orders.all');
        Route::view('/orders/view', 'admin.orders.view');
        Route::view('/payments', 'admin.payment.index');
        Route::view('/coupons', 'admin.coupon.index');
        Route::view('/payout-requests', 'admin.payout_requests.index');
        Route::view('/help', 'admin.help.index');
        Route::view('/subscriber', 'admin.subscriber.index');
        Route::view('/delivery-person', 'admin.delivery_person.index');
        Route::view('/user', 'admin.user.index');
        Route::view('/manage_admin', 'admin.manage_admin.index');
        Route::view('/advertisement', 'admin.mobile.index');
        Route::view('/notification', 'admin.notification.index');
        Route::view('/setting', 'admin.basic_setting.index');
        Route::view('/smtp', 'admin.smtp.index');
    });

