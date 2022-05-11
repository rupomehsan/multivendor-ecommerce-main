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
        let productThumbSwiper = new Swiper(".productThumbSwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        let productSwiper = new Swiper(".productSwiper", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: productThumbSwiper,
            },
        });
    </script>
    <script>
        var productID ="{{request()->segment(2)}}"
        $(function(){
            $.ajax({
                url:"{{url('api/v1/products')}}/" + productID,
                method : "get",
                dataType: "json",
                success:function(res){
                    console.log(res)
                    var item = res.data;
                    if(res.status==="success"){
                        $('#productDetails').empty()
                            $("#productDetails").append(`
                             <div class="row">
                                 <div class="col-lg-4">
                                        <div  style="--swiper-navigation-color: rgba(0, 0, 0, 0.35); --swiper-pagination-color: #fff" class="swiper productSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets/image/pos-item.png')}}"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <div thumbsSlider="" class="swiper productThumbSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{asset('assets/image/pos-item.png')}}"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Sizes & Colors -->
                                        <div class="d-flex align-items-center my-5">
                                            <span class="">Colors</span>
                                            <div class="color-switcher ms-5">
                                                <span class="switch-button" id="#33D0DA"></span>
                                                <span class="switch-button" id="#22A0DF"></span>
                                                <span class="switch-button" id="#FF8A00"></span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center my-5">
                                            <span class="">Size</span>

                                            <div class="size-switcher ms-5">
                                                <span class="size-button" id="10">10</span>
                                                <span class="size-button" id="12">12</span>
                                                <span class="size-button" id="14">14</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="d-flex justify-content-between align-items-center my-5">
                                            <h2 class="text-uppercase">${item.name}</h2>
                                            <button class="btn bg-valencia rounded-0">
                                                <span class="iconify" data-icon="fontisto:email" style="color: white;" data-width="20"
                                                      data-height="20"></span>
                                            </button>
                                        </div>
                                        <div class="review my-5 border-top border-bottom d-flex align-items-center py-4">
                                            <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                                                  data-height="20"></span>
                                            <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                                                  data-height="20"></span>
                                            <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                                                  data-height="20"></span>
                                            <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                                                  data-height="20"></span>
                                            <span class="iconify" data-icon="ant-design:star-filled" style="color: #ffce31;" data-width="20"
                                                  data-height="20"></span>
                                            <span class="mx-4">4.2</span>
                                            <span class="text-secondary border-start ps-4">(123 Customer reviews)</span>
                                        </div>


                                        <h2 class="mb-3 text-valencia fw-bold">$ <span id="price">${item.price}</span></h2>

                                        <span class="text-black-50 ">
                                        ${item.description}
                                        </span>

                                        <div class="border-top border-bottom py-3 my-4">
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <div class="handle-counter border bg-athens-gray bottom-shadow " id="handleCounter">
                                                        <label for="qty">Qty:</label>
                                                        <button class="btn decrement-btn" onclick="quantityDecrement('${item.id}')">-</button>
                                                        <input id="quantity" name="qty" min="1" class="counter-input"  type="number" value="1">
                                                        <button class="btn increment-btn" onclick="quantityIncrement('${item.id}')">+</button>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <button class="btn btn-valencia form-control"
                                                            d onclick="addToCart('${item.id}')">Add to cart
                                                    </button>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <button
                                                        class="btn btn-outline-valencia form-control text-capitalize d-flex align-items-center justify-content-center">
                                                        <span class="iconify me-3" data-icon="ic:outline-favorite" data-width="20"
                                                              data-height="20"></span>
                                                        add to wishlist
                                                    </button>
                                                </div>


                                                <div class="col-lg-6 mb-3">
                                                    <button onclick="addToCompare('${item.id}')"
                                                        class="btn btn-outline-valencia form-control justify-content-center text-capitalize d-flex align-items-center">
                                                        <span class="iconify me-3 " data-icon="bx:git-compare" data-width="20"
                                                              data-height="20"></span>
                                                        compare
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        <h6 class="fw-bold">Product Code:<span class="text-secondary mx-2 fw-normal">${item.product_code}</span></h6>
                                        <h6 class="fw-bold">Category:<span class='text-secondary mx-2 fw-normal'>${item.category[0].name}</span></h6>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="sold-box my-5 p-2">
                                            <h6 class="text-valencia">Sold by</h6>
                                            <h4 class="">BATA shoes
                                                <span class="iconify" data-icon="flat-color-icons:ok" data-width="20" data-height="20"></span>
                                            </h4>
                                            <h3 class="text-valencia">50</h3>

                                            <button class="btn btn-valencia form-control rounded-pill mb-3 default-font-size">
                                                <span class="iconify" data-icon="bx:store" data-width="20" data-height="20"></span>
                                                Visit store
                                            </button>
                                            <button class="btn btn-valencia rounded-pill mb-3 form-control font-size-sm">
                                                <span class="iconify" data-icon="bx:store" data-width="20" data-height="20"></span>
                                                Add to favorite seller
                                            </button>
                                            <button class="btn btn-valencia rounded-pill form-control mb-3 default-font-size">
                                                <span class="iconify" data-icon="bx:store" data-width="20" data-height="20"></span>
                                                Contact seller
                                            </button>
                                        </div>

                                        <div class="seller-product-box">
                                            <ul>
                                                <li>
                                                    <div class="d-flex align-items-center justify-content-between pb-3">
                                                        <h6 class="m-0 title">Seller products</h6>
                                                        <div class="">
                                                            <a href="">
                                                                <span class="iconify" data-icon="dashicons:arrow-left-alt2" data-width="20"
                                                                      data-height="20"></span>
                                                            </a>
                                                            <a href="">
                                                                <span class="iconify" data-icon="dashicons:arrow-right-alt2" data-width="20"
                                                                      data-height="20"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="py-3">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <img style="width: 100px; height: 100px" src="{{asset('assets/image/pos-item.png')}}" alt="">
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <h6 class="d-flex align-items-center fw-bold">
                                                                <span class="iconify me-2" data-icon="ant-design:star-filled" data-width="20"
                                                                      data-height="20"></span>
                                                                4.2
                                                            </h6>
                                                            <h6 class="text-valencia fw-bold">$123.00</h6>
                                                            <p class="fw-bold">School Bag</p>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <span class="iconify cursor-pointer text-valencia" data-icon="bi:plus-circle"
                                                                  data-width="20" data-height="20"></span>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li class="py-3">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <img style="width: 100px; height: 100px"
                                                                 src="{{asset('assets/image/pos-item.png')}}" alt="">
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <h6 class="d-flex align-items-center fw-bold">
                                                                <span class="iconify me-2" data-icon="ant-design:star-filled" data-width="20"
                                                                      data-height="20"></span>
                                                                4.2
                                                            </h6>
                                                            <h6 class="text-valencia fw-bold">$123.00</h6>
                                                            <p class="fw-bold">School Bag</p>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <span class="iconify cursor-pointer text-valencia" data-icon="bi:plus-circle"
                                                                  data-width="20" data-height="20"></span>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li class="py-3">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <img style="width: 100px; height: 100px"
                                                                 src="{{asset('assets/image/pos-item.png')}}" alt="">
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <h6 class="d-flex align-items-center fw-bold">
                                                                <span class="iconify me-2" data-icon="ant-design:star-filled" data-width="20"
                                                                      data-height="20"></span>
                                                                4.2
                                                            </h6>
                                                            <h6 class="text-valencia fw-bold">$123.00</h6>
                                                            <p class="fw-bold">School Bag</p>
                                                        </div>

                                                        <div class="col-lg-2">
                                                            <span class="iconify cursor-pointer text-valencia" data-icon="bi:plus-circle"
                                                                  data-width="20" data-height="20"></span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                       </div>
                                     </div>
                                      <!-- ***** Description & Review Tab ***** -->
                                        <div id="descriptionReviewTab" class="my-5 border-bottom">

                                            <ul class="nav nav-tabs justify-content-center align-items-center" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                                            data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                                            aria-selected="true">Description
                                                    </button>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button"
                                                            role="tab" aria-controls="profile" aria-selected="false">Reviews
                                                    </button>
                                                </li>

                                                <li class="nav-item social-links">
                                                    <a href="">
                                                    <span class="iconify" data-icon="ant-design:facebook-filled" data-width="30"
                                                          data-height="30"></span>
                                                    </a>
                                                    <a href="">
                                                    <span class="iconify" data-icon="ant-design:facebook-filled" data-width="30"
                                                          data-height="30"></span>
                                                    </a>
                                                </li>
                                            </ul>


                                            <div class="tab-content py-3" id="myTabContent">

                                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row row-cols-2">
                                                        <div class="col-4">
                                                            <h2>Description</h2>
                                                        </div>
                                                        <div class="col">
                                                            ${item.description}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="row row-cols-2">
                                                        <div class="col-4">
                                                            <h2>Reviews</h2>
                                                        </div>
                                                        <div class="col-8">
                                                            <ul>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-lg-2">
                                                                            <img class="img-fluid border" src="{{asset('assets/image/pos-item.png')}}"
                                                                                 alt="">
                                                                        </div>
                                                                        <div class="col-lg-10">
                                                                            <span>Product Name dolor sit amet, consectetur adipiscing elit. Pellentesque mi ut leo tristique morbi vel amet integer.</span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                          `)

                    }
                },
                error:function(err){
                    console.log(err)
                }
            })
        })

        $.ajax({
            url: "{{url('api/v1/get-related-products')}}/" +productID,
            method: "get",
            dataType:"json",
            success:function(res){
                console.log("relateddata",res)
                if(res.status==="success"){
                    $('#showRelatedProducts').empty()
                    res.data.forEach(function(item){
                        $('#showRelatedProducts').append(`
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
                                                    <h5 class="fw-bold text-capitalize">${item.name}</h5>
                                                    <span class="fw-lighter text-capitalize">${item.category[0].name}</span>
                                                    <hr>
                                                    <h5 class="fw-lighter">$ ${item.price}</h5>

                                                    <span class="d-flex align-items-center justify-content-center my-4">
                                                        <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                              data-width="20" data-height="20"></span>
                                                       <span class="text-warning fw-bold">4.2</span>
                                                        <span class="text-secondary fw-lighter mx-3">123 reviews</span>
                                                    </span>


                                                    <div class="row row-cols-2 my-2">
                                                        <div class="col">
                                                            <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center " onclick="addToCart('${item.id}')">
                                                                <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                        <div class="col">
                                                            <a href="{{url('/product-view')}}/${item.id}"
                                                               class="btn form-control btn-outline-valencia">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        `)
                    })
                }
            },
            error:function(err){
                console.log(err)
            }
        })

        function addToCart(id){
           var quantity = $('#quantity').val()
           var price = $('#price').text()
            if (quantity<1) {
                toastr.error('Minimum 1 item required')
            } else {
                $.ajax({
                    url: '{{ url('api/v1/carts') }}',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'product_id': id,
                        'quantity': quantity,
                        'price': price
                    },
                    success: function(res) {
                        console.log(res)
                        if(res.status==="success"){
                            toastr.success(res.message)
                            getClientCartPublic()
                        }else if(res.status==="error"){
                            toastr.error(res.message)
                        }
                        // $('#quantity').val(0)
                    },
                    error: function(err) {
                        console.log(err)
                    }
                })
            }
        }

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

        function quantityDecrement(id){
            document.getElementById("quantity").stepDown(1);
        }

        function quantityIncrement(id){
            document.getElementById("quantity").stepUp(1);
        }

        function addToCompare(id){
            $.ajax({
                url:"{{url('api/v1/add-to-compare')}}",
                method:"post",
                data:{"product_id":id},
                success:function(res){
                    console.log(res)
                    if(res.status==="success"){
                        toastr.success(res.message);
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
