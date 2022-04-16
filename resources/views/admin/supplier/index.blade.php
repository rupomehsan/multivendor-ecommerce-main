@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">All Supplier</h4>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <a href="{{url('admin/suppliers/create')}}"
                               class="btn btn-base btn-base-primary float-lg-end my-3">
                                 <span class="iconify me-2" data-icon="carbon:add-filled" style="color: white;"
                                       data-width="20" data-height="20"></span>
                                Add Supplier
                            </a>
                        </div>
                        <!-- Modal -->
                        <div class="col-lg-12 col-sm-12 col-12">
                            <table class="table table-bordered data-table mt-3">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>image</th>
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
                ajax: "{{url('api/v1/suppliers')}}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'image', name: 'image'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
        // Edit call
        // Edit call
        $('body').on('click', '.editItem', function () {
            var id = $(this).data('id');
            window.location.href = "{{url('admin/suppliers/edit')}}" + "/" + id;
        });
        ///Delete Call
        ///Delete Call
        $('body').on('click', '.deleteItem', function () {
            var id = $(this).data("id");
            url = "{{url('api/v1/suppliers')}}" + "/" + id;
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
            url = "{{url('api/v1/manage-suppliers-approval')}}"
            approvalData(url, id, status)
        })
    </script>
@endpush
