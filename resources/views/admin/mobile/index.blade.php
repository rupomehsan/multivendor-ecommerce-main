@extends('layouts.admin.index')
@section('content')
    <main>
        <form action="">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col mb-3">
                    <div class="card rounder-top-corners">
                        <div
                            class="card-header d-flex align-items-center justify-content-between py-4 bg-base-red text-white">
                            Google Ads

                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-4">
                                <label for="googleBannerAdmobId" class="form-label">Banner Admob ID</label>
                                <input type="text" id="googleBannerAdmobId"
                                       class="form-control py-3 bg-light-ash-2 border-0">
                            </div>


                            <div class="form-group mb-4">
                                <label for="googleInterstitialAdmobId" class="form-label">Interstitial Admob ID</label>
                                <input type="text" id="googleInterstitialAdmobId"
                                       class="form-control py-3 bg-light-ash-2 border-0">
                            </div>

                            <div class="card border mb-4 p-3">
                                <div class="form-group mb-2">
                                    <label for="googleInterstitialAdmobId" class="form-label">Interstitial Admob
                                        Click</label>
                                    <input type="number" id="googleInterstitialAdmobId"
                                           class="form-control py-3 bg-light-ash-2 border-0">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="googleInterstitialAdmobId" class="form-label">Native Admob ID</label>
                                <input type="text" id="googleInterstitialAdmobId"
                                       class="form-control py-3 bg-light-ash-2 border-0">
                            </div>

                            <div class="card border mb-4 p-3">
                                <div class="form-group mb-2">
                                    <label for="googleInterstitialAdmobId" class="form-label">Native Ad Per Item</label>
                                    <input type="number" id="googleInterstitialAdmobId"
                                           class="form-control py-3 bg-light-ash-2 border-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col mb-3">
                    <div class="card rounder-top-corners">
                        <div
                            class="card-header d-flex align-items-center justify-content-between py-4 bg-base-blue text-white">
                            Facebook Ads

                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-4">
                                <label for="googleBannerAdmobId" class="form-label">Banner Admob ID</label>
                                <input type="text" id="googleBannerAdmobId"
                                       class="form-control py-3 bg-light-ash-2 border-0">
                            </div>


                            <div class="form-group mb-4">
                                <label for="googleInterstitialAdmobId" class="form-label">Interstitial Admob ID</label>
                                <input type="text" id="googleInterstitialAdmobId"
                                       class="form-control py-3 bg-light-ash-2 border-0">
                            </div>

                            <div class="card border mb-4 p-3">
                                <div class="form-group mb-2">
                                    <label for="googleInterstitialAdmobId" class="form-label">Interstitial Admob
                                        Click</label>
                                    <input type="number" id="googleInterstitialAdmobId"
                                           class="form-control py-3 bg-light-ash-2 border-0">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="googleInterstitialAdmobId" class="form-label">Native Admob ID</label>
                                <input type="text" id="googleInterstitialAdmobId"
                                       class="form-control py-3 bg-light-ash-2 border-0">
                            </div>

                            <div class="card border mb-4 p-3">
                                <div class="form-group mb-2">
                                    <label for="googleInterstitialAdmobId" class="form-label">Native Ad Per Item</label>
                                    <input type="number" id="googleInterstitialAdmobId"
                                           class="form-control py-3 bg-light-ash-2 border-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-12 mb-3">
                    <div class="card rounder-top-corners">
                        <div
                            class="card-header  d-flex align-items-center justify-content-between py-4 bg-base-green text-white">
                            Custom Ads

                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="card-body">

                            <div class="row row-cols-lg-2 row-cols-1">
                                <div class="col mb-3">
                                    <label for="" class="form-label">Upload Banner Image</label>
                                    <div class="dropzone w-50" id="banner-img-box"></div>
                                    <input type="hidden" id="image" name="logo">
                                </div>

                                <div class="col mb-3">
                                    <label for="" class="form-label">Upload Interstitial Image</label>
                                    <div class="dropzone w-50" id="interstitial-img-box"></div>
                                    <input type="hidden" id="image" name="logo">
                                </div>

                                <div class="col mb-3">
                                    <div class="form-group mb-2">
                                        <label for="googleInterstitialAdmobId" class="form-label">Custom Banner
                                            Link</label>
                                        <input type="text" id="googleInterstitialAdmobId"
                                               class="form-control py-3 bg-light-ash-2 border-0">
                                    </div>
                                </div>


                                <div class="col mb-3">
                                    <div class="form-group mb-2">
                                        <label for="googleInterstitialAdmobId" class="form-label">Interstitial Add
                                            Link</label>
                                        <input type="text" id="googleInterstitialAdmobId"
                                               class="form-control py-3 bg-light-ash-2 border-0">
                                    </div>
                                </div>


                                <div class="col mb-3">
                                    <label for="" class="form-label">Upload Native Image</label>
                                    <div class="dropzone w-50" id="native-img-box"></div>
                                    <input type="hidden" id="image" name="logo">
                                </div>


                                <div class="col mb-3">
                                    <div class="form-group mb-2">
                                        <label for="googleInterstitialAdmobId" class="form-label">Interstitial Add
                                            Click</label>
                                        <input type="number" id="googleInterstitialAdmobId"
                                               class="form-control py-3 bg-light-ash-2 border-0">
                                    </div>
                                </div>


                                <div class="col-lg-12 col-12 mb-3">
                                    <div class="form-group mb-2">
                                        <label for="googleInterstitialAdmobId" class="form-label">Native Add
                                            Link</label>
                                        <input type="text" id="googleInterstitialAdmobId"
                                               class="form-control w-50 py-3 bg-light-ash-2 border-0">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12 mb-3">
                                    <div class="form-group mb-2">
                                        <label for="googleInterstitialAdmobId" class="form-label">Native Add Per
                                            Item</label>
                                        <input type="number" id="googleInterstitialAdmobId"
                                               class="form-control w-50 py-3 bg-light-ash-2 border-0">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-12 mb-3">
                    <div class="card rounder-top-corners">
                        <div
                            class="card-header  d-flex align-items-center justify-content-between py-4 bg-pastel-green text-white">
                            Startup Ads

                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="googleInterstitialAdmobId" class="form-label">Startup Add id</label>
                                <input type="text" id="googleInterstitialAdmobId"
                                       class="form-control w-50 py-3 bg-light-ash-2 border-0">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-12 mb-3">
                    <div class="card rounder-top-corners">
                        <div
                            class="card-header  d-flex align-items-center justify-content-between py-4 bg-dark text-white">
                            Unity Ads

                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="googleInterstitialAdmobId" class="form-label">Enter your
                                    AppId/GameId</label>
                                <input type="text" id="googleInterstitialAdmobId"
                                       class="form-control w-50 py-3 bg-light-ash-2 border-0">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-12 mb-3">
                    <div class="card rounder-top-corners">
                        <div
                            class="card-header  d-flex align-items-center justify-content-between py-4 bg-cello text-white">
                            Iron Source Ads

                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="googleInterstitialAdmobId" class="form-label">Enter Your App Key</label>
                                <input type="text" id="googleInterstitialAdmobId"
                                       class="form-control w-50 py-3 bg-light-ash-2 border-0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12 mb-3">
                    <div class="card rounder-top-corners">
                        <div
                            class="card-header  d-flex align-items-center justify-content-between py-4 bg-sun text-white">
                            App Next Ads:

                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="googleInterstitialAdmobId" class="form-label">Enter Your PlacementID</label>
                                <input type="text" id="googleInterstitialAdmobId"
                                       class="form-control w-50 py-3 bg-light-ash-2 border-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection

