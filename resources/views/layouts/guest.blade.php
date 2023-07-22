<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('../assets/admin/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('../assets/admin/vendors/flatpickr/flatpickr.min.css') }}">

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('../assets/admin/fonts/feather-font/css/iconfont.css') }} ">
    <link rel="stylesheet" href="{{ asset('../assets/admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('../assets/admin/css/demo1/style.css') }}">
    <!-- End layout styles -->

    <link rel="stylesheet" href="{{ asset('../assets/admin/vendors/toastr/toastr.css') }}">

    <link rel="shortcut icon" href="{{ asset('../assets/admin/images/favicon.png') }}" />

</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            {{ $slot }}
        </div>
    </div>

    <!-- jquery:js -->
    <script src="{{ asset('../assets/admin/js/jquery.js') }}"></script>
    <!-- endinject -->

    <!-- core:js -->
    <script src="{{ asset('../assets/admin/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('../assets/admin/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('../assets/admin/vendors/apexcharts/apexcharts.min.js') }}"></script>

    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('../assets/admin/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('../assets/admin/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('../assets/admin/js/dashboard-light.js') }}"></script>
    <!-- End custom js for this page -->


</body>

</html>
