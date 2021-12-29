<nav class="nav nav-pills nav-fill flex-column">
    <a class="nav-link text-start {{ Request::is('myaccount/profile') ? 'active' : '' }}" aria-current="page"
        href="/myaccount/profile">Profile</a>
    <a class="nav-link text-start {{ Request::is('myaccount/change-password') ? 'active' : '' }}"
        href="/myaccount/change-password">Change Password</a>
</nav>