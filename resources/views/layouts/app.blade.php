<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">

    <title>Realstate</title>

    <!-- End fonts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- endinject -->
    @stack('head')
   
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" />
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

    <!-- Toaster messages -->
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <!-- End Toaster messages -->

    @stack('scripts')
</body>

</html>
