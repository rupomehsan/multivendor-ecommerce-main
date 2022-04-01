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
    Route::view('/product-view', 'landing.product_view.index');

    Route::view('/login', 'landing.auth.login');
    Route::view('/register', 'landing.auth.register');
    Route::view('/cart', 'landing.cart.index');
    Route::view('/checkout', 'landing.checkout.index');
    Route::view('/my-bag', 'landing.bag.index');

    Route::view('/all-category', 'landing.category.index');
    Route::view('/all-products', 'landing.product.index');
    Route::view('/all-brands', 'landing.brands.index');
    Route::view('/all-shops', 'landing.shops.index');
    Route::view('/all-offers', 'landing.offers.index');
    Route::view('/compare', 'landing.compare.index');

    Route::prefix('vendor')->group(function (){
        Route::view('/', 'landing.vendor.index');
        Route::view('/all-products', 'landing.vendor.all_products');
        Route::view('/profile', 'landing.vendor.profile');
    });

    Route::prefix('seller')->group(function (){
        Route::view('/', 'landing.seller.index');
        Route::view('/register', 'landing.seller.register');
        Route::view('/login', 'landing.seller.login');
    });

    Route::view('not-found', 'partial.not_found.index');



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

    Route::prefix('seller')->group(function (){
        Route::view('/dashboard', 'admin.dashboard.vendor');
        Route::view('/products', 'admin.products.index');
        Route::view('/add-product', 'admin.products.add-product');
        Route::view('/orders', 'admin.orders.seller.index');
        Route::view('/return-orders', 'admin.orders.seller.return');
        Route::view('/return-policy', 'admin.orders.seller.return-policy');
        Route::view('/orders/view', 'admin.orders.seller.view');
        Route::view('/payout-requests', 'admin.payout_requests.seller.index');
        Route::view('/shop-setting', 'admin.shop.seller.setting');
    });

