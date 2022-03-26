@extends('layouts.landing.index')
@section('content')
    <div id="vendor-shop-section">
        <div class="banner">
            <img class="vendor-banner" src="{{asset('assets/image/vendor-page.png')}}" alt="">

            <div class="container py-3">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{asset('assets/image/vendor-icon.png')}}" alt="">
                                    </div>

                                    <div class="col-lg-6">
                                        <h6>AJ shopping online bd</h6>

                                        <p>2231 Followers</p>
                                        <p>85% Positive Seller Ratings</p>
                                    </div>

                                    <div class="col-lg-2">
                                        <button class="btn">
                                            <span class="iconify" data-icon="jam:messages" data-width="25"
                                                  data-height="25"></span>
                                            chat
                                        </button>
                                    </div>

                                    <div class="col-lg-2">
                                        <button class="btn">
                                            <span class="iconify" data-icon="jam:messages" data-width="25"
                                                  data-height="25"></span>
                                            follow
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="bg-white py-2 nav">
            <div class="container">
                <ul class="d-flex justify-content-center align-items-center">

                    <li class="me-5 nav-item">
                        <a href="" class="nav-link active">home</a>
                    </li>

                    <li class="me-5 nav-item">
                        <a href="" class="nav-link ">All Products</a>
                    </li>

                    <li class="me-5 nav-item">
                        <a href="" class="nav-link">Profile</a>
                    </li>
                </ul>
            </div>
        </nav>

        <img src="{{asset('assets/image/poster.png')}}" class="img-fluid" alt="">

        <div class="container py-5">

            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <h2 class="text-capitalize">Special <span class="text-valencia">offer</span></h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="">
                        <input type="search" class="form-control border-0 rounded-pill bg-athens-gray"
                               placeholder="Search">
                    </form>
                </div>
            </div>


            <div class="row row-cols-lg-3">

                <div class="col my-3">
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
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
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col my-3">
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col my-3">
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col my-3">
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col my-3">
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col my-3">
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col my-3">
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col my-3">
                    <div class="card bg-athens-gray">
                        <div class="card-body">

                            <div class="text-end">
                                <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                </button>
                            </div>

                            <div class="text-center py-5">
                                <img class="py-5" src="{{asset('assets/image/pos-item.png')}}" alt="">
                            </div>


                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Sneakers</h3>
                                    <p>Shoes</p>
                                    <hr>
                                    <h4 class="my-2">$14.99</h4>

                                    <h6 class="my-2">
                                        <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;"
                                              data-width="20" data-height="20"></span>
                                        <span>4.2</span>

                                        <span>123 reviews</span>
                                    </h6>

                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <button class="btn btn-valencia  form-control">Add to cart</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn form-control btn-outline-valencia">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-valencia">Load More</button>
            </div>
        </div>

        <div class="chat-box">
            h
        </div>

    </div>
@endsection
