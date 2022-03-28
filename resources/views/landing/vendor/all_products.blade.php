@extends('layouts.landing.vendor')
@section('content')
    <div id="vendor-all-products">
        <div class="filter-content bottom-shadow py-5">
            <div class="container d-flex align-items-center justify-content-between">

                <div class="border-end w-25 pe-4">
                    <label for="customRange" class="form-label">Price</label>
                    <input type="range" class="form-range" id="customRange" name="points" min="0" max="4">
                </div>

                <div class="border-end w-25 px-4">
                    <label class="form-label">Colors</label>
                    <div class="d-flex align-items-center">
                        <div class="color-switcher">
                            <span class="switch-button" id="green"></span>
                            <span class="switch-button" id="#22A0DF"></span>
                            <span class="switch-button" id="#FF8A00"></span>
                        </div>
                    </div>
                </div>


                <div class="border-end w-25 px-4">
                    <label class="form-label">Size</label>
                    <div class="size-switcher">
                        <span class="size-button" id="10">10</span>
                        <span class="size-button" id="12">12</span>
                        <span class="size-button" id="14">14</span>
                    </div>
                </div>


                <div class="border-end w-25 px-4">
                    <label class="form-label">Sort By</label>
                    <select name="" id="" class="form-select">
                        <option value="" selected>Latest</option>
                        <option value="">Old</option>
                    </select>
                </div>

                <div class="border-start w-25 ps-4">
                    <label class="form-label">Brand</label>
                    <select name="" id="" class="form-select form-control">
                        <option value="" selected>All</option>
                        <option value="">Old</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="container py-4">
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
            </div>
        </div>
    </div>
@endsection

