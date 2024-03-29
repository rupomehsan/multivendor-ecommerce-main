<?php
    $currentControllerName = Request::segment(2);
    $subCurrentControllerName = Request::segment(3);
    $currentFullRouteName = Route::getFacadeRoot()
        ->current()
        ->uri();
?>

<aside class="sidebar">

    <button class="btn sidebar-collapse-btn">
        <span class="iconify" data-icon="icon-park-outline:menu-unfold-one" data-width="20" data-height="20"></span>

        <span class="iconify d-none" data-icon="icon-park-outline:menu-fold-one" data-width="20" data-height="20"></span>

    </button>


    <div class="sidebar-logo">
        <img src="{{asset('assets/image/logo.png')}}" class="logo-lg" alt="logo.png">
    </div>

    <ul class="sidebar-nav">

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'dashboard' || '' ? 'active' : '' }} ">
            <a href="{{url('admin/dashboard')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Dashboard
            </a>
        </li>

        <li class="sidebar-nav-heading text-uppercase ms-3 my-2" >Manage</li>


        <li class="sidebar-item mt-1 {{ $currentControllerName == 'pos' || '' ? 'active' : '' }}">
            <a href="{{url('admin/pos')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                POS
            </a>
        </li>
        <li class="sidebar-item mt-1 {{ $currentControllerName == 'category' || '' ? 'active' : '' }}">
            <a href="{{url('admin/category')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
               Category
            </a>
        </li>

{{--        <li class="sidebar-sub-item">--}}
{{--            <div class="sub-menu-btn category-menu">--}}
{{--                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>--}}
{{--                <span>Category</span>--}}

{{--                <span class="iconify sub-menu-indicator" data-icon="dashicons:arrow-down-alt2" data-width="20" data-height="20"></span>--}}
{{--            </div>--}}

{{--            <ul class="sub-menu-list category-list d-none">--}}
{{--                <li class="sub-list-item">--}}
{{--                    <a href="{{url('admin/category')}}" class="sub-list-link {{ $currentControllerName == 'category' || '' ? 'active' : '' }}">--}}
{{--                        Category--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="sub-list-item">--}}
{{--                    <a href="{{url('admin/category/sub-category')}}" class="sub-list-link">--}}
{{--                        Sub Category--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="sub-list-item">--}}
{{--                    <a href="{{url('admin/category/sub-sub-category')}}" class="sub-list-link {{ $currentControllerName == 'sub-category' || '' ? 'active' : '' }}">--}}
{{--                        Sub Sub Category--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}



        <li class="sidebar-item mt-1 {{ $currentControllerName == 'attributes' || '' ? 'active' : '' }}">
            <a href="{{url('admin/attributes')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Attributes
            </a>
        </li>


        <li class="sidebar-item mt-1 {{ $currentControllerName == 'brands' || '' ? 'active' : '' }}">
            <a href="{{url('admin/brands')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Brands
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'products' || '' ? 'active' : '' }} ">
            <a href="{{url('admin/products')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Products
            </a>
        </li>

        <li class="sidebar-sub-item">
            <div class="sub-menu-btn homepage-menu">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                <span>Homepage</span>
                <span class="iconify sub-menu-indicator" data-icon="dashicons:arrow-down-alt2" data-width="20" data-height="20"></span>
            </div>
            <ul class="sub-menu-list homepage-list d-none">
                <li class="sub-list-item">
                    <a href="{{url('admin/homepage/slider')}}" class="sub-list-link {{ $currentControllerName == 'category' || '' ? 'active' : '' }}">
                        Slider
                    </a>
                </li>
                <li class="sub-list-item">
                    <a href="{{url('admin/homepage/carousel')}}" class="sub-list-link">
                      Carousel
                    </a>
                </li>
                <li class="sub-list-item">
                    <a href="{{url('admin/homepage/offers')}}" class="sub-list-link">
                      Offers
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'vendors' || '' ? 'active' : '' }}">
            <a href="{{url('admin/vendors')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Vendors
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'customers' || '' ? 'active' : '' }}">
            <a href="{{url('admin/customers')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Customers
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'suppliers' || '' ? 'active' : '' }}">
            <a href="{{url('admin/suppliers')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Suppliers
            </a>
        </li>
        <li class="sidebar-item mt-1 {{ $currentControllerName == 'purchase' || '' ? 'active' : '' }}">
            <a href="{{url('admin/purchase')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Purchase
            </a>
        </li>

        <li class="sidebar-sub-item">
            <div class="sub-menu-btn order-menu">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                <span>Orders</span>
                <span class="iconify sub-menu-indicator" data-icon="dashicons:arrow-down-alt2" data-width="20" data-height="20"></span>
            </div>

            <ul class="sub-menu-list order-list d-none">
                <li class="sub-list-item">
                    <a href="{{url('admin/orders/all')}}" class="sub-list-link {{ $currentControllerName == 'category' || '' ? 'active' : '' }}">
                        All (54)
                    </a>
                </li>

                <li class="sub-list-item">
                    <a href="{{url('admin/homepage/carousel')}}" class="sub-list-link">
                        Pending (54)
                    </a>
                </li>
                <li class="sub-list-item">
                    <a href="{{url('admin/homepage/offers')}}" class="sub-list-link">
                        Confirmed (54)
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'payments' || '' ? 'active' : '' }}">
            <a href="{{url('admin/payments')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Payments
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'coupons' || '' ? 'active' : '' }}">
            <a href="{{url('admin/coupons')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Coupons
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'payout-requests' || '' ? 'active' : '' }}">
            <a href="{{url('admin/payout-requests')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Payout Requests
            </a>
        </li>


        <li class="sidebar-item mt-1 {{ $currentControllerName == 'help' || '' ? 'active' : '' }}">
            <a href="{{url('admin/help')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Help
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'subscriber' || '' ? 'active' : '' }}">
            <a href="{{url('admin/subscriber')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Subscriber
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'delivery-person' || '' ? 'active' : '' }}">
            <a href="{{url('admin/delivery-person')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Delivery Person
            </a>
        </li>

        <li class="sidebar-nav-heading text-uppercase ms-3 my-2" >Manage Admin</li>
        <li class="sidebar-item mt-1 {{ $currentControllerName == 'manage_admin' || '' ? 'active' : '' }}">
            <a href="{{url('admin/manage_admin')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Manage Admin
            </a>
        </li>

        <li class="sidebar-nav-heading text-uppercase ms-3 my-2" >Manage User</li>
        <li class="sidebar-item mt-1 {{ $currentControllerName == 'user' || '' ? 'active' : '' }}">
            <a href="{{url('admin/user')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Manage User
            </a>
        </li>

        <li class="sidebar-nav-heading text-uppercase ms-3 my-2" >Settings</li>
        <li class="sidebar-item mt-1 {{ $currentControllerName == 'advertisement' || '' ? 'active' : '' }}">
            <a href="{{url('admin/advertisement')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Advertisement
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'notification' || '' ? 'active' : '' }}">
            <a href="{{url('admin/notification')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Notifications
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'setting' || '' ? 'active' : '' }}">
            <a href="{{url('admin/setting')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Basic Setting
            </a>
        </li>

        <li class="sidebar-item mt-1 {{ $currentControllerName == 'smtp' || '' ? 'active' : '' }}">
            <a href="{{url('admin/smtp')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                SMTP
            </a>
        </li>

    </ul>
</aside>


