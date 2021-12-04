<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">TakDol</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Mulai Jual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>

            <form class="d-flex">
                {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button> --}}
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </form>
            {{-- <div class=" ms-3 mt-3 mb-3">
                <a class="btn btn-primary ms-3" aria-current="page" href="/">Login</a>
                <a class="btn btn-primary ms-2" aria-current="page" href="/">Register</a>
            </div> --}}

            <ul class="navbar-nav">
                <li class="nav-item mt-2 mt-lg-0 lg">
                    <a class="btn btn-primary ms-lg-3" aria-current="page" href="/">Login</a>
                </li>
                <li class="nav-item mt-2 mt-lg-0">
                    <a class="btn btn-primary ms-lg-2" aria-current="page" href="/">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>