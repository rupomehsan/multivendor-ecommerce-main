<div class="chat-box">
    <div class="chat-launcher">
        <span>How can we help?</span>
        <span class="iconify ms-4" data-icon="ant-design:plus-circle-outlined" data-width="20" data-height="20"></span>
    </div>

    <div class="chat-section d-none">
        <div class="chat-header bottom-shadow">
            <img class="profile-img" src="{{asset('assets/image/category.png')}}" alt="">
            <div class="mx-3 text-white">
                <h6 class="m-0 fw-bold">Name</h6>
                <span class=" text-white-50">
                    Support is online
                </span>
            </div>

            <span class="iconify close-btn" data-icon="ant-design:close-outlined" data-width="20"
                  data-height="20"></span>
        </div>

        <div class="chat-body">
            <ul class="p-3">
                <li class="user-opponent d-flex">
                    <img class="profile-img me-2" src="{{asset('assets/image/category.png')}}" alt="">

                    <div class="user-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                        delectus distinctio doloremque eius eos esse expedita facilis illum ipsam iusto minus quia
                        similique, vero voluptate voluptatibus. Nisi quaerat quasi quo. Ad autem beatae consequuntur,
                        dolorem dolorum earum excepturi facilis hic laborum magni nesciunt omnis porro, quia, sunt
                        suscipit totam ut.
                    </div>
                </li>

                <li class="user-opponent d-flex">
                    <div class="user-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                        delectus distinctio doloremque eius eos esse expedita facilis illum ipsam iusto minus quia
                        similique, vero voluptate voluptatibus. Nisi quaerat quasi quo. Ad autem beatae consequuntur,
                        dolorem dolorum earum excepturi facilis hic laborum magni nesciunt omnis porro, quia, sunt
                        suscipit totam ut.
                    </div>
                    <img class="profile-img ms-2" src="{{asset('assets/image/category.png')}}" alt="">
                </li>


            </ul>

        </div>

        <div class="chat-footer">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <textarea name="" id="" class="form-control" placeholder="Write Message..."></textarea>
                </div>
                <div class="col-lg-2 text-center">
                    <span class="iconify cursor-pointer text-valencia" data-icon="bi:send-fill" data-width="20"
                          data-height="20"></span>
                </div>
            </div>


        </div>


    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- ===== Vendor JS Files ===== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jQuery-Simple-Timer-master/jquery.simple.timer.js')}}"></script>
<script
    src="{{asset('assets/vendor/Flexible-Bootstrap-Plugin-To-Create-Wizard-Style-Interface-Smart-Wizard/dist/js/jquery.smartWizard.min.js')}}"></script>
<!-- ===== CDN JS Link ===== -->
<!-- ===== CDN JS Link ===== -->
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- ===== CDN JS serializejson Link ===== -->
<!-- ===== CDN JS serializejson Link ===== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.serializeJSON/3.2.1/jquery.serializejson.min.js"></script>
{{--toarter js--}}
{{--toarter js--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- ===== Custom JS Files ===== -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/public.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/rating.js')}}"></script>
@stack('custom-js')
<script>
    $(document).ready(function () {
        var token = localStorage.getItem("token") || null
        var userInfo = JSON.parse(localStorage.getItem("userInfo")) || null
        if (token !== null) {
            var pageName = "{{request()->segment(1)}}";
            if (pageName === "login") {
                window.location.href = "{{url("/")}}"
            } else if (pageName === "register") {
                window.location.href = "{{url("/")}}"
            }
            // alert(pageName)
            $("#login").addClass('d-none')
            $("#logout").removeClass('d-none')
            $(".userName").text(userInfo.name)
        }
        getClientCartPublic()
        getClientCompareList()
    })

    $('#Userlogout').click(function () {
        alert("Are you sure to logout")
        localStorage.removeItem("token")
        localStorage.removeItem("userInfo")
        $("#login").removeClass('d-none')
        $("#logout").addClass('d-none')
        window.location.href = "{{url('/login')}}";
    })


</script>
</body>
</html>
