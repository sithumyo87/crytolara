<!doctype html>
<html lang="en" data-bs-theme="dark">

<!-- Mirrored from templates.iqonic.design/coinex-dist/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2024 20:35:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COINEX | Cryptocurrency Exchange Admin Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/coinex.css?v=1.0.0') }}">  
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}" />
</head>

<body class=" ">
    <!-- loader Start -->
    {{-- <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div> --}}
    <!-- loader END -->
    <div style="background-image: url('../assets/images/auth/01.png')">
        <div class="wrapper">
            <section class="vh-100 bg-image">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-lg-6 col-md-8 mt-5">
                            <div class="card bg-dark">
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Wrapper End-->
    <!-- offcanvas start -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/js/libs.min.js')}}"></script>
    <!-- widgetchart JavaScript -->
    <script src="{{ asset('assets/js/charts/widgetcharts.js')}}"></script>
    <!-- fslightbox JavaScript -->
    <script src="{{ asset('assets/js/fslightbox.js')}}"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <!-- apexchart JavaScript -->
    <script src="{{ asset('assets/js/charts/apexcharts.js')}}"></script>
    <script src="{{ asset('assets/js/prism.mini.js')}}"></script>

</html>
