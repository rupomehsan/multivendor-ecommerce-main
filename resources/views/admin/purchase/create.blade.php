@extends('layouts.admin.index')
@section('content')

    <main id="category-list-content">
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #ffffff;
            }
        </style>
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Add Purchase</h4>
                    <form action="{{url('api/v1/purchase')}}" id="form" name="form" enctype="multipart/form-data"
                          novalidate>
                        <div class="custom-nav mt-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">General Information
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control"
                                               placeholder="date">
                                        <span class="text-danger" id="date_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Ref No</label>
                                        <input type="text" id="ref_no" name="ref_no" class="form-control"
                                               placeholder="Code Name">
                                        <span class="text-danger" id="ref_no_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="address" class="form-label">Note</label>
                                        <textarea id="note" name="note" cols="10" rows="5" class="form-control"></textarea>
                                        <span class="text-danger" id="note_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Supplier</label> <br>
                                        <select id='supplier_id' name="supplier_id" style='width: 200px;'
                                                class="form-control">
                                        </select>
                                        <span class="text-danger" id="supplier_id_error"></span>
                                    </div>
                                   <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label"> Product </label> <br>
                                        <select id='product_id' name="product_id" style='width: 200px;'
                                                class="form-control">
                                        </select>
                                        <span class="text-danger" id="product_id_error"></span>
                                    </div>

                                    <table>
                                        <tr>
                                            <th>Product</th>
                                            <th>Available</th>
                                            <th>Quantity</th>
                                            <th>Cost</th>
                                            <th>Sell Price</th>
                                            <th>Item Tax</th>
                                            <th>Item Total</th>
                                        </tr>
                                         <tbody class="product-item">

                                         </tbody>


                                        <tr>
                                            <td colSpan="6" style="text-align: right">Subtotal</td>
                                            <td colSpan="1" style="text-align: center" id="subtotal">
                                                <input type="hidden" name="subtotal" id="itemsubtotal">
                                                00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colSpan="6" style="text-align: right">Order Tax (%)</td>
                                            <td colSpan="1" style="text-align: center"><input type="number" name="order_tax" id="order_tax" class="form-control grandTotal" value="0"> </td>
                                        </tr>
                                        <tr>
                                            <td colSpan="6" style="text-align: right">Shipping Charge</td>
                                            <td colSpan="1" style="text-align: center"><input type="number" name="shipping_charge" id="shipping_charge" class="form-control grandTotal" value="0"> </td>
                                        </tr>
                                        <tr>
                                            <td colSpan="6" style="text-align: right">Other Charge</td>
                                            <td colSpan="1" style="text-align: center"><input type="number" name="other_charge" id="other_charge" class="form-control grandTotal" value="0"> </td>
                                        </tr>
                                        <tr>
                                            <td colSpan="6" style="text-align: right">Discount</td>
                                            <td colSpan="1" style="text-align: center"><input type="number" name="discount" id="discount" class="form-control grandTotal" value="0"> </td>
                                        </tr>
                                        <tr>
                                            <td colSpan="6" style="text-align: right">Payable Amount</td>
                                            <td colSpan="1" style="text-align: center"><input readonly type="number" id="payable_amount" name="payable_amount" class="form-control" value="0"> </td>
                                        </tr>
                                        <tr>
                                            <td colSpan="6" style="text-align: right">Payment Method</td>
                                            <td colSpan="1" style="text-align: center">
                                                <select name="payment_method" id="payment_method" class="form-control" >
                                                    <option value="cash_on_delivery">Cash On Delivery</option>
                                                    <option value="bkash">Bkash</option>
                                                    <option value="credit_card">Credit Card</option>
                                                    <option value="gift_card">Gift Card</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colSpan="6" style="text-align: right">Paid Amount</td>
                                            <td colSpan="1" style="text-align: center"><input type="number" id="paid_amount" name="paid_amount" class="form-control" value="0"> </td>
                                        </tr>
                                        <tr>
                                            <td colSpan="6" style="text-align: right">Due Amount</td>
                                            <td colSpan="1" style="text-align: center"><input type="number" id="due_amount" name="due_amount" class="form-control" value="0"> </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="m-3" style="float: right">
                            <a href="{{url('admin/purchase')}}" class="btn btn-outline-base">Cancel</a>
                            <button id="submit-button" type="submit" class="btn btn-base-primary">Save</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </main>
@endsection

