<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <title>{{ $title }}</title>

    <style>
        @font-face {
            font-family: 'Inter Medium';
            src: url('{{ public_path('font/Inter-Medium.ttf') }}');
        }

        body {
            font-family: 'Inter Medium', Ubuntu, Geneva, Verdana, sans-serif
        }

        @media (min-width: 768px) {
            .offcanvas-backdrop {
                display: none !important;
            }
        }
    </style>
</head>

<body style="height: 2500rem">
    @include('seller.layouts.navbar')

    <div class="container-fluid">
        <div class="row">
            @include('seller.layouts.sidebar')

            <div class="col-md-9 col-lg-10 ms-md-auto px-3">
                @yield('container')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>