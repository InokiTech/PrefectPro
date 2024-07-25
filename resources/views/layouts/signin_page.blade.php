<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>
    <!-- all the meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- all the css files -->
    <link rel="shortcut icon" href="{{ asset('assets/uploads/logo/'.get_settings('favicon')) }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-5.1.3/css/bootstrap.min.css') }}">

    <!--Custom css-->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/login.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-icons-1.8.1/bootstrap-icons.css') }}">

    <!--Toaster css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css') }}" />

</head>

<body>

    <div class="container-fluid h-100">
        @yield('content')
    </div>

    @include('external_plugin')

    <!--Main Jquery-->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <!--Bootstrap bundle with popper-->
    <script src="{{ asset('assets/vendors/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}"></script>

    <!--Custom Script-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!--Toaster Script-->
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>


    <!-- "use strict"; -->

    @if(Session::has('message'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    </script>
    @endif

    @if(Session::has('error'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    </script>
    @endif

    @if(Session::has('info'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    </script>
    @endif

    @if(Session::has('warning'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    </script>
    @endif

</body>

</html>
