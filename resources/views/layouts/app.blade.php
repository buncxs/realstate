<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">

    <title>Realstate</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/feather-font/css/iconfont.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->
    
    <!-- Layout styles    -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/demo1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}"> 
    <!-- End layout styles -->


    <link rel="stylesheet" href="{{ asset('assets/common/vendors/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/common/vendors/sweetalert2/sweetalert2.min.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}" />

    @stack('head')

</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <x-admin.sidebar />
        <!-- partial -->

        <div class="page-wrapper">
            <!-- partial:partials/_navbar.html -->
            <x-admin.navbar />
            <!-- partial -->

            <div class="page-content">
                {{ $slot }}
            </div>

            <!-- partial:partials/_footer.html -->
            <x-admin.footer />
            <!-- partial -->
        </div>
    </div>

    <!-- jquery:js -->
    <script src="{{ asset('assets/admin/js/jquery.js') }}"></script>
    <!-- endinject -->

    <!-- core:js -->
    <script src="{{ asset('assets/admin/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="{{ asset('assets/admin/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/template.js') }}"></script>
    <!-- endinject -->

    <script src="{{ asset('assets/admin/js/dashboard-light.js') }}"></script>
    <script src="{{ asset('assets/common/vendors/toastr/toastr.js') }}"></script>
    <script src="{{ asset('assets/common/vendors/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/common/js/code.js') }}"></script>

    <!-- Toaster messages -->
    @include('snippets.toastr')
    <!-- End Toaster messages -->

    @stack('scripts')
</body>

</html>
