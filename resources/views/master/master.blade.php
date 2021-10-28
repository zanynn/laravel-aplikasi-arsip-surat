<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/themes/black/pace-theme-flash.min.css" integrity="sha512-2eEQTfqdt+0xvXCIn71dH/Ql5WzI+bVg50BnLJRwGPF2kRTA1Flgn6jLuggqN5may7GQgLvQYIlBmAz/HT6Arg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/assets/css/app.min.css" rel="stylesheet" />

</head>

<body>

    <div id="app" class="app">

        <!-- Master -->

        @include('master/layout.header')

        <!-- Sidebar -->

        @include('master/layout.sidebar')

        @yield('content')

        <script data-cfasync="false" src="/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/vendor.min.js" type="27d63f2eb855461eb968f473-text/javascript"></script>
        <script src="assets/js/app.min.js" type="27d63f2eb855461eb968f473-text/javascript"></script>


        <script src="assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="27d63f2eb855461eb968f473-text/javascript"></script>
        <script src="assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="27d63f2eb855461eb968f473-text/javascript"></script>
        <script src="assets/plugins/apexcharts/dist/apexcharts.min.js" type="27d63f2eb855461eb968f473-text/javascript"></script>
        <script src="assets/js/demo/dashboard.demo.js" type="27d63f2eb855461eb968f473-text/javascript"></script>

        <script type="27d63f2eb855461eb968f473-text/javascript">
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');
        </script>

        <script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="27d63f2eb855461eb968f473-|49" defer=""></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6a5202672f5e4b56","version":"2021.10.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'></script>

        <!-- core-js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/3.19.0/minified.js" integrity="sha512-/pHl0f++AqrH33BgSwbYM2G4IIugSA6kTy8bjFPmEdEMxyT9levVYg9JSX5gGdhUbRHeGOWK2mtK5NSyWpRx5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/dist/aset/js"></script>
        <!-- ATAU tanpa vendor.min.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/pace.min.js" integrity="sha512-2cbsQGdowNDPcKuoBd2bCcsJky87Mv0LEtD/nunJUgk6MOYTgVMGihS/xCEghNf04DPhNiJ4DZw5BxDd1uyOdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <script src="assets/plugins/jquery/dist/jquery.min.js"></script> -->
        <!-- <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.js" integrity="sha512-JjYSgzqo9K0IeYGEslMRYE8aO9tq7Ky3EQNmEVkAe6Cp14AwlJMLMnb0fpgEkr3YxJ8ghQiriOvZwIdRZieGIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="assets/js/app.min.js"></script>
        <!-- <script data-cfasync="false" src="{{ asset('/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script> -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
</body>

</html>