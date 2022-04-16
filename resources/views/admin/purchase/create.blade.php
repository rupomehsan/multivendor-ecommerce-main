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
                background-color: #dddddd;
            }
        </style>
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Add Purchase</h4>
                    <form action="{{url('api/v1/suppliers')}}" id="form" name="form" enctype="multipart/form-data"
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
                                        <textarea id="note" name="note"cols="10" rows="5" class="form-control">

                                        </textarea>
{{--                                        <input type="text" id="note" name="note" class="form-control"--}}
{{--                                               placeholder="Address">--}}
                                        <span class="text-danger" id="note_error"></span>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="host" id="host_label" class="form-label">Supplier</label> <br>
                                        <select id='supplier_id' name="supplier_id" style='width: 200px;'
                                                class="form-control">
                                        </select>
                                        <span class="text-danger" id="supplier_id_error"></span>
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
                                        <tr>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Maria Anders</td>
                                            <td>Maria Anders</td>
                                            <td>Germany</td>
                                        </tr>  <tr>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Maria Anders</td>
                                            <td>Maria Anders</td>
                                            <td>Germany</td>
                                        </tr>  <tr>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Maria Anders</td>
                                            <td>Maria Anders</td>
                                            <td>Germany</td>
                                        </tr>  <tr>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Alfreds Futterkiste</td>
                                            <td>Maria Anders</td>
                                            <td>Germany</td>
                                        </tr>

                                    </table>

{{--                                    <div class="form-group mb-3 col-6">--}}
{{--                                        <label for="" class="form-label">Upload Image</label>--}}
{{--                                        <div class="dropzone" id="image-box"></div>--}}
{{--                                        <input type="hidden" id="image" name="image">--}}
{{--                                    </div>--}}
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="{{url('admin/suppliers')}}" class="btn btn-outline-base">Cancel</a>
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
        let description;
        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => {
                window.editor = editor;
                description = editor;
            });
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/suppliers"
        }

        // image Uploader dropZone;
        // image Uploader dropZone;
        // let image = new Dropzone("#image-box", {
        //     url: window.origin + '/api/v1/suppliers/file-upload',
        //     method: "post",
        //     uploadMultiple: true,
        //     createImageThumbnails: true,
        //     paramName: "file",
        //     clickable: true,
        //     maxFiles: 10,
        //     parallelUploads: 10,
        //     addRemoveLinks: true,
        //     success: function (file, res) {
        //         if (res.status === "success") {
        //             toastr.success(res.message)
        //             let defaultExistFile = $('.dz-preview.dz-complete.dz-image-preview')
        //             if (defaultExistFile) {
        //                 defaultExistFile.remove()
        //             }
        //             $('#image').val(res.data)
        //
        //         }
        //     },
        //     error: function (err) {
        //         console.log(err)
        //     }
        // });
        // dropsown menu
        // Initialize select2
        $("#supplier_id").select2();
        /**
         * GET All supplier
         * **/
        $(document).ready(function () {
            $.ajax({
                url: "{{ URL::to('/api/v1/supplier') }}",
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    if (res.data.length > 0) {
                        console.log(res);
                        $('#supplier_id').empty()
                        $('#supplier_id').append(`
                          <option value='' selected disabled>Select Category</option>
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
