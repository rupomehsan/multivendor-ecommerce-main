@extends('layouts.landing.index')

@section('content')
    <div class="container" id="product-view">
        <!-- ***** Product Detail Information ***** -->
        <div id="productDetails">


        </div>
        <!-- ***** Related Products ***** -->
        <div id="relatedProducts">
            <div class="text-center">
                <h4 class="portion-title"><span>Related </span>Products</h4>
                <span>Customers who bought this, also bought</span>
            </div>
        </div>
        <div class="row row-cols-lg-3" id="showRelatedProducts">

        </div>
        <div class="col-lg-2 offset-lg-5">
            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
        </div>
        <!-- Add to Cart Modal -->
        <div class="modal fade" id="cartModal">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="w-75 m-auto py-3">
                        <h4 class="text-center text-capitalize">You have just added</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="row py-3">
                            <div class="col-lg-3">
                                <img class="border border-danger w-100 h-auto "
                                     src="{{asset('assets/image/pos-item.png')}}"
                                     alt="">
                            </div>
                            <div class="col-lg-9">
                                <h5>Puma Shoe</h5>
                                <span>1 x $14.99</span>
                                <div class="row my-3">
                                    <div class="col-lg-4">
                                        <a href="{{url('/cart')}}"
                                           class="btn btn-outline-danger form-control rounded-0 bottom-shadow">View
                                            Cart
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="{{url('/checkout')}}"
                                           class="btn btn-valencia form-control">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h5>Customer who bought this also bought</h5>
                            </div>
                            <div class="col-lg-6">
                                <div class="card bg-athens-gray">
                                    <div class="card-body">

                                        <div class="text-end">
                                            <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                            </button>
                                        </div>

                                        <div class="text-center ">
                                            <img class="py-4" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                        </div>
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6>Sneakers</h6>
                                                <p>Shoes</p>
                                                <hr>
                                                <h6>$14.99</h6>

                                                <p class="">
                                                <span class="iconify" data-icon="ant-design:star-filled"
                                                      style="color: #ffce31;"
                                                      data-width="20" data-height="20"></span>
                                                    <span>4.2</span>
                                                    <span>123 reviews</span>
                                                </p>

                                                <div class="row row-cols-2">
                                                    <div class="col">
                                                        <button class="btn btn-valencia form-control font-size-sm">Add
                                                            to
                                                            cart
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{url('/product-view')}}"
                                                           class="btn form-control btn-outline-valencia font-size-sm">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card bg-athens-gray">
                                    <div class="card-body">

                                        <div class="text-end">
                                            <button class="btn">
                                    <span class="iconify" data-icon="ant-design:heart-filled" style="color: #e20d13;"
                                          data-width="30" data-height="30"></span>
                                            </button>
                                        </div>

                                        <div class="text-center ">
                                            <img class="py-4" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                        </div>
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6>Sneakers</h6>
                                                <p>Shoes</p>
                                                <hr>
                                                <h6>$14.99</h6>

                                                <p class="">
                                                <span class="iconify" data-icon="ant-design:star-filled"
                                                      style="color: #ffce31;"
                                                      data-width="20" data-height="20"></span>
                                                    <span>4.2</span>
                                                    <span>123 reviews</span>
                                                </p>

                                                <div class="row row-cols-2">
                                                    <div class="col">
                                                        <button class="btn btn-valencia form-control font-size-sm">Add
                                                            to
                                                            cart
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{url('/product-view')}}"
                                                           class="btn form-control btn-outline-valencia font-size-sm">Details</a>
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
            </div>
        </div>
    </div>
@endsection


@push('custom-js')
    <script>
        /***
         * redirectPage
         * **/
        function redirectPage() {
            window.location.reload()
        }
        /***
         * productDetails
         * **/
        var productID ="{{request()->segment(2)}}"
        $(function(){
            productDetails(productID)
        })
        /***
         * get-related-products-by-category
         * **/
        var url = "{{url('api/v1/get-related-products-by-category')}}/" +productID;
        getRelatedProduct(url,"#showRelatedProducts")
        /***
         * updateQuantity
         * **/
        function updateQuantity(id) {
            var quantity = $("#quantity" + id).val()
            $.ajax({
                url: "{{url('api/v1/cart/client-cart-update')}}/",
                method: "post",
                data: {"quantity": quantity, "id": id},
                success: function (res) {
                    console.log(res)
                    if (res.status === "success") {
                        getClientCart()
                        toastr.success(res.message)
                    }
                },
                error: function (err) {
                    console.log(err)
                }
            })
        }
        /***
         * quantityDecrement
         * **/
        function quantityDecrement(id){
            document.getElementById("quantity").stepDown(1);
        }
        /***
         * quantityIncrement
         * **/
        function quantityIncrement(id){
            document.getElementById("quantity").stepUp(1);
        }

        /***
         * addToWishList
         * **/
        function addToWishList(id){
            $.ajax({
                url:"{{url('api/v1/add-to-wishlist')}}",
                method:"post",
                data:{"product_id":id},
                success:function(res){
                    console.log(res)
                    if(res.status==="success"){
                        toastr.success(res.message);

                        setTimeout(pageRedirect,1000)
                    }else if(res.status==="error"){
                        toastr.warning(res.message)
                    }
                },
                error:function(err){
                    console.log(err)
                }
            })
        }
    </script>
@endpush
