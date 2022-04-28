@extends('layouts.admin.index')
@section('content')
    <main id="pos-content">
        <h4 class="text-capitalize">pos system</h4>

        <div class="row">
            <div class="col-lg-8 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-4 col-sm-6 col-12 my-3">
                                <form class="search-form">
                                    <input class="search-field" name="search_product" id="search_product" type="text"
                                           placeholder="Search">
                                    <span class="iconify search-icon" data-icon="carbon:search" data-width="25"
                                          data-height="25"></span>
                                </form>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 my-3">
                                <div class="row row-cols-2 align-items-center">
                                    <div class="col">
                                        <select class="form-select" name="category_list" id="category_list">
                                        </select>
                                    </div>
                                    <div class="col">
                                        <a href="{{url('admin/pos/orders-list')}}"
                                           class="btn btn-base btn-base-primary">See all orders</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-12 my-3">
                                <div class="row d-flex justify-content-center" id="productShow">
                                </div>
                                <nav>
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <form action="{{url('api/v1/product/order')}}" id="form" name="form" enctype="multipart/form-data"
                      novalidate>
                    <div class="card">
                        <div class="card-body overflow-auto">
                            <select class="form-select" name="customer_id" id="customer_id">
                                <option selected>Select Customer</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                            </select>
                            <div class="row row-cols-2 my-2">
                                <div class="col my-3">
                                   <a class="btn btn-base-primary btn-base text-white" href="{{url('admin/customers/create')}}"> Add Customer</a>
                                </div>
                            </div>
                            <div class="row my-2 align-items-center">
                                <div class="col-lg-8">
                                <span>Current Customer: <b> <span
                                            id="customerName">No Customer Select </span></b></span>
                                </div>
                                <div class="col-lg-4 text-end my-3">
                                    <button class="btn btn-warning btn-base text-white" onclick="clearCurd()">Clear cart
                                    </button>
                                </div>
                            </div>
                            <table>
                                <tr>
                                    <th width="50">ITEM</th>
                                    <th width="10">QTY</th>
                                    <th width="10">PRICE</th>
                                    <th width="10">ITEM TOTAL</th>
                                    <th width="10">DELETE</th>
                                </tr>
                                <tbody id="selectItem">
                                </tbody>
                            </table>
                            <div class=" text-end">
                                <div class="row py-3">
                                    <div class=" col-9">Subtotal:</div>
                                    <div class="col-3"><b>  <input readonly type="text" class="form-control" name="sub_total" id="subTotal" value="00" /></b></div>
                                </div>
                                <div class="row py-3">
                                    <div class=" col-9">Discount(%):</div>
                                    <div class="col-3"><b> <input type="number" name="discount" class="form-control" id="discount" value="0" min="0"> </b></div>
                                </div>
                                <div class="row py-3">
                                    <div class=" col-9">Grand Total:</div>
                                    <div class="col-3"><b> <input readonly id="grandTotal" type="text" class="form-control" name="grand_total" class="grandTotal" value="00" /></b></div>
                                </div>

                                <div class="row row-cols-2">
                                    <button class="btn btn-danger form-control col m-1" onclick="clearCurd()">Cancel</button>
                                    <button class="btn btn-base-primary form-control col">Order
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ORDER MODAL -->
        <div class="modal fade" id="customerModal">

            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title">Add new customer</h5>
                    </div>
                    <div class="modal-body">
                        <!-- CUSTOMER'S NAME -->
                        <div class="mb-3">
                            <label for="name" id="name_label" class="form-label">Customer’s Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                            <span class="text-danger" id="name_error">Error MSG</span>
                        </div>
                        <!-- CUSTOMER'S EMAIL -->
                        <div class="my-3">
                            <label for="email" id="email_label" class="form-label">Customer’s Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                            <span class="text-danger" id="email_error">Error MSG</span>
                        </div>
                        <!-- CUSTOMER'S PHONE -->
                        <div class="my-3">
                            <label for="phone" id="phone_label" class="form-label">Customer’s Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone">
                            <span class="text-danger" id="phone_error">Error MSG</span>
                        </div>
                        <!-- CUSTOMER'S ADDRESS -->
                        <div class="my-3">
                            <label for="address" id="address_label" class="form-label">Customer’s Address</label>
                            <input type="text" id="address" name="address" class="form-control"
                                   placeholder="Enter Address">
                            <span class="text-danger" id="address_error">Error MSG</span>
                        </div>
                        <!-- CUSTOMER'S ADDRESS ZIP CODE -->
                        <div class="my-3">
                            <label for="zip_code" id="zip_code_label" class="form-label">Customer’s ZIP Code</label>
                            <input type="text" id="zip_code" name="zip_code" class="form-control"
                                   placeholder="Enter ZIP Code">
                            <span class="text-danger" id="zip_code_error">Error MSG</span>
                        </div>
                    </div>
                    <div class="modal-footer border-0 justify-content-start">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-base-primary px-5">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('custom-js')
    <script>
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/pos"
        }
        var customerInfo = {'customerInfo': []};
        // get all product
        // get all product
        $(function () {
            var url = "{{url('api/v1/get-all-products')}}"
            getAllProduct(url)
            $('#search_product').keyup(function () {
                var url = "{{url('api/v1/get-search-products')}}"
                var searchData = $(this).val()
                getAllProduct(url, searchData, categoryId = null)
            })

            $('#category_list').change(function () {
                var url = "{{url('api/v1/get-search-products')}}"
                var categoryId = $(this).val()
                getAllProduct(url, searchData = null, categoryId)
            })

            var categoryUrl = "{{url('api/v1/categories')}}"
            getAllCategory(categoryUrl)

        });
        // dropdown menu
        // Initialize select2
        $("#customer_id").select2();
        /**
         * GET All supplier
         ***/
        $(document).ready(function () {

            $.ajax({
                url: "{{ URL::to('/api/v1/customers') }}",
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    console.log("customer", res)
                    if (res.data.length > 0) {
                        console.log(res);
                        $('#customer_id').empty()
                        $('#customer_id').append(`
                          <option value='' selected disabled>Select Customer</option>
                        `)
                        res.data.forEach(function (item) {
                            customerInfo['customerInfo'].push(item);
                            // cusrotmerName.push(cusrotmerName[id])
                            // alert(item.name)
                            $('#customer_id').append(`
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

        $('#customer_id').change(function () {
            var customeId = Number($(this).val())
            customerInfo.customerInfo.forEach(function (item) {
                // alert(item.id)
                if (item.id === customeId) {
                    $('#customerName').text(item.name)
                }
            })
        })

        function addItem(id) {

            $.ajax({
                url: "/api/v1/products/" + id,
                method: "get",
                dataType: "json",
                success: function (res) {
                    if (res.status === "success") {

                        var cartTotalPriceItems = document.querySelectorAll('.existItem');
                        var allItem = []
                        cartTotalPriceItems.forEach(function (item) {
                            var itemPrice = parseInt(item.textContent)
                            allItem.push(itemPrice)
                        })
                        itemId = Number(id)
                        if (!allItem.includes(itemId)) {
                            $('#selectItem').append(`
                                 <tr>
                                    <td>${res.data.name.slice(0, 15)} <span style="opacity: 0" class="existItem" >${res.data.id}<span> <input type="hidden"   name="[product][${res.data.id}][product_id]" value="${res.data.id}">   </td>
                                    <td><input type="number" class="form-control" id="quantity${res.data.id}"  name="[product][${res.data.id}][quantity]" min="1" value="1"></td>
                                    <td> <input readonly class="form-control" id="ItemPrice${res.data.id}" name="[product][${res.data.id}][price]" value="${res.data.price}"> </td>
                                    <td> <input readonly class="itemTotal form-control" id="itemTotal${res.data.id}"  name="[product][${res.data.id}][itemTotal]"></td>
                                    <td><button class="btn btn-primary sm delteItem"><span class="iconify" data-icon="fa6-solid:delete-left"></span></button></td>
                                </tr>
                             `)
                        } else {
                            toastr.error('This Product Already Added')
                        }
                        // console.log("allItem",allItem)
                        onLoadItemTotal()

                        function onLoadItemTotal() {
                            var quantity = $('#quantity' + res.data.id).val()
                            var price = $('#ItemPrice' + res.data.id).val()
                            var itemTotal = quantity * price
                            setItemTotal(itemTotal)
                            generateTotalPrice()
                        }

                        $('#quantity' + res.data.id).keyup(function () {
                            var quantity = $(this).val()
                            var price = $("#ItemPrice" + res.data.id).val()
                            var itemTotal = quantity * price
                            setItemTotal(itemTotal)
                            generateTotalPrice()
                        })
                        $('#quantity' + res.data.id).click(function () {
                            var quantity = $(this).val()
                            var price = $("#ItemPrice" + res.data.id).val()
                            var itemTotal = quantity * price
                            setItemTotal(itemTotal)
                            generateTotalPrice()
                        })

                        function setItemTotal(itemTotal) {
                            $("#itemTotal" + res.data.id).text(itemTotal)
                            $("#itemTotal" + res.data.id).val(itemTotal)
                        }


                        function generateTotalPrice() {
                            var cartTotalPriceItems = document.querySelectorAll('.itemTotal');
                            var subTotalPrice = 0
                            cartTotalPriceItems.forEach(function (item) {
                                var itemPrice = parseInt(item.textContent)
                                subTotalPrice += itemPrice
                            })
                            // $('#subTotal').text(subTotalPrice)
                            $('#subTotal').val(subTotalPrice)
                            grandTotal()
                        }

                        function grandTotal() {
                            var subTotal = parseInt($('#subTotal').val())
                            var discountNumber = parseInt($('#discount').val())
                            var discount = (subTotal * discountNumber) / 100;
                            var grandtotal = subTotal - discount
                            $('#grandTotal').val(grandtotal)
                            // $('.grandtotal').val(grandtotal)
                        }

                        $('.delteItem').click(function () {
                            $(this).parents('tr').remove();
                            generateTotalPrice()
                        })
                        $('#discount').click(function(){
                            generateTotalPrice()
                        })
                        $('#discount').keyup(function(){
                            generateTotalPrice()
                        })


                    }

                },
                error: function (err) {
                    console.log("rerror", err)
                }
            });
        }


        function clearCurd() {
            $("#selectItem").empty()
            $('#subTotal').val("00")
            $('#grandTotal').val("00")
        }


        //order item
        //order item
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button", form);
        })

    </script>
@endpush
