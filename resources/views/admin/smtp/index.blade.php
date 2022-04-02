@extends('layouts.admin.index')

@section('content')
    <main id="smtp-content">
        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-uppercase text-base-color">SMTP Setting</h4>
                    <hr/>

                    <form action="{{url('api/v1/smtps')}}" id="form" name="form" novalidate>

                        <div class="form-group mb-3">
                            <label for="host" id="host_label" class="form-label">SMTP HOST </label>
                            <input type="text" id="host" name="host" class="form-control" placeholder="Enter SMTP HOST">
                            <span class="text-danger" id="host_error"></span>
                        </div>


                        <div class="form-group my-3">
                            <label for="port" id="port_label" class="form-label">SMTP PORT </label>
                            <input type="text" id="port" name="port" class="form-control" placeholder="Enter SMTP PORT">
                            <span class="text-danger" id="port_error"></span>
                        </div>

                        <div class="form-group my-3">
                            <label for="username" id="username_label" class="form-label">SMTP USERNAME </label>
                            <input type="text" id="username" name="username" class="form-control"
                                   placeholder="Enter SMTP USERNAME">
                            <span class="text-danger" id="username_error"></span>
                        </div>


                        <div class="form-group my-3">
                            <label for="password" id="password_label" class="form-label">SMTP Password</label>
                            <input type="text" id="password" name="password" class="form-control"
                                   placeholder="Enter SMTP Password">
                            <span class="text-danger" id="password_error"></span>
                        </div>

                        <div class="form-group my-3">
                            <label for="encryption" id="encryption_label" class="form-label">SMTP Encryption</label>
                            <select id="encryption" name="encryption" class="form-select">
                                <option value="">Select encryption type</option>
                                <option value="tls">TLS</option>
                                <option value="ssl">SSL</option>
                            </select>
                            <span class="text-danger" id="encryption_error"></span>
                        </div>


                        <div class="my-3">
                            <a href="" class="btn btn-outline-base">Cancel</a>
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
        function redirectPage() {
            window.location.href =  window.origin + "/admin/smtp"
        }
        var url = "/api/v1/smtps";
        getEditData(url);
        $('#form').submit(function (e) {
            e.preventDefault();
            let form = $(this);
            formSubmit("post", "submit-button", form);
        })
        let page = "{{request()->segment(2)}}";
        // alert(page)
        pageRestricted(page);
    </script>
@endpush