@push('custom-js')
    <script>

        let bannerAdImg = new Dropzone("#banner-img-box", {

            url: window.origin + "/api/v1/uploads.php",
            method: "post",
            uploadMultiple: false,
            createImageThumbnails: true,
            paramName: "file",
            clickable: true,


            init: function () {
                this.on('addedfile', function (file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });

            },

            success: function (file, res) {
                // let defaultExistFile = $('.dz-preview.dz-complete.dz-image-preview')
                //
                // if (defaultExistFile) {
                //     defaultExistFile.remove()
                // }
                //
                // $('#' + hiddenId).val(res.data)
                // data = res.data;
            },
        });


        let interstitialAdImg = new Dropzone("#interstitial-img-box", {

            url: window.origin + "/api/v1/uploads.php",
            method: "post",
            uploadMultiple: false,
            createImageThumbnails: true,
            paramName: "file",
            clickable: true,


            init: function () {
                this.on('addedfile', function (file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });

            },

            success: function (file, res) {
                // let defaultExistFile = $('.dz-preview.dz-complete.dz-image-preview')
                //
                // if (defaultExistFile) {
                //     defaultExistFile.remove()
                // }
                //
                // $('#' + hiddenId).val(res.data)
                // data = res.data;
            },
        });

        let nativeAdImg = new Dropzone("#native-img-box", {

            url: window.origin + "/api/v1/uploads.php",
            method: "post",
            uploadMultiple: false,
            createImageThumbnails: true,
            paramName: "file",
            clickable: true,


            init: function () {
                this.on('addedfile', function (file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });

            },

            success: function (file, res) {
                // let defaultExistFile = $('.dz-preview.dz-complete.dz-image-preview')
                //
                // if (defaultExistFile) {
                //     defaultExistFile.remove()
                // }
                //
                // $('#' + hiddenId).val(res.data)
                // data = res.data;
            },
        });
    </script>
@endpush


