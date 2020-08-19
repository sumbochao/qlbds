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
<body class="horizontal-nav skin-megna-dark fixed-layout">
<div class="loading" style="display:none"></div>
@include('includes.partials.logged-in-as')

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('backend.includes.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <div class="nav-text-box align-items-center d-md-none">
            <span><img src="assets/images/logo-icon.png" alt="elegant admin template"></span>
            <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i
                        class="mdi mdi-toggle-switch"></i></a>
            <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                        class="ti-close"></i></a>
        </div>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="icon-speedometer"></i><span class="hide-menu">Dashboard <span
                                        class="badge badge-pill badge-cyan">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="index.html">Minimal</a></li>
                            <li><a href="index2.html">Analytical</a></li>
                            <li><a href="index3.html">Demographical</a></li>
                            <li><a href="index4.html">Modern</a></li>
                            <li><a href="index5.html">Cryptocurrency</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-calendar.html">Calendar</a></li>
                            <li><a href="app-chat.html">Chat app</a></li>
                            <li><a href="app-ticket.html">Support Ticket</a></li>
                            <li><a href="app-contact.html">Contact / Employee</a></li>
                            <li><a href="app-contact2.html">Contact Grid</a></li>
                            <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            <li><a href="javascript:void(0)" class="has-arrow">Inbox</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="app-email.html">Mailbox</a></li>
                                    <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                    <li><a href="app-compose.html">Compose Mail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark two-column" href="javascript:void(0)"
                           aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-user-card.html">User Cards</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                            <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                            <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-nestable.html">Nestable</a></li>
                            <li><a href="ui-range-slider.html">Range slider</a></li>
                            <li><a href="ui-timeline.html">Timeline</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                            <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                            <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                            <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                            <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                            <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="ui-list-media.html">List Media</a></li>
                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                            <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                            <li><a href="ui-spinner.html">Spinner</a></li>
                            <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                            <li><a href="ui-toasts.html">Toasts</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"></li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="form-basic.html">Basic Forms</a></li>
                            <li><a href="form-layout.html">Form Layouts</a></li>
                            <li><a href="form-addons.html">Form Addons</a></li>
                            <li><a href="form-material.html">Form Material</a></li>
                            <li><a href="form-float-input.html">Floating Lable</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-bootstrap-validation.html">Form Bootstrap Validation</a></li>
                            <li><a href="form-dropzone.html">File Dropzone</a></li>
                            <li><a href="form-icheck.html">Icheck control</a></li>
                            <li><a href="form-img-cropper.html">Image Cropper</a></li>
                            <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                            <li><a href="form-typehead.html">Form Typehead</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                            <li><a href="form-summernote.html">Summernote Editor</a></li>
                            <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="table-basic.html">Basic Tables</a></li>
                            <li><a href="table-layout.html">Table Layouts</a></li>
                            <li><a href="table-data-table.html">Data Tables</a></li>
                            <li><a href="table-footable.html">Footable</a></li>
                            <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                            <li><a href="table-responsive.html">Responsive Table</a></li>
                            <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                            <li><a href="table-editable-table.html">Editable Table</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="widget-data.html">Data Widgets</a></li>
                            <li><a href="widget-apps.html">Apps Widgets</a></li>
                            <li><a href="widget-charts.html">Charts Widgets</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"></li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-files"></i><span class="hide-menu">Pages <span
                                        class="badge badge-pill badge-info">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="starter-kit.html">Starter Kit</a></li>
                            <li><a href="pages-blank.html">Blank page</a></li>
                            <li><a href="javascript:void(0)" class="has-arrow">Authentication <span
                                            class="badge badge-pill badge-success float-right">6</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="pages-login.html">Login 1</a></li>
                                    <li><a href="pages-login-2.html">Login 2</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-register2.html">Register 2</a></li>
                                    <li><a href="pages-register3.html">Register 3</a></li>
                                    <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="pages-recover-password.html">Recover password</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-profile.html">Profile page</a></li>
                            <li><a href="pages-animation.html">Animation</a></li>
                            <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                            <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-treeview.html">Treeview</a></li>
                            <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                            <li><a href="pages-search-result.html">Search result</a></li>
                            <li><a href="pages-scroll.html">Scrollbar</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                            <li><a href="pages-gallery.html">Gallery</a></li>
                            <li><a href="pages-faq.html">Faqs </a></li>
                            <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="pages-error-400.html">400</a></li>
                                    <li><a href="pages-error-403.html">403</a></li>
                                    <li><a href="pages-error-404.html">404</a></li>
                                    <li><a href="pages-error-500.html">500</a></li>
                                    <li><a href="pages-error-503.html">503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-light-bulb"></i><span class="hide-menu">Extras</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                   aria-expanded="false"><span class="hide-menu">Charts</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartis Chart</a></li>
                                    <li><a href="chart-echart.html">Echarts</a></li>
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-knob.html">Knob Chart</a></li>
                                    <li><a href="chart-chart-js.html">Chartjs</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-extra-chart.html">Extra chart</a></li>
                                    <li><a href="chart-peity.html">Peity Charts</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                   aria-expanded="false"><span class="hide-menu">Icons</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="icon-material.html">Material Icons</a></li>
                                    <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                    <li><a href="icon-themify.html">Themify Icons</a></li>
                                    <li><a href="icon-weather.html">Weather Icons</a></li>
                                    <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                                    <li><a href="icon-flag.html">Flag Icons</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                   aria-expanded="false"><span class="hide-menu">Maps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="map-google.html">Google Maps</a></li>
                                    <li><a href="map-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li><a class="waves-effect waves-dark" href="documentation/documentation.html"
                                   aria-expanded="false"><span class="hide-menu">Documentation</span></a></li>
                            <li><a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><span
                                            class="hide-menu">Log Out</span></a></li>
                            <li><a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><span
                                            class="hide-menu">FAQs</span></a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-align-left"></i><span class="hide-menu">Multi dd</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="javascript:void(0)">item 1.1</a></li>
                            <li><a href="javascript:void(0)">item 1.2</a></li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="javascript:void(0)">item 1.3.1</a></li>
                                    <li><a href="javascript:void(0)">item 1.3.2</a></li>
                                    <li><a href="javascript:void(0)">item 1.3.3</a></li>
                                    <li><a href="javascript:void(0)">item 1.3.4</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">item 1.4</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard 2</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard 2</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i
                                    class="fa fa-plus-circle"></i> Create New
                        </button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Site A Report</h5>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row text-center">
                                <div class="col-lg-4 border-right">
                                    <div id="sparkline8" class="m-b-10"></div>
                                    <h6>My Balance</h6> <b>$14,146</b></div>
                                <div class="col-lg-4 border-right">
                                    <div id="sparkline9" class="m-b-10"></div>
                                    <h6>New Orders</h6> <b>$4567</b></div>
                                <div class="col-lg-4">
                                    <div id="sparkline10" class="m-b-10"></div>
                                    <h6>Overall Views</h6> <b>4328</b></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="morris-area-chart2" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-5">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-6">
                            <div class="card bg-success text-white text-center">
                                <div class="card-body">
                                    <small>Visit</small>
                                    <h3>284</h3>
                                    <div id="sparkline11" class="m-t-10"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-6">
                            <div class="card bg-info text-white text-center">
                                <div class="card-body">
                                    <small>Page Views</small>
                                    <h3>8284</h3>
                                    <div id="sparkline12" class="m-t-10"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-6">
                            <div class="card bg-primary text-white text-center">
                                <div class="card-body">
                                    <small>Unique visitors</small>
                                    <h3>284</h3>
                                    <div id="sparkline13" class="m-t-10"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-6">
                            <div class="card bg-danger text-white text-center">
                                <div class="card-body">
                                    <small>Bounce Rate</small>
                                    <h3>28%</h3>
                                    <div id="sparkline14" class="m-t-10"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales Analysis</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-4 border-right">
                                            <h6>TOTAL</h6>
                                            <h5 class="text-danger m-b-0">18465</h5>
                                        </div>
                                        <div class="col-4 border-right">
                                            <h6>TODAY</h6>
                                            <h5 class="text-danger m-b-0">1547</h5>
                                        </div>
                                        <div class="col-4">
                                            <h6>WEEK</h6>
                                            <h5 class="text-danger m-b-0">6045</h5>
                                        </div>
                                    </div>
                                </div>
                                <div id="sparkline15" class="m-t-30"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h4 class="card-title">Weather Report</h4>
                                <select class="form-control w-25 ml-auto">
                                    <option selected="">Today</option>
                                    <option value="1">Weekly</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center flex-row m-t-30">
                                <div class="p-2 display-5 text-info"><i class="wi wi-day-showers"></i>
                                    <span>73<sup>°</sup></span></div>
                                <div class="p-2">
                                    <h3 class="m-b-0">Saturday</h3><small>Ahmedabad, India</small></div>
                            </div>
                            <table class="table no-border">
                                <tbody>
                                <tr>
                                    <td>Wind</td>
                                    <td class="font-medium">ESE 17 mph</td>
                                </tr>
                                <tr>
                                    <td>Humidity</td>
                                    <td class="font-medium">83%</td>
                                </tr>
                                <tr>
                                    <td>Pressure</td>
                                    <td class="font-medium">28.56 in</td>
                                </tr>
                                <tr>
                                    <td>Cloud Cover</td>
                                    <td class="font-medium">78%</td>
                                </tr>
                                <tr>
                                    <td>Ceiling</td>
                                    <td class="font-medium">25760 ft</td>
                                </tr>
                                </tbody>
                            </table>
                            <hr>
                            <ul class="list-unstyled row text-center city-weather-days">
                                <li class="col"><i class="wi wi-day-sunny"></i><span>09:30</span>
                                    <h3>70<sup>°</sup></h3></li>
                                <li class="col"><i class="wi wi-day-cloudy"></i><span>11:30</span>
                                    <h3>72<sup>°</sup></h3></li>
                                <li class="col"><i class="wi wi-day-hail"></i><span>13:30</span>
                                    <h3>75<sup>°</sup></h3></li>
                                <li class="col"><i class="wi wi-day-sprinkle"></i><span>15:30</span>
                                    <h3>76<sup>°</sup></h3></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- column -->
                <div class="col-lg-4">
                    <div class="card earning-widget">
                        <div class="card-body p-b-0">
                            <div class="card-title">
                                <div class="d-flex">
                                        <span>
                                <h4 class="card-title m-b-0">Total Earning</h4>
                                <h2 class="m-t-0 text-success">$586</h2></span>
                                    <select class="form-control w-25 ml-auto">
                                        <option selected="">Today</option>
                                        <option value="1">Weekly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <table class="table v-middle no-border">
                                <tbody>
                                <tr>
                                    <td style="width:40px"><img src="assets/images/users/1.jpg" width="50"
                                                                class="img-circle" alt="logo"></td>
                                    <td>Andrew Simon</td>
                                    <td align="right"><span class="label label-info">$2300</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/2.jpg" width="50" class="img-circle" alt="logo">
                                    </td>
                                    <td>Daniel Kristeen</td>
                                    <td align="right"><span class="label label-success">$3300</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/3.jpg" width="50" class="img-circle" alt="logo">
                                    </td>
                                    <td>Dany John</td>
                                    <td align="right"><span class="label label-primary">$4300</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/4.jpg" width="50" class="img-circle" alt="logo">
                                    </td>
                                    <td>Chris gyle</td>
                                    <td align="right"><span class="label label-warning">$5300</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/5.jpg" width="50" class="img-circle" alt="logo">
                                    </td>
                                    <td>Opera mini</td>
                                    <td align="right"><span class="label label-danger">$4567</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/6.jpg" width="50" class="img-circle" alt="logo">
                                    </td>
                                    <td>Microsoft edge</td>
                                    <td align="right"><span class="label label-megna">$7889</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- column -->
                <!-- column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Feeds</h4>
                        </div>
                        <ul class="feeds p-b-20">
                            <li>
                                <div class="bg-info"><i class="far fa-bell"></i></div>
                                You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                            <li>
                                <div class="bg-success"><i class="ti-server"></i></div>
                                Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                            <li>
                                <div class="bg-warning"><i class="ti-shopping-cart"></i></div>
                                New order received.<span class="text-muted">31 May</span></li>
                            <li>
                                <div class="bg-danger"><i class="ti-user"></i></div>
                                New user registered.<span class="text-muted">30 May</span></li>
                            <li>
                                <div class="bg-dark"><i class="far fa-bell"></i></div>
                                New Version just arrived. <span class="text-muted">27 May</span></li>
                            <li>
                                <div class="bg-info"><i class="far fa-bell"></i></div>
                                You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                            <li>
                                <div class="bg-danger"><i class="ti-user"></i></div>
                                New user registered.<span class="text-muted">30 May</span></li>
                            <li>
                                <div class="bg-dark"><i class="far fa-bell"></i></div>
                                New Version just arrived. <span class="text-muted">27 May</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Browser -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Browser Stats</h4>
                            <table class="table browser m-t-30 no-border">
                                <tbody>
                                <tr>
                                    <td style="width:40px"><img src="assets/images/browser/chrome-logo.png" alt="logo">
                                    </td>
                                    <td>Google Chrome</td>
                                    <td align="right"><span class="label label-info">23%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/browser/firefox-logo.png" alt="logo"></td>
                                    <td>Mozila Firefox</td>
                                    <td align="right"><span class="label label-success">15%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/browser/safari-logo.png" alt="logo"></td>
                                    <td>Apple Safari</td>
                                    <td align="right"><span class="label label-primary">07%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/browser/internet-logo.png" alt="logo"></td>
                                    <td>Internet Explorer</td>
                                    <td align="right"><span class="label label-warning">09%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/browser/opera-logo.png" alt="logo"></td>
                                    <td>Opera mini</td>
                                    <td align="right"><span class="label label-danger">23%</span></td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/browser/internet-logo.png" alt="logo"></td>
                                    <td>Microsoft edge</td>
                                    <td align="right"><span class="label label-megna">09%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Revenue of the Site</h5>
                            <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                                <span class="display-5 text-success"><i class="icon-wallet"></i></span>
                                <span class="display-6 ml-auto"><sup class="font-20 text-success">$</sup>117k</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Projects of the Month</h4>
                                <select class="form-control w-25 ml-auto">
                                    <option selected="">January</option>
                                    <option value="1">February</option>
                                    <option value="2">March</option>
                                    <option value="3">April</option>
                                </select>
                            </div>
                            <div class="table-responsive m-t-30">
                                <table class="table stylish-table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Assigned</th>
                                        <th>Name</th>
                                        <th>Priority</th>
                                        <th>Budget</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width:50px;"><span class="round">S</span></td>
                                        <td>
                                            <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                        <td>Elite Admin</td>
                                        <td><span class="label label-success">Low</span></td>
                                        <td>$3.9K</td>
                                    </tr>
                                    <tr class="active">
                                        <td><span class="round"><img src="assets/images/users/2.jpg" alt="user"
                                                                     width="50"></span></td>
                                        <td>
                                            <h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
                                        <td>Real Homes</td>
                                        <td><span class="label label-info">Medium</span></td>
                                        <td>$23.9K</td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-success">B</span></td>
                                        <td>
                                            <h6>Bhavesh patel</h6><small class="text-muted">Developer</small></td>
                                        <td>MedicalPro Theme</td>
                                        <td><span class="label label-danger">High</span></td>
                                        <td>$12.9K</td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-primary">N</span></td>
                                        <td>
                                            <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                        <td>Elite Admin</td>
                                        <td><span class="label label-success">Low</span></td>
                                        <td>$10.9K</td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-warning">M</span></td>
                                        <td>
                                            <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
                                        <td>Helping Hands</td>
                                        <td><span class="label label-danger">High</span></td>
                                        <td>$12.9K</td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-danger">N</span></td>
                                        <td>
                                            <h6>Johnathan</h6><small class="text-muted">Graphic</small></td>
                                        <td>Digital Agency</td>
                                        <td><span class="label label-danger">High</span></td>
                                        <td>$2.6K</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Table -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Site visit in Maps</h5>
                            <div class="row">
                                <div class="col-lg-7">
                                    <div id="world-map-marker" style="height: 490px;"></div>
                                </div>
                                <div class="col-lg-4 ml-auto">
                                    <ul class="country-state">
                                        <li>
                                            <h2>6350</h2>
                                            <small>From India</small>
                                            <div class="float-right">48% <i class="fa fa-level-up text-success"></i>
                                            </div>
                                            <div class="progress m-t-5">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                     style="width: 48%; height: 6px;" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>3250</h2>
                                            <small>From UAE</small>
                                            <div class="float-right">98% <i class="fa fa-level-up text-success"></i>
                                            </div>
                                            <div class="progress m-t-5">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                     style="width: 98%; height: 6px;" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>1250</h2>
                                            <small>From Australia</small>
                                            <div class="float-right">75% <i class="fa fa-level-down text-danger"></i>
                                            </div>
                                            <div class="progress m-t-5">
                                                <div class="progress-bar bg-inverse" role="progressbar"
                                                     style="width: 75%; height: 6px;" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>1350</h2>
                                            <small>From USA</small>
                                            <div class="float-right">48% <i class="fa fa-level-up text-success"></i>
                                            </div>
                                            <div class="progress m-t-5">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                     style="width: 48%; height: 6px;" aria-valuenow="25"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                    </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark"
                                   class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a>
                            </li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a>
                            </li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark"
                                   class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark"
                                   class="megna-dark-theme working">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Varun Dhavan <small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Genelia Deshmukh <small
                                                class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Ritesh Deshmukh <small
                                                class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Arijit Sinh <small
                                                class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Govinda Star <small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img"
                                                                  class="img-circle"> <span>John Abraham<small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Hritik Roshan<small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Pwandeep rajan <small
                                                class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
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
    <footer class="footer">
        © 2020 Phát triển bởi Walter Nguyễn
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

<!-- JavaScripts -->
@yield('before-scripts')
{{ Html::script(mix('js/backend.js')) }}
{{ Html::script(mix('js/backend-custom.js')) }}
@yield('after-scripts')
</body>
</html>