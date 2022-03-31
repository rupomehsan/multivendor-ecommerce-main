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
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jQuery-Simple-Timer-master/jquery.simple.timer.js')}}"></script>
<script
    src="{{asset('assets/vendor/Flexible-Bootstrap-Plugin-To-Create-Wizard-Style-Interface-Smart-Wizard/dist/js/jquery.smartWizard.min.js')}}"></script>


<!-- ===== CDN JS Link ===== -->
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- ===== Custom JS Files ===== -->
<script src="{{asset('js/app.js')}}"></script>


@stack('custom-js')


</body>
</html>
