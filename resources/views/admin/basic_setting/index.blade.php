@extends('layouts.admin.index')

@section('content')
    <main id="smtp-content">
        <div class="wrapper">
            <form>
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">System Name</label>
                            <input class="form-control border-0 py-3 " type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>


                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">App Version</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>


                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">Mail Adress</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>


                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">Update App</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>


                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">Developed By</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">Facebook</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>


                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">Instagram</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>


                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">Twitter</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>


                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">Youtube</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>
                    </div>


                    <div class="col-12">
                        <h4>Others</h4>
                    </div>

                    <div class="col">
                        <div class="form-group mb-3">
                            <label for="name" id="name_label" class="form-label">Copyright</label>
                            <input class="form-control border-0 py-3" type="text" id="name" name="name" placeholder="System Name">
                            <span class="text-danger" id="name_error">Error msg</span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="description" class="form-label">App Description</label>
                        <textarea name="description" id="description" placeholder="Description"></textarea>
                    </div>


                    <div class="col-12 mb-3">
                        <label for="privacy_policy" class="form-label">Privacy Policy</label>
                        <textarea name="privacy_policy" id="privacy_policy" placeholder="Description"></textarea>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="cookies_policy" class="form-label">Cookies Policy</label>
                        <textarea name="cookies_policy" id="cookies_policy" placeholder="Description"></textarea>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="terms_policy" class="form-label">Terms Policy</label>
                        <textarea name="terms_policy" id="terms_policy" placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="my-3">
                    <button class="btn">Cancel</button>
                    <button class="btn btn-base-primary">Save</button>
                </div>

            </form>
        </div>
    </main>
@endsection

@push('custom-js')
    <script>
        let descriptionEditor;
        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => {
                window.editor = editor;
                descriptionEditor = editor;
            });

        let privacyEditor;
        ClassicEditor.create(document.querySelector('#privacy_policy'))
            .then(editor => {
                window.editor = editor;
                privacyEditor = editor;
            });

        let cookiesEditor;
        ClassicEditor.create(document.querySelector('#cookies_policy'))
            .then(editor => {
                window.editor = editor;
                cookiesEditor = editor;
            });

        let termsEditor;
        ClassicEditor.create(document.querySelector('#terms_policy'))
            .then(editor => {
                window.editor = editor;
                termsEditor = editor;
            });
    </script>
@endpush

