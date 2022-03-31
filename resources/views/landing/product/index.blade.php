@extends('layouts.landing.index')
@section('content')
    @include('partial.landing.menu')

    <div class="wrapper py-5" style="min-height: 60vh">
        <div class="row">
            <div class="col-lg-2">
                <span>Categories</span>
                <hr>

                <ul>
                    <li class="d-flex align-items-center justify-content-center justify-content-between cursor-pointer fw-bold text-capitalize">
                        <span>all category</span>
                        <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20" data-height="20"></span>
                    </li>


                    <li class="list">
                        <span class="list-title d-flex align-items-center justify-content-between cursor-pointer">
                            Electronics & Gadgets
                            <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20"
                                  data-height="20"></span>
                        </span>

                        <ul class="ms-3 sub-list" id="sub-list1">
                            <li>
                                <a href="" class="text-black">Laptop</a>
                            </li>

                            <li>
                                <a href="" class="text-black">Desktop</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list">
                        <span class="list-title d-flex align-items-center justify-content-between cursor-pointer">
                            Electronics & Gadgets
                            <span class="iconify" data-icon="ep:arrow-right-bold" data-width="20"
                                  data-height="20"></span>
                        </span>

                        <ul class="ms-3 sub-list" id="sub-list2">
                            <li>
                                <a href="" class="text-black">Laptop</a>
                            </li>

                            <li>
                                <a href="" class="text-black">Desktop</a>
                            </li>
                        </ul>
                    </li>


                </ul>
                <hr>

                <form action="">
                    <!-- ***** Price ***** -->
                    <div>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="customRange" class="form-label fs-5 fw-bold">Price</label>
                            <button class="btn btn-valencia">search</button>
                        </div>

                        <input type="range" class="form-range mt-2" id="customRange" name="points" min="0" max="4">

                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" class="form-control w-50">
                            <label for="" class="w-50 text-center text-capitalize">to</label>
                            <input type="text" class="form-control w-50">
                        </div>
                    </div>

                    <!-- ***** Brands ***** -->
                    <div>
                        <label for="" class="form-label fs-5 fw-bold mb-0 mt-4">Brands</label>
                        <hr>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>
                    </div>


                    <!-- ***** Fabric ***** -->
                    <div>
                        <label for="" class="form-label fs-5 fw-bold mb-0 mt-4">Fabric</label>
                        <hr>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>
                    </div>


                    <!-- ***** Colors ***** -->
                    <div>
                        <label for="" class="form-label fs-5 fw-bold mb-0 mt-4">Colors</label>
                        <hr>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>
                    </div>


                    <!-- ***** Sizes ***** -->
                    <div>
                        <label for="" class="form-label fs-5 fw-bold mb-0 mt-4">Sizes</label>
                        <hr>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Noir
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h4 class="portion-title">All Products</h4>
                            <span class="text-secondary">Total 181 Products Found</span>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="card bg-athens-gray rounded-sm product-card">
                            <div class="card-body">

                                <ul class="extra-list">
                                    <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                    </li>

                                    <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                    </li>
                                </ul>
                                <div class="text-center my-5">
                                    <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>

                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                        <span class="fw-lighter text-capitalize">Shoes</span>
                                        <hr>
                                        <h5 class="fw-lighter">$14.99</h5>

                                        <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                        <div class="row row-cols-2 my-2">
                                            <div class="col">
                                                <button
                                                    class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                    <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20"
                                                          data-height="20"></span>
                                                    Add to cart
                                                </button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="card bg-athens-gray rounded-sm product-card">
                            <div class="card-body">

                                <ul class="extra-list">
                                    <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                    </li>

                                    <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                    </li>
                                </ul>
                                <div class="text-center my-5">
                                    <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>

                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                        <span class="fw-lighter text-capitalize">Shoes</span>
                                        <hr>
                                        <h5 class="fw-lighter">$14.99</h5>

                                        <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                        <div class="row row-cols-2 my-2">
                                            <div class="col">
                                                <button
                                                    class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                    <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20"
                                                          data-height="20"></span>
                                                    Add to cart
                                                </button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="card bg-athens-gray rounded-sm product-card">
                            <div class="card-body">

                                <ul class="extra-list">
                                    <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                    </li>

                                    <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                    </li>
                                </ul>
                                <div class="text-center my-5">
                                    <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>

                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                        <span class="fw-lighter text-capitalize">Shoes</span>
                                        <hr>
                                        <h5 class="fw-lighter">$14.99</h5>

                                        <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                        <div class="row row-cols-2 my-2">
                                            <div class="col">
                                                <button
                                                    class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                    <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20"
                                                          data-height="20"></span>
                                                    Add to cart
                                                </button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="card bg-athens-gray rounded-sm product-card">
                            <div class="card-body">

                                <ul class="extra-list">
                                    <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                    </li>

                                    <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                    </li>
                                </ul>
                                <div class="text-center my-5">
                                    <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>

                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                        <span class="fw-lighter text-capitalize">Shoes</span>
                                        <hr>
                                        <h5 class="fw-lighter">$14.99</h5>

                                        <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                        <div class="row row-cols-2 my-2">
                                            <div class="col">
                                                <button
                                                    class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                    <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20"
                                                          data-height="20"></span>
                                                    Add to cart
                                                </button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="card bg-athens-gray rounded-sm product-card">
                            <div class="card-body">

                                <ul class="extra-list">
                                    <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                    </li>

                                    <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                    </li>
                                </ul>
                                <div class="text-center my-5">
                                    <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>

                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                        <span class="fw-lighter text-capitalize">Shoes</span>
                                        <hr>
                                        <h5 class="fw-lighter">$14.99</h5>

                                        <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                        <div class="row row-cols-2 my-2">
                                            <div class="col">
                                                <button
                                                    class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                    <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20"
                                                          data-height="20"></span>
                                                    Add to cart
                                                </button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="card bg-athens-gray rounded-sm product-card">
                            <div class="card-body">

                                <ul class="extra-list">
                                    <li class="list-item">
                                        <span class="iconify action-btn" data-icon="ant-design:heart-filled"
                                              data-width="25" data-height="25"></span>
                                    </li>

                                    <li class="list-item">

                                        <span class="iconify action-btn" data-icon="bx:git-compare" data-width="25"
                                              data-height="25"></span>
                                    </li>
                                </ul>
                                <div class="text-center my-5">
                                    <img class="product-img" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                </div>

                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="fw-bold text-capitalize">Sneakers</h5>
                                        <span class="fw-lighter text-capitalize">Shoes</span>
                                        <hr>
                                        <h5 class="fw-lighter">$14.99</h5>

                                        <span class="d-flex align-items-center justify-content-center my-4">
                                            <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                  data-width="20" data-height="20"></span>
                                           <span class="text-warning fw-bold">4.2</span>
                                            <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                        </span>


                                        <div class="row row-cols-2 my-2">
                                            <div class="col">
                                                <button
                                                    class="btn btn-valencia form-control d-flex align-items-center justify-content-center ">
                                                    <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20"
                                                          data-height="20"></span>
                                                    Add to cart
                                                </button>
                                            </div>
                                            <div class="col">
                                                <a href="{{url('/product-view')}}"
                                                   class="btn form-control btn-outline-valencia">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 offset-lg-4">
                        <nav class="">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link text-valencia" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item "><a class="page-link text-valencia" href="#">1</a></li>
                                <li class="page-item"><a class="page-link text-valencia" href="#">2</a></li>
                                <li class="page-item"><a class="page-link text-valencia" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link text-valencia" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


