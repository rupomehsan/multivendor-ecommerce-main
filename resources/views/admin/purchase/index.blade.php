@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">All Purchase</h4>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <a href="{{url('admin/purchase/create')}}"
                               class="btn btn-base btn-base-primary float-lg-end my-3">
                                 <span class="iconify me-2" data-icon="carbon:add-filled" style="color: white;"
                                       data-width="20" data-height="20"></span>
                                Add Purchase
                            </a>
                        </div>
                        <!-- Modal -->
                        <div class="col-lg-12 col-sm-12 col-12">
                            <table class="table table-bordered data-table mt-3">
                                <thead>
                                <tr>
                                    <th>Invoice id</th>
                                    <th>Grand Total</th>
                                    <th>Paid Amount</th>
                                    <th>Due Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>

                        </nav>
                    </div>
                </div>
            </div>
            <!-- Extra large modal -->
            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        ...
                    </div>
                </div>
            </div>
    </main>
@endsection
@push('custom-js')

    <script>
        // get call
        // get call
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{url('api/v1/purchase')}}",
                columns: [
                    {data: 'invoice_id', name: 'invoice_id'},
                    {data: 'grand_total', name: 'grand_total'},
                    {data: 'paid_amount', name: 'paid_amount'},
                    {data: 'due_amount', name: 'due_amount'},
                    {data: 'payment_status', name: 'payment_status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
        // Edit call
        // Edit call
        $('body').on('click', '.editItem', function () {
            var id = $(this).data('id');
            window.location.href = "{{url('admin/purchase/edit')}}" + "/" + id;
        });
        // Edit call
        // Edit call
        $('body').on('click', '.editPayment', function () {
            var id = $(this).data('id');
            window.location.href = "{{url('admin/purchase/payment')}}" + "/" + id;
        });
        // Edit call
        // Edit call
        $('body').on('click', '.returnItem', function () {
            var id = $(this).data('id');
            window.location.href = "{{url('admin/purchase/return')}}" + "/" + id;
        });
        // Edit call
        // Edit call
        $('body').on('click', '.viewItem', function () {
            var id = $(this).data('id');
            window.location.href = "{{url('admin/purchase/view')}}" + "/" + id;
        });
        ///Delete Call
        ///Delete Call
        $('body').on('click', '.deleteItem', function () {
            var id = $(this).data("id");
            url = "{{url('api/v1/purchase')}}" + "/" + id;
            deleteItem(url)
        });
        ///approval  Call
        ///approval Call
        $(document).on('change', '#approval', function () {
            var id = $(this).attr('data-id')
            var status = ''
            if ($(this).prop("checked")) {
                status = 'active'
            } else {
                status = 'inactive'
            }
            url = "{{url('api/v1/manage-purchase-approval')}}"
            approvalData(url, id, status)
        })
    </script>
@endpush
