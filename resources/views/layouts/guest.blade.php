<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
 
    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    @vite(['resources/css/admin.css', 'resources/js/admin.js'])

    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            {{ $slot }}
        </div>
    </div>

</body>

</html>
