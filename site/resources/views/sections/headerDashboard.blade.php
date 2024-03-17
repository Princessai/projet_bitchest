<nav class="navbar navbarr   navbar-expand-lg navbar-light">

    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <div class="collapse navbar-collapse w-75 d-flex align-self-center  justify-content-end"
                id="navbarSupportedContent">

                <input class="form-control w-75 rounded-pill  " type="search" placeholder="Search" aria-label="Search">
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('assets/images/utilisateur.png') }}" alt="" width="35"
                                height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-2"></i>
                                    <p class="mb-0 ">My Profile</p>
                                </a>
                                <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
</nav>
