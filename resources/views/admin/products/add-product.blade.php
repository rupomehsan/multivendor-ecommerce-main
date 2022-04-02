@extends('layouts.admin.index')
@section('content')
    <main id="products-content" class="font-roboto">
        <div class="wrapper">
            <h4 class="card-title text-uppercase text-base-color">Add Product</h4>
            <div class="card my-5">
                <div class="card-body">
                    <form action="">
                        <div class="row row-cols-2">
                            <div class="col">
                                <div class="product-info border-end border-bottom p-4">
                                    <h6 class="card-title text-uppercase fw-bold">product information</h6>

                                    <div class="form-group my-3">
                                        <label for="" class="form-label text-capitalize">Category Name</label>
                                        <select name="" id=""  class="form-select">
                                            <option selected>1</option>
                                            <option selected>2</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="" class="form-label text-capitalize">Sub Category Name</label>
                                        <select name="" id=""  class="form-select">
                                            <option selected>1</option>
                                            <option selected>2</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="" class="form-label text-capitalize">Sub Sub Category Name</label>
                                        <select name="" id=""  class="form-select">
                                            <option selected>1</option>
                                            <option selected>2</option>
                                        </select>
                                    </div>


                                    <div class="row row-cols-2">
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-label text-capitalize">product id</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-label text-capitalize">product name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-label text-capitalize">product stock</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="" class="form-label text-capitalize">Brand</label>
                                        <select name="" id=""  class="form-select">
                                            <option selected>1</option>
                                            <option selected>2</option>
                                        </select>
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="" class="form-label text-capitalize">price</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="" class="form-label text-capitalize">discounted price</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="variation-info border-bottom border-end p-4">
                                    <div class="d-flex align-items-center justify-content-between ">
                                        <h6 class="card-title text-uppercase fw-bold">Variation</h6>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>

                                    <div class="form-group my-3">
                                        <label for="" class="form-label">Attribute</label>
                                        <select name="" id=""  class="form-select">
                                            <option selected>1</option>
                                            <option selected>2</option>
                                        </select>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-group me-2">
                                            <label for="" class="form-label">variation</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group me-2">
                                            <label for="" class="form-label">price</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">qty</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="description p-4 border-end border-bottom">
                                    <h6 class="card-title text-uppercase fw-bold">description</h6>
                                    <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col">
                                <div class="delivery-configuration border-bottom border-end p-4">
                                    <h6 class="card-title text-uppercase fw-bold">Delivery configuration</h6>

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span>Free delivery</span>

                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span>Flat rate</span>

                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <label>Delivery cost</label>
                                        <input type="number" class="form-control w-75">
                                    </div>
                                </div>

                                <div class="return border-end border-bottom p-4">
                                    <h6 class="card-title text-uppercase fw-bold">Return Policy</h6>

                                    <div class="d-flex justify-content-between align-items-center my-3">
                                        <span class="text-capitalize form-label">is return available?</span>

                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="stock border-end border-bottom p-4">
                                    <h6 class="card-title text-uppercase fw-bold">Low stock warning</h6>

                                    <div class="d-flex align-items-center justify-content-between my-3">
                                        <label class="form-label text-capitalize">quantity</label>
                                        <input type="number" class="form-control w-75">
                                    </div>
                                </div>


                                <div class="special-offer border-end border-bottom p-4">
                                    <h6 class="card-title text-uppercase fw-bold">Special Offer</h6>

                                    <div class="d-flex justify-content-between align-items-center my-3">
                                        <span class="text-capitalize form-label">status</span>

                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="most-sold-product border-end border-bottom p-4">
                                    <h6 class="card-title text-uppercase fw-bold">most sold product</h6>

                                    <div class="d-flex justify-content-between align-items-center my-3">
                                        <span class="text-capitalize form-label">status</span>

                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="estimate border-end border-bottom p-4">
                                    <h6 class="card-title text-uppercase fw-bold">Estimate delivery time</h6>

                                    <div class="d-flex align-items-center justify-content-between my-3">
                                        <label class="form-label text-capitalize">Inside Dhaka</label>
                                        <input type="number" class="form-control w-75">
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between my-3">
                                        <label class="form-label text-capitalize">outside Dhaka</label>
                                        <input type="number" class="form-control w-75">
                                    </div>
                                </div>

                                <div class="estimate border-end border-bottom p-4">
                                    <h6 class="card-title text-uppercase fw-bold">VAT & TAX</h6>

                                    <div class="d-flex align-items-center justify-content-between my-3">
                                        <label class="form-label text-capitalize">Inside Dhaka</label>
                                        <input type="number" class="form-control w-75">
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <select name="" id="" class="form-select w-75">
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="my-3  btn btn-base-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
