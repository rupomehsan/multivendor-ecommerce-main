@extends('layouts.admin.seller')
@section('content')
    <main>
        <div class="card">
            <div class="card-body">

                <form action="">
                    <h4>BASIC INFO</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group my-3">
                                <label for="" class="form-label">Shop Name</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Shop Phone</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Shop ID</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group my-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Shop Address</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <h4>PAYMENT SETTING</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group my-3">
                                <label for="" class="form-label">Bank Name</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">bank account number</label>
                                <input type="text" class="form-control">
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group my-3">
                                <label for="" class="form-label">bank account number</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">bank routing number</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>


                    <h4>SOCIAL MEDIA LINK (optional)</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group my-3">
                                <label for="" class="form-label">Youtube</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Facebook</label>
                                <input type="text" class="form-control">
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group my-3">
                                <label for="" class="form-label">Twitter</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Instagram</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>


                    <button class="btn btn-base-primary my-3 text-capitalize">Save</button>

                </form>
            </div>
        </div>
    </main>
@endsection
