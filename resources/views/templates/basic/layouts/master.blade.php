<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $general->sitename($pageTitle ?? '') }}</title>
    @include('partials.seo')

    <!-- bootstrap 5  -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/lib/bootstrap.min.css') }}">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/all.min.css') }}">
    <!-- lineawesome font -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/line-awesome.min.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/lib/slick.css') }}">

    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/lightcase.css') }}">

    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/custom.css') }}">

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/main.css') }}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)}}">

    @stack('style-lib')

    @stack('style')

</head>

<body>
    <div class="preloader">
        <div class="dl">
            <div class="dl__container">
            <div class="dl__corner--top"></div>
            <div class="dl__corner--bottom"></div>
            </div>
            <div class="dl__square"></div>
        </div>
    </div>


    @include($activeTemplate.'partials.auth_header')


    <div class="main-wrapper">

        @if(!request()->routeIs('home'))
        @include($activeTemplate.'partials.breadcumb')
        @include($activeTemplate.'partials.bottom_menu')
        @endif

        <section class="pt-100 pb-100 bg_img" style="background-image: url(' {{ asset($activeTemplateTrue.'images/elements/bg1.jpg') }} ');">
            @yield('content')
        </section>

    </div>

    @stack('modal')

    @include($activeTemplate.'partials.footer')

    <!-- jQuery library -->
    <script src="{{ asset($activeTemplateTrue . 'js/lib/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue . 'js/lightcase.js') }}"></script>

    <!-- bootstrap js -->
    <script src="{{ asset($activeTemplateTrue . 'js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- slick slider js -->
    <script src="{{ asset($activeTemplateTrue . 'js/lib/slick.min.js') }}"></script>
    <!-- scroll animation -->
    <script src="{{ asset($activeTemplateTrue . 'js/lib/wow.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset($activeTemplateTrue . 'js/app.js') }}"></script>

    @stack('script-lib')

    @include('partials.plugins')

    @include('partials.notify')

    @stack('script')

    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function () {
                window.location.href = "{{url('/')}}/change/" + $(this).val();
            });
        })(jQuery);
    </script>

</body>

</html>
