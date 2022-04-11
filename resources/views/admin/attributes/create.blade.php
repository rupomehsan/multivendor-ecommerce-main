@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color">Add Attributes</h4>
                    <form action="{{url('api/v1/attributes')}}" id="form" name="form" enctype="multipart/form-data"
                          novalidate>
                        <div class="custom-nav mt-5">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">General
                                    </button>
{{--                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"--}}
{{--                                            data-bs-target="#nav-profile" type="button" role="tab"--}}
{{--                                            aria-controls="nav-profile" aria-selected="false">Data--}}
{{--                                    </button>--}}
{{--                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"--}}
{{--                                            data-bs-target="#nav-contact" type="button" role="tab"--}}
{{--                                            aria-controls="nav-contact" aria-selected="false">SEO--}}
{{--                                    </button>--}}
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="form-group mb-3">
                                        <label for="attribute" id="attribute_label" class="form-label"><sup
                                                class="required">*</sup> Attribute Name </label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Attribute Name">
                                        <span class="text-danger" id="name_error"></span>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="description">Category description</label>--}}
{{--                                        <textarea name="description" id="description"--}}
{{--                                                  placeholder="Description"></textarea>--}}
{{--                                        <span class="text-danger"></span>--}}
{{--                                    </div>--}}

                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="{{url('admin/attributes')}}" class="btn btn-outline-base">Cancel</a>
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
        // redirectPage(url);
        // redirectPage(url);
        function redirectPage() {
            window.location.href = window.origin + "/admin/attributes"
        }
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
