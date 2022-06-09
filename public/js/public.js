var productColor = []
var productSize = []
var baseUrl = window.origin + "/api/v1/"
// get all sliders
// get all sliders
function getAllSliders() {
    $.ajax({
        url: baseUrl + "sliders", method: "get", dataType: "json", success: function (res) {
            if (res.status === "success") {
                $('#slider').empty()
                res.data.forEach(function (item) {
                    $('#slider').append(`
                          <div class="swiper-slide">
                                <img src="assets/image/hero.png" alt="">
                                <div class="container overlay">
                                    <h1 class="title">
                                        Get
                                        <br/>
                                        <span>${item.title}</span>
                                    </h1>
                                    <h2 class="percentage">
                                        ${item.offer} % OFF!
                                    </h2>
                                    <span>
                                    ${item.description}
                                </span>
                                </div>
                            </div>
                        `)
                })
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

//get all categories
//get all categories
function getAllCategories(id) {
    // alert(id)
    $.ajax({
        url: baseUrl + "categories", method: "get", dataType: "json", success: function (res) {
            console.log(res)
            if (res.data.length > 0) {
                $('#category').empty()
                res.data.forEach(function (item) {
                    if (id === "#categorySlider") {
                        $(id).append(`
                          <div class="swiper-slide">
<!--                           ${item.image}-->
                           <img src="assets/image/category.png" alt="">
                            <div class="overlay">
                                <span>${item.name}</span>
                            </div>
                        </div>
                        `)
                    } else if (id === "#searchCategory") {
                        $(id).append(`
                           <div class="col">
                                    <input type="button"
                                            data-id="${item.id}"
                                           class="btn bg-valencia form-control text-white rounded-pill my-1 searchCategory"
                                           value="${(item.name.slice(0, 10))}">
                                </div>
                        `)
                    } else if (id === "#categoryPage") {
                        $(id).append(`
                           <div class="col my-3">
                                <div class="card border">
                                    <div class="card-body d-flex">
                                        <img src="assets/image/category.png" style="width: 200px; height: 120px" alt="">
                                        <div class="ms-3">
                                            <a href="all-products/${item.id}" class="fw-bold">${item.name}</a>
                                            <ul class="d-flex mt-4">
                                                <li class="me-2">
                                                    <a href="" class="text-black">Laptop,</a>
                                                </li>
                                                <li class="me-2">
                                                    <a href="" class="text-black">Laptop,</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
                    } else if (id === "#categorySiteNav") {
                        // alert(id)
                        $(id).append(`
                           <button class="accordion">${item.name} <span class="iconify"
                                                                      data-icon="ep:arrow-right-bold"
                                                                      data-width="20"
                                                                      data-height="20"></span></button>
                        <div class="panel py-3">
                            <a href="javascript:void(0)" onclick="getProductByCategoryAndShopId('${item.id}')" class="d-block text-capitalize" >${item.name}</a>
                        </div>
                        `)

                    }

                })

                var acc = document.querySelectorAll(".accordion");
                // console.log(acc)
                var i;
                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    });
                }
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

// get client cart
// get client cart
function getClientCartPublic() {
    var url = baseUrl + "cart/get-client-carts"
    $.ajax({
        url: url, method: "get", dataType: "json", success: function (res) {
            // console.log("cart", res)
            if (res.status === "success") {
                $('#badgeCount').text(res.count)
                $("#cartItem").empty()
                if (res.count) {
                    $('#totatlItemCount').text('(' + res.count + ')')
                }
                res.data.forEach(function (item) {
                    $("#cartItem").append(`
                                   <li>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6>${(item.product.name).slice(0, 15).concat('...')}</h6>
                                            <h6 class="text-valencia fw-lighter">${item.quantity}X$ ${item.price}</h6>
                                        </div>
                                        <img src="{{asset('assets/image/pos-item.png')}}" alt="">
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                            `)
                })
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

// get client compare list
// get client compare list
function getClientCompareList() {
    var url = baseUrl + "get-all-compare-list"
    $.ajax({
        url: url, method: "get", dataType: "json", success: function (res) {
            // console.log("cart", res)
            if (res.status === "success") {
                $('#compareCount').text(res.count)
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

// get popular product list
// get popular product list
function getProduct(url, id) {
    // alert(id)
    $.ajax({
        url: url, method: "get", dataType: "json", success: function (res) {
            console.log("allproduct", res)
            if (res.status === "success") {
                if (res.count) {
                    $('#totalCountProductByCategory').text(res.count)
                }
                $(id).empty()
                productSingleItem(res.data, id)
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

// get getAllBrands  list
// get getAllBrands  list
function getAllBrands(id) {
    // alert(id)
    $.ajax({
        url: baseUrl + "brands", method: "get", dataType: "json", success: function (res) {
            // console.log("allbrands",res)
            if (res.data.length > 0) {
                res.data.forEach(function (item) {
                    // alert(item)
                    if (id === "#showAllBrands") {
                        // alert(id)
                        $(id).append(`
                           <div class="col-lg-2 my-3">
                                <a href="">
                                    <div class="brand-img border ">
<!--                                        <img src="${window.origin}/assets/image/bikash.png" alt="">-->
                                        ${item.image}
                                        <h5 class="my-3">${item.name}</h5>
                                    </div>
                                </a>
                            </div>
                        `)
                    } else if (id === "#allBrandforShop") {
                        // alert(id)
                        $(id).append(`
                           <div class="form-check">
                                <input class="form-check-input brandChk" type="checkbox" value="${item.id}" class="brand">
                                <label class="form-check-label mt-1" for="flexCheckDefault">
                                   ${item.name}
                                </label>
                            </div>
                        `)
                    }
                })
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

// get getAllShops list
// get getAllShops list
function getAllShops(url, id) {
    // alert(id)
    $.ajax({
        url: url, method: "get", dataType: "json", success: function (res) {
            // console.log("allbrands",res)
            if (res.data.length > 0) {
                res.data.forEach(function (item) {
                    // alert(item)
                    $(id).append(`
                           <div class="col-lg-4 col-12 mb-3">
                                <div class="card position-relative">
                                    <img class="card-img-top shop-cover-photo" src="${window.origin}/assets/image/shop-bg.png" alt="">
                                    <img class="shop-profile-photo" src="${window.origin}/assets/image/shop-bg.png" alt="">


                                    <div class="card-body border pt-5 text-center">
                                        <h6 class="fw-bold my-3 fs-3">${(item.store_details) ? item.store_details.store_name : "Store Name"}</h6>
                                        <p class="fw-bold">All kind of clothing store</p>
                                        <span class="d-block">Shop since 9th july, 2018</span>
                                        <span class="d-block">Total Products <span class="fw-bold">${item.products_count}</span> </span>

                                        <div class="row justify-content-around my-3">
                                            <div class="col-3">
                                                <button class="btn form-control fw-bold">follow</button>
                                            </div>
                                            <div class="col-4">
                                                <a class="btn form-control btn-valencia" href="vendor/shop/${item.id}">Visit Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
                })
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

// add to card product
// add to card product
function addToCart(id, shopId) {
    // var shopId = $('#product_shop_id').val()
    var quantity = '';
    quantity = $('#quantity').val()
    if (quantity === undefined) {
        quantity = 1
    }
    var price = $('#price').text()
    var url = baseUrl + "carts"
    $.ajax({
        url: url, method: 'POST', dataType: 'json', data: {
            '_token': '{{ csrf_token() }}',
            'product_id': id,
            'shop_id': shopId,
            'quantity': quantity,
            'size': productSize,
            'color': productColor
        }, success: function (res) {
            console.log(res)
            if (res.status === "success") {
                toastr.success(res.message)
                getClientCartPublic()
            } else if (res.status === "error") {
                toastr.success(res.message)
            }
            // $('#quantity').val(0)
        }, error: function (err) {
            console.log(err)
        }
    })

}

// get single product
// get single product
function productSingleItem(res, id) {
    console.log("rupom", res)
    res.forEach(function (item) {
        $(id).append(`
                          <div class="col my-3">
                                    <div class="card bg-athens-gray rounded-sm product-card">
                                        <div class="card-body">

                                            <ul class="extra-list">
                                                <li class="list-item existColor" onclick="addToWishList('${item.id}')">
                                                    <span class="iconify action-btn ${(item.is_wish_list) === true ? 'existColor' : ''}" data-icon="ant-design:heart-filled"
                                                          data-width="25" data-height="25"></span>
                                                </li>
                                                <li class="list-item" onclick="addToCompare('${item.id}')">
                                                    <span class="iconify action-btn ${(item.is_compare_list) === true ? 'existColor' : ''}" data-icon="bx:git-compare" data-width="25"
                                                          data-height="25"></span>
                                                </li>
                                            </ul>
                                            <div class="text-center my-5">
                                                <img class="product-img" src="${window.origin}/assets/image/pos-item.png" alt="">
                                            </div>

                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h5 class="fw-bold text-capitalize py-3" >${(item.name).slice(0, 60).concat('.....')}</h5>
                                                    <span class="fw-lighter text-capitalize">${item.category[0].name}</span>
                                                    <hr>
                                                    <h5 class="fw-lighter">$ <span id="price${item.id}"> ${item.price} </span></h5>

                                                    <span class="d-flex align-items-center justify-content-center my-4">
                                                        <span class="iconify me-2 text-warning" data-icon="ant-design:star-filled"
                                                              data-width="20" data-height="20"></span>
                                                       <span class="text-warning fw-bold" id="productRating">${countReview(item)}</span>
                                                         <span class="text-secondary fw-lighter mx-3">${item.reviews_count} reviews</span>
                                                    </span>
                                                    <div class="row row-cols-2 my-2">
                                                        <div class="col">
                                                            <button class="btn btn-valencia form-control d-flex align-items-center justify-content-center " onclick="addToCart('${item.id}','${item.vendors_id}')">
                                                                <span class="iconify me-2" data-icon="fa:cart-plus" data-width="20" data-height="20"></span>
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                        <div class="col">
                                                            <a href="/product-view/${item.id}"
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

    function countReview(res) {
        var reviewCount = 0
        if (res.reviews) {
            res.reviews.forEach(function (item) {
                reviewCount += item.rating
            })
            var rating = reviewCount / res.reviews_count
            return rating.toFixed(2)
        }

        // console.log("ratingProduct",rating)
    }

}

// add To WishList
// add To WishList
function addToWishList(id) {
    $.ajax({
        url: baseUrl + "add-to-wishlist", method: "post", data: {"product_id": id}, success: function (res) {
            console.log(res)
            if (res.status === "success") {
                toastr.success(res.message);
                setTimeout(reload, 1000)

                function reload() {
                    location.reload()
                }

                //get popular products
                //get popular products
                // var popularProductList = window.origin+"/api/v1/get-all-products"
                // getProduct(popularProductList,"#popularProduct")
            } else if (res.status === "error") {
                toastr.warning(res.message)
                setTimeout(reload, 1000)

                function reload() {
                    location.reload()
                }

                //get popular products
                //get popular products
                // var popularProductList = window.origin+"/api/v1/get-all-products"
                // getProduct(popularProductList,"#popularProduct")
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

/***
 * addToCompare
 * **/
function addToCompare(id) {
    $.ajax({
        url: window.origin + "/api/v1/add-to-compare",
        method: "post",
        data: {"product_id": id},
        success: function (res) {
            console.log(res)
            if (res.status === "success") {
                toastr.success(res.message);
                getClientCompareList()
                setTimeout(reload, 1000)

                function reload() {
                    location.reload()
                }
            } else if (res.status === "error") {
                toastr.warning(res.message)
                setTimeout(reload, 1000)

                function reload() {
                    location.reload()
                }
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
}

// get Related Product
// get Related Product
function getRelatedProduct(url, id) {
    // alert(url)
    $.ajax({
        url: url, method: "get", dataType: "json", success: function (res) {
            console.log("relateddata", res)
            if (res.status === "success") {
                $('#showRelatedProducts').empty()
                productSingleItem(res.data, id)
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

// get product details
// get product details
function productDetails(productID) {
    $.ajax({
        url: baseUrl + "products/" + productID, method: "get", dataType: "json", success: function (res) {
            console.log("productDetails", res)
            var item = res.data;
            if (res.status === "success") {

                $('#productDetails').empty()
                $("#productDetails").append(`
                             <div class="row">
                             <input type="hidden" id="product_shop_id" value="${item.vendors_id}" >
                                 <div class="col-lg-4">
                                        <div  style="--swiper-navigation-color: rgba(0, 0, 0, 0.35); --swiper-pagination-color: #fff" class="swiper productSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                     <img src="${window.origin}/assets/image/pos-item.png" alt="">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <div thumbsSlider="" class="swiper productThumbSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>

                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="${window.origin}/assets/image/pos-item.png"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Sizes & Colors -->
                                        <div class="d-flex align-items-center my-5" >
                                              <span class="">Colors</span>
                                            <div class="color-switcher ms-5" id="productColor">

                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center my-5" >
                                            <span class="">Size</span>

                                            <div class="size-switcher ms-5" id="productSize">

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
                                        <div class="review my-5 border-top border-bottom d-flex align-items-center py-4 ">
                                                <span class="fa fa-star ${item.rating >= 1 ? "checked" : ""} my-3"></span>
                                                <span class="fa fa-star ${item.rating >= 2 ? "checked" : ""}"></span>
                                                <span class="fa fa-star ${item.rating >= 3 ? "checked" : ""}"></span>
                                                <span class="fa fa-star ${item.rating >= 4 ? "checked" : ""}"></span>
                                                <span class="fa fa-star ${item.rating >= 5 ? "checked" : ""}"></span>
                                            <span class="mx-4">${item.rating}</span>
                                            <span class="text-secondary border-start ps-4">(${item.reviews_count} Customer reviews)</span>
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
                                                             onclick="addToCart('${item.id}')">Add to cart
                                                    </button>
                                                </div>

                                                <div class="col-lg-6 mb-3">
                                                    <button onclick="addToWishList('${item.id}')"
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


                                        <h6 class="fw-bold py-2">Product Code:<span class="text-secondary mx-2 fw-normal">${item.product_code}</span></h6>
                                        <h6 class="fw-bold py-2">Category:<span class='text-secondary mx-2 fw-normal'>${item.category[0].name}</span></h6>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="sold-box my-5 p-2">
                                            <h6 class="text-valencia">Sold by</h6>
                                            <h4 class="py-3">${item.store_details.store_name}
                                                <span class="iconify" data-icon="flat-color-icons:ok" data-width="20" data-height="20"></span>
                                            </h4>
                                            <h3 class="text-valencia my-2">50</h3>
                                              <a href="${window.origin}/vendor/shop/${item.vendors_id}" class="btn btn-valencia form-control rounded-pill mb-3 default-font-size" >

                                                <span class="iconify" data-icon="bx:store" data-width="20" data-height="20"></span>
                                                Visit store

                                                </a>

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
                                                 <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="given-review-tab" data-bs-toggle="tab" data-bs-target="#givenReview" type="button"
                                                            role="tab" aria-controls="profile" aria-selected="false">Given Reviews
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
                                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                                            <h2 class="fw-bold">Description</h2>
                                                        </div>
                                                        <div class="col">
                                                            ${item.description}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="profile-tab">
                                                    <div class="row row-cols-2">
                                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                                            <h2 class="fw-bold">Reviews</h2>
                                                        </div>
                                                        <div class="col-8">
                                                            <ul>
                                                                <li>
                                                                <div id="productReview">

                                                                </div>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade " id="givenReview" role="tabpanel" aria-labelledby="givenReview-tab">
                                                    <div class="row row-cols-2">
                                                        <div class="col-4 d-flex justify-content-center align-items-center">
                                                            <h2 class="fw-bold"> Given Reviews</h2>
                                                        </div>
                                                        <div class="col-8">
                                                           <div class="row">
                                                            <div class="col-12 col-md-6" style="font-size: 2em;">
                                                            <form action="${window.origin}/api/v1/product/review" id="form" name="form" enctype="multipart/form-data"  novalidate>
                                                            <input type="hidden" placeholder="Enter your name" name="author" id="author" class="form-control my-2">
                                                            <input type="hidden" placeholder="" name="product_id" class="form-control my-2" value="${item.id}">
                                                            <input type="hidden" placeholder="Enter your Email" name="email" id="email" class="form-control my-2">
                                                            <textarea name="review" id="review" cols="10" rows="5" class="form-control"> </textarea>

                                                             <span class="text-danger font-size-sm" id="review_error" ></span>
                                                             <p class="my-2 font-size-sm-3">Give Rating</p>
                                                                <div id="halfstarsReview"></div>
                                                                 <input type="text" readonly id="rating_count"  name="rating_count" class="form-control form-control-sm my-2">
                                                                  <span class="text-danger font-size-sm" id="rating_count_error"></span>
                                                                  <div class="d-flex justify-content-end my-3">
                                                                    <button id="submit-button" type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </form>
                                                            </div>

                                                        </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                          `)
                prudctReview(item.reviews)

                function prudctReview(review) {
                    // console.log("review",review)
                    $("#productReview").empty()
                    review.forEach(function (item) {
                        // console.log("review",item.text)
                        $("#productReview").append(`
                         <div class="row my-3 justify-content-center align-items-center">
                             <div class="col-lg-2">
                                <img class="img-fluid border" src="${window.origin}/assets/image/pos-item.png"
                                     alt="">
                            </div>
                            <div class="col-lg-10">
                                <p class="fw-bold my-3">${item.author}</p>
                                <p>${item.text}</p>
                                    <span class="fa fa-star ${item.rating >= 1 ? "checked" : ""} my-3"></span>
                                    <span class="fa fa-star ${item.rating >= 2 ? "checked" : ""}"></span>
                                    <span class="fa fa-star ${item.rating >= 3 ? "checked" : ""}"></span>
                                    <span class="fa fa-star ${item.rating >= 4 ? "checked" : ""}"></span>
                                    <span class="fa fa-star ${item.rating >= 5 ? "checked" : ""}"></span>
                                  </div>
                            </div>
                        </div>
                        <hr>
                        `)
                    })
                }

                /***
                 * productColor
                 ***/
                $(document).on("click", '.colorClass', function () {
                    // alert($(this).val())
                    productColor = []
                    productColor.push($(this).val())
                    // console.log("color", productColor)
                })
                /***
                 * productSize
                 ***/
                $(document).on("click", '.sizeClass', function () {
                    // alert($(this).val())
                    productSize = []
                    productSize.push($(this).val())
                })
                /***
                 * giving rating
                 * **/
                $('#form').submit(function (e) {
                    e.preventDefault();
                    let form = $(this);
                    formSubmit("post", "submit-button", form);
                })
                /***
                 * Rating
                 * **/
                $("#halfstarsReview").rating({
                    "full": true, "click": function (e) {
                        console.log(e);
                        $("#rating_count").val(e.stars);
                    }
                });

                var userData = JSON.parse(localStorage.getItem("userInfo")) || null
                if (userData === null) {
                    $("#givenReview").empty()
                    $("#givenReview").append(`
                      <div class="row row-cols-2">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <h2 class="fw-bold"> GivenReviews</h2>
                            </div>
                            <div class="col-8">
                             <h4 class="fw-bold py-3">If you want to rate this product please loggedin </h4>
                             <a href="${window.origin}/login" class="btn btn-primary">Login</a>

                            </div>
                            </div>
                            </div>
                    `)
                } else {
                    $("#author").val(userData.name)
                    $("#email").val(userData.email)
                }
                /***
                 * get  COLOR Size
                 * **/
                getSize(item.attributes)
                getColor(item.attributes)

                function getColor(attributes) {
                    attributes.color.forEach(function (item) {
                        // console.log("color",item)
                        $("#productColor").append(`
                          <label class="colorContainer">
                              <input type="radio"  class="colorClass"  name="color" value="${item}">
                              <span class="colorCheckmark switch-button" id="${item}" ></span>
                            </label>
                        `)
                        // $("#productColor").append(`
                        //   <span class="switch-button" id="${item}" ></span>
                        // `)
                    })
                }

                function getSize(attributes) {
                    attributes.size.forEach(function (item) {
                        // console.log("size",item)
                        $("#productSize").append(`
                          <label class="btn-container">
                              <input type="radio" class="sizeClass"  name="size" value="${item}" >
                              <span class="checkmark sizeClass">${item}</span>
                            </label>
                        `)
                        // $("#productSize").append(`
                        //   <span class="size-button" id="${item}"></span>
                        // `)
                    })
                }

                /***
                 * COLOR SWITCHER
                 * **/
                let colorSwitchButtons = document.querySelectorAll('.switch-button');
                colorSwitchButtons.forEach(item => {
                    let id = item.getAttribute('id')
                    let buttonId = document.getElementById(id);
                    buttonId.style.backgroundColor = id;
                    buttonId.addEventListener('click', function (e) {
                        buttonId.style.border = '1px solid black'
                    })
                })

                /***
                 * SIZE SWITCHER
                 * **/
                // let sizeSwitchButtons = document.querySelectorAll('.size-button');
                $(".size-button").click(function () {
                    // var id = $(this).attr('id')
                    var clss = $(this).hasClass('sizeSelect');
                    if (clss === false) {
                        $(this).addClass('sizeSelect')
                    } else if (clss === true) {
                        $(this).removeClass('sizeSelect')
                    }
                })

                /***
                 * product slider
                 * **/
                let productThumbSwiper = new Swiper(".productThumbSwiper", {
                    spaceBetween: 10, slidesPerView: 4, freeMode: true, watchSlidesProgress: true,
                });
                let productSwiper = new Swiper(".productSwiper", {
                    spaceBetween: 10, navigation: {
                        nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev",
                    }, thumbs: {
                        swiper: productThumbSwiper,
                    },
                });

            }
        }, error: function (err) {
            console.log(err)
        }
    })
}


//search Product By Price And CategoryId
// search Product By Price And CategoryId
function searchProductByPriceAndCategoryId(categoryId, priceRange) {
    $.ajax({
        url: baseUrl + "get-product-by-price-categoryId",
        method: "get",
        dataType: 'json',
        data: {"categoryId": categoryId, "priceRange": priceRange},
        success: function (res) {
            if (res.status === "success") {
                // alert(res.data.length)
                if (res.data.length <= 0) {
                    $('#popularProduct').empty()
                    $('#popularProduct').append(`
                          <div class="d-flex justify-content-center col-lg-12 " style="width: 40vh;"> <h1 class="alert alert-danger">Sorry Product  Not Found.........</h1> </div>
                        `)
                } else {
                    $('#popularProduct').empty()
                    productSingleItem(res.data, "#popularProduct")
                    // $('#popularProduct').empty()
                    // res.data.forEach(function (item) {
                    //     $('#popularProduct').append(`
                    //        ${productSingleItem(res,"#")}
                    //     `)
                    // })
                }
            }
            console.log(res)
        },
        error: function (err) {
            console.log(err)
        }
    })
}

//get shop details
//get shop details
function getShopDetailsWithAllProduct(url, shopId) {
    // alert(url)
    $.ajax({
        url: window.origin + url, method: "get", dataType: 'json', success: function (res) {
            if (res.status === "success") {
                console.log("vendor", res)
                $("#shopdetailsContainer").append(`
                         <div class="vendor-banner">
                         <img class="vendor-banner-img" src="${window.origin}/assets/image/vendor-page.png" alt="">
                         <div class="container py-3">
                            <div class="row row-cols-2">
                                <div class="col">
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="row" id="shopDetails">
                                                <div class="col-lg-2">
                                                    <img src="${window.origin}/assets/image/vendor-icon.png" alt="">
                                                </div>

                                                <div class="col-lg-6 text-center">
                                                    <h6 class="fw-bold py-3 text-capitalize">${res.data.shopDetails.store_name}</h6>

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
                          <nav class="bg-white py-2 vendor-nav">
                            <div class="container">
                                <ul class="d-flex justify-content-center align-items-center">

                                    <li class="me-5 nav-item">
                                        <a href="${window.origin}/all-shops" class="nav-link
                                        {{ in_array('vendor', request()->segments()) && count(request()->segments()) === 1 ? 'active' : '' }}"
                                        >
                                            Shop
                                        </a>
                                    </li>
                                    <li class="me-5 nav-item">
                                        <a href="${window.origin}/vendor/all-products/${shopId}"
                                           class="nav-link {{in_array('all-products', request()->segments())  ? 'active' : '' }}">All
                                            Products</a>
                                    </li>

                                    <li class="me-5 nav-item">
                                        <a href="${window.origin}/vendor/coupon/${shopId}"
                                           class="nav-link {{ in_array('profile', request()->segments()) ? 'active' : '' }}">coupon</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                         <div id="vendor-shop-section" class=" bg-white">
                         <img src="${window.origin}/assets/image/poster.png" class="img-fluid" alt="">
                        <div class="container py-5">
                            <div id="popular-product" class="popular-product py-5">
                                <div class="container">
                                    <h2 class="portion-title text-center">Special Offers</h2>
                                    <div class="row row-cols-lg-3" id="specialOfferProduct">
                                              <!--  Specialperoduct here-->
                                                <!--Specialperoduct here-->
                                    </div>
                                     <div class="col-lg-2 offset-lg-5">
                                            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
                                        </div>

                                </div>
                            </div>


                            <div id="popular-product" class="popular-product py-5">
                                <div class="container">
                                    <h2 class="portion-title text-center">Feature Products</h2>
                                    <div class="row row-cols-lg-3" id="featureProduct">
                                                 <!--  featureProduct here-->
                                                <!--featureProduct here-->
                                    </div>
                                     <div class="col-lg-2 offset-lg-5">
                                            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
                                        </div>
                                </div>
                            </div>
                            <div id="popular-product" class="popular-product py-5">
                                <div class="container">
                                    <h2 class="portion-title text-center">Best Selling Products</h2>

                                    <div class="row row-cols-lg-3" id="bestSellingProduct">
                                                <!--  bestSellingProduct here-->
                                                <!--bestSellingProduct here-->

                                    </div>
                                         <div class="col-lg-2 offset-lg-5">
                                            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
                                        </div>
                                </div>
                            </div>
                            <div id="popular-product" class="popular-product py-5">
                                <div class="container">
                                    <h2 class="portion-title text-center">Best Rated Products</h2>

                                    <div class="row row-cols-lg-3" id="bestRaredProduct">
                                                <!--  bestRaredProduct here-->
                                                <!--bestRaredProduct here-->
                                    </div>
                                      <div class="col-lg-2 offset-lg-5">
                                            <button class="btn btn-valencia form-control text-capitalize rounded-sm my-5">Load more products</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                        <div class="py-4 text-center my-3" style="background: #FFEDEE">
                            <a href="${window.origin}/" class="text-valencia fw-bold fs-4 text-center">View all products of this shop >>></a>
                        </div>
                        </div>
                `)
            }
            productSingleItem(res.data.specialOfferProduct, "#specialOfferProduct")
            productSingleItem(res.data.featureProduct, "#featureProduct")
            productSingleItem(res.data.bestSellingProduct, "#bestSellingProduct")
            productSingleItem(res.data.bestRatedProduct, "#bestRaredProduct")

        }, error: function (err) {
            if (err.responseJSON.status === 'error') {
                window.location.href = window.origin + "/not-found"
            }
        }
    })
}

//get getSingleShopDetails details
//get getSingleShopDetails details
function getSingleShopDetails(url, shopId) {
    // alert(url)
    $.ajax({
        url: window.origin + url, method: "get", dataType: 'json', success: function (res) {
            if (res.status === "success") {
                console.log("vendor", res)
                $(shopId).append(`
                        <div class="col-lg-2">
                            <img src="${window.origin}/assets/image/vendor-icon.png" alt="">
                        </div>

                        <div class="col-lg-6 text-center">
                            <h6 class="fw-bold text-center py-3 text-capitalize">${res.data.shopDetails.store_name}</h6>

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
                `)
            }
        }, error: function (err) {
            if (err.responseJSON.status === 'error') {
                window.location.href = window.origin + "/not-found"
            }
        }
    })
}

//get getAllProductByShopId details
//get getAllProductByShopId details
function getAllProductByShopId(url, id) {
    $.ajax({
        url: window.origin + url, method: "get", dataType: 'json', success: function (res) {
            if (res.status === "success") {
                $('#totalCountProductByShop').text(res.data.count)
                productSingleItem(res.data.allProducts, id)
            }
        }, error: function (err) {
            if (err.responseJSON.status === 'error') {
                window.location.href = window.origin + "/not-found"
            }
        }
    })
}

//get searching Product details
//get searching Product details
function seachingProduct(data, id) {
    // alert(data.url)
    $.ajax({
        url: data.url, method: "get", data: {data}, dataType: 'json', success: function (res) {
            if (res.status === "success") {
                $(id).empty()
                productSingleItem(res.data, id)
                if (res.data.length === 0) {
                    $(id).append(`
                    <div class="alert alert-danger">Product Not Found........</div>
                    `)
                }
            }
        }, error: function (err) {
            if (err.responseJSON.status === 'error') {
                window.location.href = window.origin + "/not-found"
            }
        }
    })
}

//get AllProductByShopIdAndCategoryId Product details
//get getAllProductByShopIdAndCategoryId Product details
function getAllProductByShopIdAndCategoryId(data, id) {
    // alert(data.url)
    $.ajax({
        url: data.url, method: "get", data: {data}, dataType: 'json', success: function (res) {
            if (res.status === "success") {
                $(id).empty()
                productSingleItem(res.data, id)
                if (res.data.length === 0) {
                    $(id).append(`
                    <div class="alert alert-danger">Product Not Found........</div>
                    `)
                }
            }
        }, error: function (err) {
            if (err.responseJSON.status === 'error') {
                window.location.href = window.origin + "/not-found"
            }
        }
    })
}

//get Wishlist
//get Wishlist
function getWishlist() {
    $.ajax({
        url: baseUrl + "get-all-wishlist", method: "get", dataType: "json", success: function (res) {
            if (res.status === "success") {
                $('#wishListTable').empty()
                res.data.forEach(function (item) {
                    $('#wishListTable').append(`
                               <tr>
                                <td width="45%">
                                <a href="product-view/${item.product.id}">
                                    <div class="display-flex align-center">
                                        <div class="img-product">
                                            <img src="https://www.91-img.com/pictures/laptops/asus/asus-x552cl-sx019d-core-i3-3rd-gen-4-gb-500-gb-dos-1-gb-61721-large-1.jpg" alt="" class="mCS_img_loaded">
                                        </div>
                                        <div class="name-product">
                                            ${item.product.name}
                                        </div>
                                    </div>
                                  </a>
                                </td>
                                <td width="15%" class="price">$  ${item.product.price}</td>
                                <td width="15%"><span class="in-stock-box">${(item.product.quantity) === 0 ? "Stock Out" : " In Stock"} </span></td>
                                <td width="15%"><button class="round-black-btn small-btn" onclick="addToCart('${item.product.id}','${item.product.vendors_id}')" >Add to Cart</button></td>
                                <td width="10%" class="text-center" onclick="deleteWishList('${item.id}')"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            `)
                })
            }
            console.log(res)
        }, error: function (err) {
            console.log(err)
        }
    })
}

function deleteWishList(id) {
    $.ajax({
        url: baseUrl + "delete-wishlist/" + id, method: "get", dataType: "json", success: function (res) {
            if (res.status === "success") {
                toastr.warning(res.message)
                getWishlist()
            }
            console.log(res)
        }, error: function (err) {
            console.log(err)
        }
    })
}


$(document).on('click', '.category-menu', function () {
    $('.category-list').toggleClass('d-none')
})
$(document).on('click', '.homepage-menu', function () {
    $('.homepage-list').toggleClass('d-none')
})
$(document).on('click', '.order-menu', function () {
    $('.order-list').toggleClass('d-none')
})
$(document).on('click', '.chat-launcher', function () {
    $('.chat-section').toggleClass('d-none')
    $('.chat-launcher').addClass('d-none')
})
$(document).on('click', '.close-btn', function () {
    $('.chat-section').addClass('d-none')
    $('.chat-launcher').removeClass('d-none')
})
/***
 * SUB-MENU TOGGLE
 * **/
$('.sub-list').hide();
$('.list > .sub-list').parent().click(function () {
    let submenu = $(this).children('.sub-list');
    let title = $(this).children('.list-title');
    if ($(submenu).is(':hidden')) {
        $(submenu).slideDown(200);
        $(title).css('font-weight', 'bold')
    } else {
        $(title).css('font-weight', 'normal')
        $(submenu).slideUp(200);
    }
});
/***
 * COLOR SWITCHER
 * **/
let colorSwitchButtons = document.querySelectorAll('.switch-button');
console.log("color", colorSwitchButtons)


colorSwitchButtons.forEach(item => {
    let id = item.getAttribute('id')
    let buttonId = document.getElementById(id);
    buttonId.style.backgroundColor = id;
    buttonId.addEventListener('click', function (e) {
        buttonId.style.border = '1px solid black'
    })
})
/***
 * SIZE SWITCHER
 * **/
let sizeSwitchButtons = document.querySelectorAll('.size-button');
sizeSwitchButtons.forEach(item => {
    let id = item.getAttribute('id')
    let buttonId = document.getElementById(id);
    // buttonId.style.backgroundColor = id;
    buttonId.addEventListener('click', function (e) {
        buttonId.style.cssText = 'border: none; background: red; color: white;'
    })
})


function getClientCartAllItems() {
    $.ajax({
        url: baseUrl + "get-client-cart-all-items",
        method: "get",
        dataType: "json",
        success: function (res) {


            if (res.status === "success") {
                var data = res.data
                let shopGroup = data.reduce((r, a) => {
                    r[a.shop_id] = [...r[a.shop_id] || [], a];
                    return r;
                }, {});
                const cartEntries = Object.entries(shopGroup);
                $("#clientCartItem").append(`
                  <input type="checkbox"  class="checkAll" data-checkwhat="chkSelect" /><span class="mx-3">Select All </span>
                `)
                cartEntries.forEach(function (item) {
                    $("#clientCartItem").append(`
                    <div class=" my-3 py-2">
                    <div class="my-3">
                    <input class="form-check-input select-input chkSelect" data-shopid="${item[0]}" type="checkbox" name="chkSelect[]" value="" /> <span class="mx-3">${item[1][0].store_details.store_name}</span> <span class="iconify" data-icon="akar-icons:chevron-right"></span>
                    </div>
                    <ul class="test${item[0]}"></ul>
                    </div>
                     <hr>
                    `)
                    item[1].forEach(function (item2) {
                        $(".test" + item[0]).append(`
                         <li class="order_list_item py-1 mx-3">
                                <div class="d-flex">
                                 <input class="form-check-input select-input chkSelect productItem" data-productid="${item[0]}" type="checkbox" name="chkSelect[]" value="${item2.id}" />
                                    <img class="img-fluid bottom-shadow me-5"
                                         src="assets/image/pos-item.png" alt="">
                                    <ul class="text-capitalize fw-bold">
                                        <li class="my-2">
                                             <h6 class="text-secondary fw-bold">Product Name: <span
                                                    class="text-black-50 fw-lighter">${item2.product.name}</span></h6>
                                        </li>
                                        <li class="my-2">
                                            <h6 class="text-secondary fw-bold">Price: <span
                                                    class="text-black-50 fw-lighter">${item2.price}</span></h6>
                                        </li>
                                        <li class="my-2">
                                            <h6 class="text-secondary fw-bold">color: <span
                                                    class="text-black-50 fw-lighter">${(item2.color) ? (item2.color) : "N/A"}</span></h6>
                                        </li>
                                        <li class="my-2">
                                            <h6 class="text-secondary fw-bold">size: <span
                                                    class="text-black-50 fw-lighter">${(item2.size) ? (item2.size) : "N/A"}</span></h6>
                                        </li>
                                        <li class="my-2">
                                            <h6 class="text-secondary fw-bold">quantity: <span
                                                    class="text-black-50 fw-lighter">${item2.quantity}</span></h6>
                                        </li>
                                        <li class="my-2">
                                            <h6 class="text-secondary fw-bold">total price: <span
                                                    class="text-black-50 fw-lighter itemTotalPrice">${item2.price * item2.quantity}</span></h6>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        `)
                    })
                })

                var allVals = [];
                $(".checkAll").click(function () {
                    var checkwhat = $(this).data("checkwhat");
                    alert(checkwhat)
                    $('input:checkbox.' + checkwhat).not(this).prop('checked', this.checked);
                    updateTextArea()
                });

                function updateTextArea() {
                    allVals.length = 0;
                    $(".chkSelect:checked").each(function () {
                        allVals.push($(this).val());
                    });
                    console.log(allVals)
                }

                $(document).on("click", ".chkSelect", function () {
                    if ($(this).data('shopid')) {
                        var shopId = $(this).data('shopid')
                        var selectItem = document.querySelectorAll(".productItem")
                        selectItem.forEach(function (data) {
                            var productId = data.getAttribute('data-productid')
                            if (productId === shopId) {
                                alert("hi")
                            }
                            // console.log("data",data.getAttribute('data-productid'))
                        })

                    } else if ($(this).data('producid')) {
                        // alert($(this).data('productid'));
                    }
                    // if($(this).data('shopId'))
                    allVals.length = 0
                    $("input[name='chkSelect[]']:checked").each(function () {
                        allVals.push($(this).val());
                        updateTextArea();
                    })
                })
                console.log("output", allVals)

                itemTotalPrice()

                function itemTotalPrice() {
                    var price = document.querySelectorAll('.itemTotalPrice')
                    var subTotal = 0
                    price.forEach(function (item) {
                        subTotal += parseInt(item.textContent)
                    })
                    $('#totalPrice').text(subTotal)
                    $('.totalPrice').val(subTotal)

                }

                grandTotal()

                function grandTotal() {
                    var totalPrice = parseInt($('#totalPrice').text())
                    var deliveryMethod = $('.deliveryMethod:checked').val();
                    var packaging = $('.packaging:checked').val();
                    var deliveryData = JSON.parse(deliveryMethod)
                    var packingData = JSON.parse(packaging)
                    var grandtotalProce = totalPrice + parseInt(deliveryData.price) + parseInt(packingData.price)
                    $('#grandTotal').text(grandtotalProce)
                    $('.grandTotal').val(grandtotalProce)
                }

                $('.deliveryMethod').click(function () {
                    grandTotal()
                })
                $('.packaging').click(function () {
                    grandTotal()
                })
                $('#store_id').val(storeId)

            }
        },
        error: function (err) {
            console.log(err)
        }

    })
}

