<?php

?>


<nav class="bg-white py-2 vendor-nav">
    <div class="container">
        <ul class="d-flex justify-content-center align-items-center">

            <li class="me-5 nav-item">
                <a href="{{url('/vendor/')}}" class="nav-link
                    {{ in_array('vendor', request()->segments()) && count(request()->segments()) === 1 ? 'active' : '' }}"
                >
                    home
                </a>
            </li>

            <li class="me-5 nav-item">
                <a href="{{url('/vendor/all-products')}}"
                   class="nav-link {{in_array('all-products', request()->segments())  ? 'active' : '' }}">All
                    Products</a>
            </li>

            <li class="me-5 nav-item">
                <a href="{{url('/vendor/profile')}}"
                   class="nav-link {{ in_array('profile', request()->segments()) ? 'active' : '' }}">Profile</a>
            </li>
        </ul>
    </div>
</nav>
