@extends('layouts.admin.seller')
@section('content')
    <main id="products-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-uppercase text-base-color">Products</h4>

                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-4 col-sm-6 col-12 my-3">
                            <form class="search-form">
                                <input class="search-field" type="text" placeholder="Search">
                                <span class="iconify search-icon" data-icon="carbon:search" data-width="25"
                                      data-height="25"></span>
                            </form>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-12">
                            <a href="{{url('seller/add-product')}}" class="btn btn-base btn-base-primary">
                                <span class="iconify me-2" data-icon="carbon:add-filled" style="color: white;"
                                      data-width="20" data-height="20"></span>
                                Add Product
                            </a>
                        </div>
                    </div>


                    <table class="table" id="help-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>product image</th>
                            <th>product id</th>
                            <th>product name</th>
                            <th>category name</th>
                            <th>sub category name</th>
                            <th>sub sub category name</th>
                            <th>stock</th>
                            <th>price</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="" alt="brand-img">
                            </td>
                            <td>NOIR</td>
                            <td>Clothing brand</td>
                            <td>Clothing brand</td>
                            <td>Clothing brand</td>
                            <td>Clothing brand</td>
                            <td>Clothing brand</td>
                            <td>Clothing brand</td>
{{--                            <td>--}}
{{--                                <label class="switch">--}}
{{--                                    <input type="checkbox">--}}
{{--                                    <span class="slider"></span>--}}
{{--                                </label>--}}
{{--                            </td>--}}
                            <td>
                                <span class="iconify" data-icon="bxs:edit" data-width="20" data-height="20"></span>
                                <span class="iconify" data-icon="ant-design:delete-outlined" data-width="20" data-height="20"></span>
                            </td>
                        </tr>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </main>
@endsection
