<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Realshed - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/frontend/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/color/orange.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/common/vendors/toastr/toastr.css') }}" rel="stylesheet" >

    @stack('head')
</head>

<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">

        <!-- main header -->
        <x-frontend.home.header />
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <x-frontend.home.mobile-menu />
        <!-- End Mobile Menu -->

        {{ $slot }}

        <!-- main-footer -->
        <x-frontend.home.footer />
        <!-- main-footer end -->

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>

    <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/validation.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/nav-tool.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
    <script src="{{ asset('assets/common/vendors/toastr/toastr.js') }}"></script>


    <!-- Toaster messages -->
    @include('snippets.toastr')
    <!-- End Toaster messages -->

    @stack('scripts')

</body><!-- End of .page_wrapper -->

</html>
