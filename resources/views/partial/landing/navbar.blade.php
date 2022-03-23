<nav class="navbar navbar-expand-lg sticky-top" id="navbar">

    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <img class="img-fluid" src="{{asset('assets/image/logo-black.png')}}" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-5 w-100 d-flex align-items-center justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="iconify me-2" data-icon="ic:round-category" data-width="20"
                              data-height="25"></span>
                        Departments
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="iconify  me-2" data-icon="ic:round-category" data-width="20"
                              data-height="25"></span>
                        Seller
                    </a>
                </li>

                <li class="nav-item">
                    <form action="">
                        <input type="search" class="form-control border-0 rounded-pill bg-athens-gray" placeholder="Search anything that come across your mind">
                    </form>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="iconify  me-2" data-icon="ic:round-category" data-width="20"
                              data-height="25"></span>
                        My Items
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="iconify  me-2" data-icon="ic:round-category" data-width="20"
                              data-height="25"></span>
                        Account
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="iconify" data-icon="twemoji:shopping-cart" data-width="25" data-height="25"></span>
                        <div class="count">1</div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
