<nav id="sidebarMenu" class="col-lg-2 d-lg-block sidebar collapse shadow-sm bg-white">
    <div class="p-3 position-sticky">
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