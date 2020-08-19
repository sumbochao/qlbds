<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="icon" sizes="16x16" type="image/png" href="{{route('frontend.index')}}/img/favicon_icon/{{settings()->favicon}}"> --}}
    <title>@yield('title', app_name())</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('meta_author', 'Viral Solani')">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    @yield('meta')

<!-- Styles -->
    @yield('before-styles')

<!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    @langrtl
    {{ Html::style(getRtlCss(mix('css/backend.css'))) }}
    @else
        {{ Html::style(mix('css/backend.css')) }}
        @endlangrtl
        {{ Html::style(mix('css/backend-custom.css')) }}
        @yield('after-styles')

    <!-- Html5 Shim and Respond.js IE8 support of Html5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {{ Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        {{ Html::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
            <![endif]-->

        <!-- Scripts -->
        <script>
          window.Laravel = {!! json_encode([ 'csrfToken' => csrf_token() ]) !!};
        </script>
        <?php
        if (!empty($google_analytics)) {
            echo $google_analytics;
        }
        ?>
</head>
<body class="horizontal-nav skin-megna-dark fixed-layout" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader" style="display: none;">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elegant admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
@include('backend.includes.header')
<!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@include('backend.includes.sidebar-dynamic')

<!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="min-height: 812px;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
        @yield('page-header')
        <!-- Breadcrumbs would render from routes/breadcrumb.php -->
        @if(Breadcrumbs::exists())
            {!! Breadcrumbs::render() !!}
        @endif
        <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    @include('includes.partials.messages')
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
@include('backend.includes.footer')

<!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<div class="jq-toast-wrap top-right">
    <div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left; display: none;"><span
                class="jq-toast-loader jq-toast-loaded"
                style="-webkit-transition: width 3.1s ease-in;                       -o-transition: width 3.1s ease-in;                       transition: width 3.1s ease-in;                       background-color: #ff6849;"></span><span
                class="close-jq-toast-single">×</span>
        <h2 class="jq-toast-heading">Welcome to {{ substr(app_name(), 0, 1) }}</h2>
    </div>
</div>
<!-- JavaScripts -->
@yield('before-scripts')
{{ Html::script(mix('js/backend.js')) }}
{{ Html::script(mix('js/backend-custom.js')) }}
@yield('after-scripts')
</body>
</html>