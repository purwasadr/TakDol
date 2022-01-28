<nav class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-none d-md-flex" href="/seller">TakDol <small class="text-muted">Seller</small></a>
        <div class="d-flex ms-auto me-1" id="navbarSupportedContent">
            <div class="navbar-nav">
                <li class="nav-item dropdown">
                    <div class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('storage/' . auth()->user()->profile_img) }}" width="24px" height="24px"
                            class="rounded-circle" style="object-fit: cover;" alt="">
                        <p class="ms-1 mb-0 me-1 d-none d-lg-block">{{ auth()->user()->name }}</p>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end position-absolute" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </div>
        </div>

    </div>
</nav>