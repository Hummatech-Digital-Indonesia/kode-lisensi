<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="keywords" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.name') }}">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>{{ $title ?? config('app.name') }}</title>

    @include('layouts.header')
    @yield('captcha')
    @yield('asset')
</head>

<body class="theme-color-3 dark">
<!-- Loader Start -->
<div class="fullpage-loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<!-- Loader End -->

<!-- Header Start -->
<header class="pb-md-4 pb-0 header-2">
    @include('layouts.navbar')
</header>
<!-- Header End -->

@yield('content')

<footer class="section-t-space mt-5">
    @include('layouts.footer')
</footer>

<!-- log in section end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

@include('layouts.script')

@yield('script')

</body>

</html>
