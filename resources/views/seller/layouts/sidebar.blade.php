<nav id="sidebarMenu" class="d-flex d-md-none offcanvas offcanvas-start col-6 shadow-sm bg-white px-0">
    <div class="offcanvas-header">
        <a class="navbar-brand" href="/seller">TakDol <small class="text-muted">Seller</small></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="flex-column nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('seller/myproducts*') ? 'active' : '' }}" aria-current="page"
                    href="/seller/myproducts">My Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('seller/myorders*') ? 'active' : '' }}" href="/seller/myorders">My
                    Orders</a>
            </li>
        </ul>
    </div>
</nav>
<nav id="sidebarMenu2" class="d-md-flex col-md-3 col-lg-2 d-none sidebar shadow-sm bg-white">
    <div class="flex-grow-1 p-3" style="overflow-y: auto">
        <ul class="flex-column nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('seller/myproducts*') ? 'active' : '' }}" aria-current="page"
                    href="/seller/myproducts">My Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('seller/myorders*') ? 'active' : '' }}" href="/seller/myorders">My
                    Orders</a>
            </li>
        </ul>
    </div>
</nav>