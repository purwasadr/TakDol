<!doctype html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body style="height: 1000px">
    @include('partials.navbar')

    <div class="container mt-4 mb-4">
        @yield('container')
    </div>

    {{-- @include('partials.footer') --}}

    @include('partials.script')
</body>

</html>