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

        <li class="sidebar-item {{ $currentControllerName == '' || '' ? 'active' : '' }} ">
            <a href="{{url('seller/dashboard')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Dashboard
            </a>
        </li>
        <li class="sidebar-item {{ $currentControllerName == '' || '' ? 'active' : '' }} ">
            <a href="{{url('seller/products')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Products
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == '' || '' ? 'active' : '' }} ">
            <a href="{{url('seller/orders')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Orders
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == '' || '' ? 'active' : '' }} ">
            <a href="{{url('seller/return-orders')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Return Orders
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == '' || '' ? 'active' : '' }} ">
            <a href="{{url('seller/return-policy')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Return policy
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == '' || '' ? 'active' : '' }} ">
            <a href="{{url('seller/payout-requests')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Payout requests
            </a>
        </li>

        <li class="sidebar-item {{ $currentControllerName == '' || '' ? 'active' : '' }} ">
            <a href="{{url('seller/shop-setting')}}" class="sidebar-link">
                <span class="iconify" data-icon="ic:sharp-space-dashboard" data-width="25" data-height="25"></span>
                Shop Settings
            </a>
        </li>


    </ul>
</aside>


