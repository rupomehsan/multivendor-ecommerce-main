@extends('layouts.landing.index')
@section('content')
    <div class="cart-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="text-center portion-title py-5">Product Wishlist</h6>
                    <div class="table-wishlist">
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <thead>
                            <tr>
                                <th width="45%">Product Name</th>
                                <th width="15%">Unit Price</th>
                                <th width="15%">Stock Status</th>
                                <th width="15%">Buy Product</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody id="wishListTable">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('custom-js')
    <script>
        $(function () {
            getWishlist()




        })
    </script>
@endpush
