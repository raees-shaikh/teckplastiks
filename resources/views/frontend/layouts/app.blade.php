<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('frontend.layouts.header')
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K93HW1P66F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-K93HW1P66F');
    </script>
</head>

<body id="bg" class="theme-sharped">
    <!-- page start -->
    <div class="page">
        @include('frontend.layouts.nav')
        <div class="site-main">
            @yield('content')
            @include('frontend.layouts.footer')
        </div>
    </div>

    @yield('js')
</body>

</html>
