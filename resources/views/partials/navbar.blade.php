<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">TakDol</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/seller/myproducts">Mulai Jual</a>
                </li>
            </ul>
            <div class="col-md-5 mx-auto">
                <div class="input-group input-group-sm input-border-rounded-end-sm">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button class="btn btn-primary" style="top: 0; right: 0; position: absolute; z-index: 100;"
                        type="submit"><i class="bi bi-search"></i></button>
                </div>
            </div>
            <ul class="navbar-nav mb-2 mb-md-0 ms-md-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/cart"><i class="bi bi-cart2"></i></a>
                </li>
            </ul>
            @auth
                <div class="navbar-nav">
                    <li class="nav-item dropdown">
                        <div class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if (auth()->user()->profile_img)
                                <img src="{{ asset('storage/' . auth()->user()->profile_img) }}" width="24px"
                                    height="24px" class="rounded-circle" style="object-fit: cover;" alt="">
                            @else
                                <img src="{{ asset('svg/' . 'person-circle.svg') }}" width="24px" height="24px"
                                    class="rounded-circle" alt="">
                            @endif
                            <p class="ms-1 mb-0 me-1">{{ auth()->user()->name }}</p>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/myaccount/profile"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Account</a></li>
                            <li>
                            <li><a class="dropdown-item" href="/purchase"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    Purchase</a></li>
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
            @else
                <ul class="navbar-nav">
                    <li class="nav-item mt-2 mt-md-0">
                        <a class="btn btn-primary btn-sm ms-md-3" aria-current="page"
                            href="{{ route('login.form') }}">Login</a>
                    </li>
                    <li class="nav-item mt-2 mt-md-0">
                        <a class="btn btn-outline-primary btn-sm ms-md-2" aria-current="page"
                            href="{{ route('register.form') }}">SignUp</a>
                    </li>
                </ul>
            @endauth

        </div>
    </div>
</nav>
