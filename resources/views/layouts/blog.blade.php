<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>ByMi</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>

<!-- Wrapper -->
<div id="app">

    @include('parts.blog.sidebar')

    <div id="main-wrapper">
        <!-- Header -->
        <header id="header">
            <div id="toggle-mobile-nav"><i class="fas fa-bars"></i></div>

            <div class="logo">
                <a href="{{ route('index') }}">BYMI</a>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>

</div>

<!-- Scripts -->
<script src="{{ mix('js/manifest.js') }}" defer></script>
<script src="{{ mix('js/vendor.js') }}" defer></script>
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</body>
</html>
