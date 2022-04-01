@extends('layouts.admin.seller')
@section('content')
    <main id="category-list-content">

        <div class="wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-base-color text-uppercase">RETURN Policy</h4>

                    <hr>
                    <form action="">
                        <div class="form-group">
                            <label for="" class="form-label">Return policy</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('custom-js')
    <script>
        $(document).ready(function () {
            $('#category-table').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
            });


            let image = new Dropzone("#image-box", {

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
        });
    </script>
@endpush
