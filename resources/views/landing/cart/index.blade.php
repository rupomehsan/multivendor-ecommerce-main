@extends('layouts.landing.index')

@section('content')
    <div class="container py-5 my-5" id="cart-section">

        <div class="row row-cols-2 justify-content-between">
            <div class="col-8">
                <table class="table text-capitalize">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>quantity</th>
                        <th>Item total price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="border" id="cardBody">


                    </tbody>

                    <tfoot>

                    <tr>
                        <td colSpan="3" class=""></td>
                        <th class="text-black-50 ">sub-total</th>
                        <th class="text-end " id="subTotal">00</th>
                    </tr>
                    <tr>
                        <td colSpan="3"></td>
                        <th class="text-black-50 ">Delivery charge</th>
                        <th class="text-end " id="deliveryCharge">80</th>
                    </tr>

                    <tr class="border-bottom bottom-shadow">
                        <td colSpan="3">
                            <a href="" class="text-valencia">continue with shopping</a>
                        </td>
                        <th>Grand total</th>
                        <th class="text-end" id="grandTotal">00</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <div class="col-4">
                <form action="">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="text-center my-3">
                                <span class="text-black-50 border-bottom ">Have a coupon code?</span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Type coupon code">
                                <button class="btn btn-valencia text-capitalize">Apply</button>
                            </div>
                            <a href="{{url('checkout')}}" class="btn btn-valencia form-control text-capitalize my-3">
                                MAKE PURCHASE
                            </a>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
@push('custom-js')
    <script>
       $(document).ready(function(){
           getClientCart()
       })

        function getClientCart() {
            $.ajax({
                url: "{{url('api/v1/cart/get-client-carts')}}",
                method: "get",
                dataType: "json",
                success: function (res) {
                    console.log("cart",res)
                    if (res.status === "success") {
                        $("#cardBody").empty()
                        res.data.forEach(function (item) {

                            $("#cardBody").append(`
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="" alt="">
                                                    <h6>${item.product.name}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <h6>${item.price}</h6>
                                            </td>
                                              <td>
                                                <div class="handle-counter border" id="handleCounter">
                                                    <button class="btn decrement-btn" onclick="quantityDecrement('${item.id}')">-</button>
                                                    <input class="counter-input" type="number" min="1" onchange="updateQuantity('${item.id}')" id="quantity${item.id}" value="${item.quantity}">
                                                    <button class="btn increment-btn" onclick="quantityIncrement('${item.id}')">+</button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="handle-counter itemTotal" id="handleCounter">
                                                   <h6 id="price">${item.price * item.quantity}</h6>
                                                </div>
                                            </td>
                                            <td>
                                               <button class="btn btn-warning btn-sm"> <span class="iconify" data-icon="bi:trash" data-width="20" data-height="20" onclick="deleteCartItem('${item.id}')"></span></button>
                                            </td>
                                        </tr>
                            `)


                        })

                        subTotal()

                        function subTotal() {
                            var cartTotalPriceItems = document.querySelectorAll('.itemTotal');
                            var subTotalPrice = 0
                            cartTotalPriceItems.forEach(function (item) {
                                var itemPrice = parseInt(item.textContent)
                                subTotalPrice += itemPrice
                            })
                            $('#subTotal').text(subTotalPrice)
                            grandTotal()
                        }

                        function grandTotal() {
                            var subTotal = $('#subTotal').text()
                            var deliveryCharge = $('#deliveryCharge').text();
                            var grandTotal = parseInt(subTotal) + parseInt(deliveryCharge)
                            $('#grandTotal').text(grandTotal)
                            // alert(grandTotal)
                        }
                        if(res.data.length<1){
                            $('#grandTotal').text(00)
                        }
                    }

                },
                error: function (err) {
                    console.log(err)
                }
            })
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

        function deleteCartItem(id) {
            $.ajax({
                url: "{{url('api/v1/cart/client-cart-item-delete')}}/",
                method: "post",
                data: {"id": id},
                success: function (res) {
                    console.log(res)
                    if (res.status === "success") {
                        toastr.warning(res.message)
                        getClientCart()
                        getClientCartPublic()
                    }
                },
                error: function (err) {
                    console.log(err)
                }
            })
        }

       function quantityDecrement(id){
           document.getElementById("quantity"+id).stepDown(1);
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

        function quantityIncrement(id){
            document.getElementById("quantity"+id).stepUp(1);
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


    </script>
@endpush
