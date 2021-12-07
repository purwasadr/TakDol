<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">TakDol</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/seller/myproducts">Mulai Jual</a>
                </li>
            </ul>
            @auth
            <div class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
            @else
            <ul class="navbar-nav">
                <li class="nav-item mt-2 mt-lg-0 lg">
                    <a class="btn btn-primary ms-lg-3" aria-current="page" href="/login">Login</a>
                </li>
                <li class="nav-item mt-2 mt-lg-0">
                    <a class="btn btn-primary ms-lg-2" aria-current="page" href="/signup">SignUp</a>
                </li>
            </ul>
            @endauth

        </div>
    </div>
</nav>