@push('custom-js')

    <script>
        var quantity =0
        var cost =0
        var itemTotal = 0

        let description;
        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => {
                window.editor = editor;
                description = editor;
            });
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/purchase"
        }
        // dropdown menu
        // Initialize select2
        $("#supplier_id").select2();
        /**
         * GET All supplier
         * **/
        $(document).ready(function () {
            $.ajax({
                url: "{{ URL::to('/api/v1/suppliers') }}",
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    if (res.data.length > 0) {
                        console.log(res);
                        $('#supplier_id').empty()
                        $('#supplier_id').append(`
                          <option value='0'>No Supplier</option>
                        `)
                        res.data.forEach(function (item) {
                            $('#supplier_id').append(`
                          <option value='${item.id}'>${item.name}</option>
                        `)
                        })
                    }
                    // setTimeout(location.reload.bind(location), 1000);
                },
                error: function (xhr, resp, text) {
                    console.log(xhr);
                    // on error, tell the failed
                },
            });
        })
        // dropdown menu
        // Initialize select2
        $("#product_id").select2();
        /**
         * GET All supplier
         * **/
        $(document).ready(function () {
            $.ajax({
                url: "{{ URL::to('/api/v1/products') }}",
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    if (res.data.length > 0) {
                        console.log(res);
                        $('#product_id').empty()
                        $('#product_id').append(`
                          <option value='' selected disabled>Select Product</option>
                        `)
                        res.data.forEach(function (item) {
                            $('#product_id').append(`
                          <option value='${item.id}'>${item.name}</option>
                        `)
                        })
                    }
                },
                error: function (xhr, resp, text) {
                    console.log(xhr);
                },
            });
        })

        $('#product_id').change(function(){
            var id = $(this).val()
            url = "{{url('api/v1/products')}}/" + id
            $.ajax({
                url: url,
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    var i = 0;
                    var productInfo =res.data
                    $('.product-item').append(`
                      <tr>
                        <td>${productInfo.name} <input type="hidden" name="[product][${productInfo.id}][product_id]" value="${productInfo.id}"></td>
                        <td>${productInfo.quantity} </td>
                        <td> <input type="number" id="quantity${productInfo.id}" name="[product][${productInfo.id}][quantity]" min="1" class="form-control quantity" value=""></td>
                        <td> <input type="number" id="cost${productInfo.id}" name="[product][${productInfo.id}][cost]" min="1" class="form-control cost" value=""> </td>
                        <td> <input type="number" name="[product][${productInfo.id}][sell]" min="1" class="form-control sell"> </td>
                        <td> 0 </td>
                        <td  style="text-align: center" ><input type="hidden" id="itemTotal${productInfo.id}" name="[product][${productInfo.id}][item_total]"> <p readonly id="totalItem${productInfo.id}" class="itemTotal">  00 </p></td>
                    </tr>
                    `)
                     function eatchProduct(){
                         quantity = $('#quantity'+productInfo.id).val()
                         cost = $('#cost'+productInfo.id).val()
                         itemTotal = cost * quantity
                         $('#totalItem'+productInfo.id).text(itemTotal)
                         $('#itemTotal'+productInfo.id).val(itemTotal)
                         generateTotalPrice()
                     }
                    $('#quantity'+productInfo.id).keyup(function(){
                        eatchProduct()
                    })
                    $('#cost'+productInfo.id).keyup(function(){
                        eatchProduct()
                    })
                    function generateTotalPrice() {
                        var cartTotalPriceItems = document.querySelectorAll('.itemTotal');
                        var subTotalPrice = 0
                        cartTotalPriceItems.forEach(function(item) {
                            var itemPrice = parseInt(item.textContent)
                            subTotalPrice += itemPrice
                        })
                        $('#subtotal').text(subTotalPrice)
                        $('#itemsubtotal').val(subTotalPrice)
                        creaatePayment()
                    }
                },
                error: function (xhr, resp, text) {
                    console.log(xhr);
                },
            });
        })
        $('.grandTotal').keyup(function(){
            creaatePayment()
        })
        function creaatePayment(){
            var orderTax = $('#order_tax').val()
            var subTotal = parseInt($('#subtotal').text());
            var orderTaxCount = (subTotal * orderTax) / 100;
            var shippingCharge = parseInt($('#shipping_charge').val())
            var otherCharge = parseInt($('#other_charge').val())
            var discount = parseInt($('#discount').val())
            var grandTotal = parseInt((subTotal+otherCharge+shippingCharge+orderTaxCount)- discount)
            var payableAmmount = $('#payable_amount').val(grandTotal)
            var paidAmmount = $('#paid_amount').val(payableAmmount.val())
        }
        $('#paid_amount').keyup(function(){
            var payableAmmount = $('#payable_amount').val()
            var paidAmmount = $('#paid_amount').val()
            var dueCount = payableAmmount - paidAmmount
            if(dueCount>0){
                var dueAmount = $('#due_amount').val(dueCount)
            }else{
                var dueAmount = $('#due_amount').val(0)
            }
        })

        //add item
        //add item
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button", form);
        })
        //page restricted
        //page restricted
        let page = "{{request()->segment(2)}}";
        pageRestricted(page);
    </script>

@endpush
