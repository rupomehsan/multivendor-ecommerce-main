<nav class="navbar navbar-expand-lg sticky-top" id="navbar">

    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <img class="img-fluid" src="{{asset('assets/image/logo-black.png')}}" alt="">
        </a>

        <button class="navbar-toggler bg-valencia" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-5 w-100 d-flex align-items-center justify-content-between">
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown">
                        <span class="iconify me-2" data-icon="ic:round-category" data-width="20"
                              data-height="25"></span>
                        Departments
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <h6 class="dropdown-header text-danger text-capitalize">all department</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/seller/register')}}">
                        <span class="iconify  me-2" data-icon="ooui:user-avatar" data-width="20"
                              data-height="25"></span>
                        Seller
                    </a>
                </li>

                <li class="nav-item">
                    <form action="">
                        <input type="search" class="form-control border-0 rounded-pill bg-athens-gray"
                               placeholder="Search anything that come across your mind">
                    </form>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        <span class="iconify  me-2" data-icon="fa-solid:sitemap" data-width="20"
                              data-height="25"></span>
                            My Items
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end px-3 py-2">
                            <li class="mb-3">
                                <a href="" class="d-flex align-items-center text-black">
                                    <span class="iconify me-2 text-valencia" data-icon="carbon:favorite-filled" data-width="20" data-height="20"></span>
                                    Wishlist
                                </a>
                            </li>

                            <li class="mb-3">
                                <a href="" class="d-flex align-items-center text-black">
                                    <span class="iconify me-2 text-valencia" data-icon="carbon:favorite-filled" data-width="20" data-height="20"></span>
                                   Re-order
                                </a>
                            </li>

                            <li class="">
                                <a href="" class="d-flex align-items-center text-black">
                                    <span class="iconify me-2 text-valencia" data-icon="carbon:favorite-filled" data-width="20" data-height="20"></span>
                                   Pre-order
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        <span class="iconify  me-2" data-icon="ic:round-account-circle" data-width="20"
                              data-height="25"></span>
                            Account
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end p-4" style="width: 200px">
                            <li class="mb-3">
                                <button class="form-control btn btn-valencia">sign in</button>
                            </li>

                            <li class="">
                                <button class="form-control btn btn-outline-valencia">create account</button>
                            </li>
                        </ul>
                    </div>

                </li>

                <li class="nav-item badge">
                    <a class="nav-link" href="{{url('/compare')}}">
                        <span class="iconify" data-icon="bx:git-compare" data-width="25" data-height="25"></span>
                        <span class="badge-count">1</span>
                    </a>
                </li>

                <li class="nav-item badge">
                    <div class="dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">
                            <span class="iconify" data-icon="twemoji:shopping-cart" data-width="25"
                                  data-height="25"></span>
                            <span class="badge-count">1</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end p-4" style="width: 300px">

                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6>2 items(2)</h6>
                                    <a href="">view cart</a>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6>Product Name</h6>
                                        <h6 class="text-valencia fw-lighter">1X$100.00</h6>
                                    </div>

                                    <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>

                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6>Product Name</h6>
                                        <h6 class="text-valencia fw-lighter">1X$100.00</h6>
                                    </div>

                                    <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6>Total</h6>
                                    <h6 class="text-valencia">$200.00</h6>
                                </div>
                            </li>

                            <li class="mt-4">
                                <button class="btn btn-valencia rounded-lg text-capitalize form-control">checkout
                                </button>
                            </li>


                        </ul>
                    </div>


                </li>


            </ul>
        </div>
    </div>
</nav>
