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

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/app.css">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <title>{{ $title }}</title>

    {{--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"> --}}
    <style>
        /* @font-face {
            font-family: 'Inter Medium';
            src: url('{{ public_path('font/Inter-Medium.ttf') }}');
        }

        @font-face {
            font-family: 'Inter var';
            font-style: normal;
            font-weight: 100 900;
            font-display: ;
            src: url('{{ public_path('font/Inter-var.ttf') }}');

        } */

        body {
            font-family: 'Inter', Ubuntu, Geneva, Verdana, sans-serif;
            font-weight: 500;
        }
    </style>
</head>

<body style="height: 1000px">
    @include('partials.navbar')

    <div class="container mt-4 mb-4">
        @yield('container')
    </div>

    {{-- @include('partials.footer') --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>