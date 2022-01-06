<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    {{-- Seller Style --}}
    <link rel="stylesheet" href="/css/seller.css">

    <title>{{ $title }}</title>

    <style>
        @font-face {
            font-family: 'Inter Medium';
            src: url('{{ public_path('font/Inter-Medium.ttf') }}');
        }

        body {
            font-family: 'Inter Medium', Ubuntu, Geneva, Verdana, sans-serif
        }
    </style>
</head>

<body style="height: 2500rem">
    @include('seller.layouts.navbar')

    <div class="container-fluid">
        <div class="row">
            @include('seller.layouts.sidebar')

            <div class="col-lg-10 ms-lg-auto">
                @yield('container')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>