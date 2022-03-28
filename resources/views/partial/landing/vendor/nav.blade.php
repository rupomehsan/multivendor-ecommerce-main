<?php
    $currentPathName ='';
    $currentControllerName = Request::segments();
    if(count($currentControllerName) === 1 ){
        $currentPathName = Request::segment(1);
    }else if(count($currentControllerName) === 2 ){
        $currentPathName = Request::segment(2);
    }

?>


<nav class="bg-white py-2 vendor-nav">
    <div class="container">
        <ul class="d-flex justify-content-center align-items-center">

            <li class="me-5 nav-item">
                <a href="{{url('/vendor/')}}" class="nav-link {{ $currentPathName == 'vendor' ? 'active' : '' }}">home</a>
            </li>

            <li class="me-5 nav-item">
                <a href="{{url('/vendor/all-products')}}" class="nav-link {{$currentPathName === 'all-products'  ? 'active' : '' }}">All Products</a>
            </li>

            <li class="me-5 nav-item">
                <a href="{{url('/vendor/profile')}}" class="nav-link {{$currentPathName === 'profile'  ? 'active' : '' }}">Profile</a>
            </li>
        </ul>
    </div>
</nav>
