<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    @include('layouts.assets-css')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="kt_body" style="background-image: url({{ asset('assets/media/bg/bg-10.jpg') }}); height:100%" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    @include('layouts.mobile-header')
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('layouts.header')

                <!--Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--Subheader-->
                    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--Heading-->
                                <div class="d-flex flex-column">
                                    <!--Title-->
                                    <h2 class="text-white font-weight-bold my-2 mr-5">@yield('breadcrumb')</h2>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                    <!--Entry-->
                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    
    @include('layouts.assets-js')
    @include('layouts.scripts.swal')
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
</body>
</html>
