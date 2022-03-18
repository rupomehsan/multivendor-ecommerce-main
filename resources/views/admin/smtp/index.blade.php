@extends('layouts.admin.index')

@section('content')
    <main id="smtp-content">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <span class="card-title">SMTP Setting</span>
                        <hr/>

                        <form action="">

                            <div class="form-group mb-3">
                                <label for="host" id="host_label" class="form-label">SMTP HOST </label>
                                <input type="text" id="host" name="host" class="form-control" placeholder="Enter SMTP HOST">
                                <span class="text-danger" id="host_error">Error messages</span>
                            </div>


                            <div class="form-group my-3">
                                <label for="port" id="port_label" class="form-label">SMTP PORT </label>
                                <input type="text" id="port" name="port" class="form-control" placeholder="Enter SMTP PORT">
                                <span class="text-danger" id="port_error">Error messages</span>
                            </div>

                            <div class="form-group my-3">
                                <label for="port" id="port_label" class="form-label">SMTP USERNAME </label>
                                <input type="text" id="port" name="port" class="form-control" placeholder="Enter SMTP USERNAME">
                                <span class="text-danger" id="port_error">Error messages</span>
                            </div>


                            <div class="form-group my-3">
                                <label for="port" id="port_label" class="form-label">SMTP Password </label>
                                <input type="text" id="port" name="port" class="form-control" placeholder="Enter SMTP Password">
                                <span class="text-danger" id="port_error">Error messages</span>
                            </div>

                            <select class="form-select">
                                <option selected>Select Encryption</option>
                                <option value="tsl">TSL</option>
                                <option value="ssl">SSL</option>
                            </select>
                            <span class="text-danger" id="port_error">Error messages</span>

                            <div class="my-3">
                                <a href="" class="btn btn-outline-secondary">Cancel</a>
                                <button class="btn btn-base-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
