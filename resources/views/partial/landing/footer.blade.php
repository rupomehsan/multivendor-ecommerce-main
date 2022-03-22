<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- ===== Vendor JS Files ===== -->
<!--<script src="--><?//= $asset ?><!--vendor/bootstrap/js/bootstrap.min.js"></script>-->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/MCDatepicker-master/dist/mc-calendar.min.js')}}"></script>
<script src="{{asset('assets/vendor/ckeditor5-build-classic/ckeditor.js')}}"></script>

<!-- ===== CDN JS Link ===== -->
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js" integrity="sha512-BABFxitBmYt44N6n1NIJkGOsNaVaCs/GpaJwDktrfkWIBFnMD6p5l9m+Kc/4SLJSJ4mYf+cstX98NYrsG/M9ag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>--}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- ===== Custom JS Files ===== -->
<script src="{{asset('js/app.js')}}"></script>


@stack('custom-js')
</body>
</html>
