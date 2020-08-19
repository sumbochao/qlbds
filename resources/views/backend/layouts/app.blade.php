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
    <aside class="left-sidebar">
        <div class="nav-text-box align-items-center d-md-none">
            <span><img src="js/logo-icon.png" alt="elegant admin template"></span>
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
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/index.html">Minimal</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/index2.html">Analytical</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/index3.html">Demographical</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/index4.html">Modern</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/index5.html">Cryptocurrency</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-calendar.html">Calendar</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-chat.html">Chat
                                    app</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-ticket.html">Support
                                    Ticket</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-contact.html">Contact
                                    / Employee</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-contact2.html">Contact
                                    Grid</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-contact-detail.html">Contact
                                    Detail</a></li>
                            <li><a href="javascript:void(0)" class="has-arrow">Inbox</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li>
                                        <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-email.html">Mailbox</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-email-detail.html">Mailbox
                                            Detail</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/app-compose.html">Compose
                                            Mail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark two-column" href="javascript:void(0)"
                           aria-expanded="false"><i
                                    class="ti-palette"></i><span class="hide-menu">Ui</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-user-card.html">User
                                    Cards</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-tab.html">Tab</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-tooltip-popover.html">Tooltip
                                    &amp; Popover</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-tooltip-stylish.html">Tooltip
                                    stylish</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-sweetalert.html">Sweet
                                    Alert</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-notification.html">Notification</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-progressbar.html">Progressbar</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-nestable.html">Nestable</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-range-slider.html">Range
                                    slider</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-typography.html">Typography</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-horizontal-timeline.html">Horizontal
                                    Timeline</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-session-timeout.html">Session
                                    Timeout</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-session-ideal-timeout.html">Session
                                    Ideal Timeout</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-bootstrap.html">Bootstrap
                                    Ui</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-breadcrumb.html">Breadcrumb</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-bootstrap-switch.html">Bootstrap
                                    Switch</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-list-media.html">List
                                    Media</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-ribbons.html">Ribbons</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-grid.html">Grid</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-carousel.html">Carousel</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-date-paginator.html">Date-paginator</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-dragable-portlet.html">Dragable
                                    Portlet</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-spinner.html">Spinner</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-scrollspy.html">Scrollspy</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/ui-toasts.html">Toasts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"></li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-basic.html">Basic
                                    Forms</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-layout.html">Form
                                    Layouts</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-addons.html">Form
                                    Addons</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-material.html">Form
                                    Material</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-float-input.html">Floating
                                    Lable</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-pickers.html">Form
                                    Pickers</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-upload.html">File
                                    Upload</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-mask.html">Form
                                    Mask</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-validation.html">Form
                                    Validation</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-bootstrap-validation.html">Form
                                    Bootstrap Validation</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-dropzone.html">File
                                    Dropzone</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-icheck.html">Icheck
                                    control</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-img-cropper.html">Image
                                    Cropper</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-bootstrapwysihtml5.html">HTML5
                                    Editor</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-typehead.html">Form
                                    Typehead</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-wizard.html">Form
                                    Wizard</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-xeditable.html">Xeditable
                                    Editor</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-summernote.html">Summernote
                                    Editor</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/form-tinymce.html">Tinymce
                                    Editor</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/table-basic.html">Basic
                                    Tables</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/table-layout.html">Table
                                    Layouts</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/table-data-table.html">Data
                                    Tables</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/table-footable.html">Footable</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/table-jsgrid.html">Js
                                    Grid Table</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/table-responsive.html">Responsive
                                    Table</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/table-bootstrap.html">Bootstrap
                                    Tables</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/table-editable-table.html">Editable
                                    Table</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/widget-data.html">Data
                                    Widgets</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/widget-apps.html">Apps
                                    Widgets</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/widget-charts.html">Charts
                                    Widgets</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap"></li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-files"></i><span class="hide-menu">Pages <span
                                        class="badge badge-pill badge-info">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/starter-kit.html">Starter
                                    Kit</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-blank.html">Blank
                                    page</a></li>
                            <li><a href="javascript:void(0)" class="has-arrow">Authentication <span
                                            class="badge badge-pill badge-success float-right">6</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-login.html">Login
                                            1</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-login-2.html">Login
                                            2</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-register.html">Register</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-register2.html">Register
                                            2</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-register3.html">Register
                                            3</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-lockscreen.html">Lockscreen</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-recover-password.html">Recover
                                            password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-profile.html">Profile
                                    page</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-animation.html">Animation</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-fix-innersidebar.html">Sticky
                                    Left sidebar</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-fix-inner-right-sidebar.html">Sticky
                                    Right sidebar</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-invoice.html">Invoice</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-treeview.html">Treeview</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-utility-classes.html">Helper
                                    Classes</a></li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-search-result.html">Search
                                    result</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-scroll.html">Scrollbar</a>
                            </li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-pricing.html">Pricing</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-lightbox-popup.html">Lighbox
                                    popup</a></li>
                            <li>
                                <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-gallery.html">Gallery</a>
                            </li>
                            <li><a
                                        href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-faq.html">Faqs </a>
                            </li>
                            <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-error-400.html">400</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-error-403.html">403</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-error-404.html">404</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-error-500.html">500</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-error-503.html">503</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="ti-light-bulb"></i><span class="hide-menu">Extras</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                   aria-expanded="false"><span
                                            class="hide-menu">Charts</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-morris.html">Morris
                                            Chart</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-chartist.html">Chartis
                                            Chart</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-echart.html">Echarts</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-flot.html">Flot
                                            Chart</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-knob.html">Knob
                                            Chart</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-chart-js.html">Chartjs</a>
                                    </li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-sparkline.html">Sparkline
                                            Chart</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-extra-chart.html">Extra
                                            chart</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/chart-peity.html">Peity
                                            Charts</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                   aria-expanded="false"><span
                                            class="hide-menu">Icons</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/icon-material.html">Material
                                            Icons</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/icon-fontawesome.html">Fontawesome
                                            Icons</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/icon-themify.html">Themify
                                            Icons</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/icon-weather.html">Weather
                                            Icons</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/icon-simple-lineicon.html">Simple
                                            Line icons</a></li>
                                    <li>
                                        <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/icon-flag.html">Flag
                                            Icons</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                   aria-expanded="false"><span
                                            class="hide-menu">Maps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/map-google.html">Google
                                            Maps</a></li>
                                    <li><a
                                                href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/map-vector.html">Vector
                                            Maps</a></li>
                                </ul>
                            </li>
                            <li><a class="waves-effect waves-dark"
                                   href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/documentation/documentation.html"
                                   aria-expanded="false"><span class="hide-menu">Documentation</span></a></li>
                            <li><a class="waves-effect waves-dark"
                                   href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-login.html"
                                   aria-expanded="false"><span class="hide-menu">Log Out</span></a></li>
                            <li><a class="waves-effect waves-dark"
                                   href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/pages-faq.html"
                                   aria-expanded="false"><span class="hide-menu">FAQs</span></a></li>
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
    <div class="page-wrapper" style="min-height: 812px;">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard 1</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ol>
                        <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i
                                    class="fa fa-plus-circle"></i>
                            Create New
                        </button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="card-group">
                <!-- card -->
                <div class="card o-income">
                    <div class="card-body">
                        <div class="d-flex m-b-30 no-block">
                            <h4 class="card-title m-b-0 align-self-center">Daily Income</h4>
                            <div class="ml-auto">
                                <select class="form-control">
                                    <option selected="">Today</option>
                                    <option value="1">Tomorrow</option>
                                </select>
                            </div>
                        </div>
                        <div id="income" style="height: 260px; width: 100%; max-height: 290px; position: relative;"
                             class="c3">
                            <svg width="580" height="290" style="overflow: hidden;">
                                <defs>
                                    <clippath id="c3-1597806936501-clip">
                                        <rect width="538" height="236"></rect>
                                    </clippath>
                                    <clippath id="c3-1597806936501-clip-xaxis">
                                        <rect x="-41" y="-20" width="610" height="70"></rect>
                                    </clippath>
                                    <clippath id="c3-1597806936501-clip-yaxis">
                                        <rect x="-39" y="-4" width="60" height="260"></rect>
                                    </clippath>
                                    <clippath id="c3-1597806936501-clip-grid">
                                        <rect width="538" height="236"></rect>
                                    </clippath>
                                    <clippath id="c3-1597806936501-clip-subchart">
                                        <rect width="538"></rect>
                                    </clippath>
                                </defs>
                                <g transform="translate(40.5,4.5)">
                                    <text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle"
                                          x="269" y="118"
                                          style="opacity: 0;"></text>
                                    <rect class="c3-zoom-rect" width="538" height="236" style="opacity: 0;"></rect>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip)"
                                       class="c3-regions" style="visibility: visible;"></g>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip-grid)"
                                       class="c3-grid" style="visibility: visible;">
                                        <g class="c3-ygrids">
                                            <line class="c3-ygrid" x1="0" x2="538" y1="236" y2="236"></line>
                                            <line class="c3-ygrid" x1="0" x2="538" y1="178" y2="178"></line>
                                            <line class="c3-ygrid" x1="0" x2="538" y1="119" y2="119"></line>
                                            <line class="c3-ygrid" x1="0" x2="538" y1="60" y2="60"></line>
                                            <line class="c3-ygrid" x1="0" x2="538" y1="1" y2="1"></line>
                                        </g>
                                        <g class="c3-xgrid-focus">
                                            <line class="c3-xgrid-focus" x1="269" x2="269" y1="0" y2="236"
                                                  style="visibility: hidden;"></line>
                                        </g>
                                    </g>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip)"
                                       class="c3-chart">
                                        <g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;">
                                            <rect class=" c3-event-rect c3-event-rect-0" x="0.20000000000000284" y="0"
                                                  width="107.6"
                                                  height="236"></rect>
                                            <rect class=" c3-event-rect c3-event-rect-1" x="108.2" y="0" width="107.6"
                                                  height="236"></rect>
                                            <rect class=" c3-event-rect c3-event-rect-2" x="215.2" y="0" width="107.6"
                                                  height="236"></rect>
                                            <rect class=" c3-event-rect c3-event-rect-3" x="323.2" y="0" width="107.6"
                                                  height="236"></rect>
                                            <rect class=" c3-event-rect c3-event-rect-4" x="431.2" y="0" width="107.6"
                                                  height="236"></rect>
                                        </g>
                                        <g class="c3-chart-bars">
                                            <g class="c3-chart-bar c3-target c3-target-Growth-Income"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Growth-Income c3-bars c3-bars-Growth-Income"
                                                   style="cursor: pointer;">
                                                    <path class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                          d="M 39,236 L39,174.96103896103895 L54,174.96103896103895 L54,236 z"
                                                          style="stroke: rgb(116, 96, 238); fill: rgb(116, 96, 238); opacity: 1;"></path>
                                                    <path class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                          style="stroke: rgb(116, 96, 238); fill: rgb(116, 96, 238); opacity: 1;"
                                                          d="M 147,236 L147,113.92207792207793 L162,113.92207792207793 L162,236 z"></path>
                                                    <path class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                          style="stroke: rgb(116, 96, 238); fill: rgb(116, 96, 238); opacity: 1;"
                                                          d="M 254,236 L254,174.96103896103895 L269,174.96103896103895 L269,236 z"></path>
                                                    <path class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                          style="stroke: rgb(116, 96, 238); fill: rgb(116, 96, 238); opacity: 1;"
                                                          d="M 362,236 L362,52.88311688311688 L377,52.88311688311688 L377,236 z"></path>
                                                    <path class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                          style="stroke: rgb(116, 96, 238); fill: rgb(116, 96, 238); opacity: 1;"
                                                          d="M 470,236 L470,22.36363636363637 L485,22.36363636363637 L485,236 z"></path>
                                                </g>
                                            </g>
                                            <g class="c3-chart-bar c3-target c3-target-Net-Income"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Net-Income c3-bars c3-bars-Net-Income"
                                                   style="cursor: pointer;">
                                                    <path class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                          d="M 54,236 L54,156.64935064935065 L69,156.64935064935065 L69,236 z"
                                                          style="stroke: rgb(0, 158, 251); fill: rgb(0, 158, 251); opacity: 1;"></path>
                                                    <path class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                          style="stroke: rgb(0, 158, 251); fill: rgb(0, 158, 251); opacity: 1;"
                                                          d="M 162,236 L162,174.96103896103895 L177,174.96103896103895 L177,236 z"></path>
                                                    <path class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                          style="stroke: rgb(0, 158, 251); fill: rgb(0, 158, 251); opacity: 1;"
                                                          d="M 269,236 L269,150.54545454545456 L284,150.54545454545456 L284,236 z"></path>
                                                    <path class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                          style="stroke: rgb(0, 158, 251); fill: rgb(0, 158, 251); opacity: 1;"
                                                          d="M 377,236 L377,113.92207792207793 L392,113.92207792207793 L392,236 z"></path>
                                                    <path class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                          style="stroke: rgb(0, 158, 251); fill: rgb(0, 158, 251); opacity: 1;"
                                                          d="M 485,236 L485,162.75324675324674 L500,162.75324675324674 L500,236 z"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="c3-chart-lines">
                                            <g class="c3-chart-line c3-target c3-target-Growth-Income"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Growth-Income c3-lines c3-lines-Growth-Income"></g>
                                                <g class=" c3-shapes c3-shapes-Growth-Income c3-areas c3-areas-Growth-Income"></g>
                                                <g class=" c3-selected-circles c3-selected-circles-Growth-Income"></g>
                                                <g class=" c3-shapes c3-shapes-Growth-Income c3-circles c3-circles-Growth-Income"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                            <g class="c3-chart-line c3-target c3-target-Net-Income"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Net-Income c3-lines c3-lines-Net-Income"></g>
                                                <g class=" c3-shapes c3-shapes-Net-Income c3-areas c3-areas-Net-Income"></g>
                                                <g class=" c3-selected-circles c3-selected-circles-Net-Income"></g>
                                                <g class=" c3-shapes c3-shapes-Net-Income c3-circles c3-circles-Net-Income"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                        </g>
                                        <g class="c3-chart-arcs" transform="translate(269,113)">
                                            <text class="c3-chart-arcs-title"
                                                  style="text-anchor: middle; opacity: 0;"></text>
                                        </g>
                                        <g class="c3-chart-texts">
                                            <g class="c3-chart-text c3-target c3-target-Growth-Income"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-texts c3-texts-Growth-Income"></g>
                                            </g>
                                            <g class="c3-chart-text c3-target c3-target-Net-Income"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-texts c3-texts-Net-Income"></g>
                                            </g>
                                        </g>
                                    </g>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip-grid)"
                                       class="c3-grid c3-grid-lines">
                                        <g class="c3-xgrid-lines"></g>
                                        <g class="c3-ygrid-lines"></g>
                                    </g>
                                    <g class="c3-axis c3-axis-x"
                                       clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip-xaxis)"
                                       transform="translate(0,236)" style="visibility: visible; opacity: 1;">
                                        <text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="538"
                                              dx="-0.5em"
                                              dy="-0.5em"></text>
                                        <g class="tick" transform="translate(54, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">0</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(162, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">1</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(269, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">2</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(377, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">3</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(485, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">4</tspan>
                                            </text>
                                        </g>
                                        <path class="domain" d="M0,6V0H538V6"></path>
                                    </g>
                                    <g class="c3-axis c3-axis-y"
                                       clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip-yaxis)"
                                       transform="translate(0,0)" style="visibility: visible; opacity: 1;">
                                        <text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;"
                                              x="0" dx="-0.5em"
                                              dy="1.2em"></text>
                                        <g class="tick" transform="translate(0,236)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">0</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,178)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">96.25</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,119)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">192.5</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,60)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">288.75</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,1)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">385</tspan>
                                            </text>
                                        </g>
                                        <path class="domain" d="M0,1H0V236H0"></path>
                                    </g>
                                    <g class="c3-axis c3-axis-y2" transform="translate(538,0)"
                                       style="visibility: hidden; opacity: 1;">
                                        <text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;"
                                              x="0" dx="-0.5em"
                                              dy="-0.5em"></text>
                                        <g class="tick" transform="translate(0,236)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,213)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.1</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,189)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.2</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,166)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.3</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,142)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.4</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,119)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.5</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,95)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.6</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,72)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.7</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,48)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.8</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,25)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.9</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,1)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">1</tspan>
                                            </text>
                                        </g>
                                        <path class="domain" d="M6,1H0V236H6"></path>
                                    </g>
                                </g>
                                <g transform="translate(20.5,290.5)" style="visibility: hidden;">
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip-subchart)"
                                       class="c3-chart">
                                        <g class="c3-chart-bars"></g>
                                        <g class="c3-chart-lines"></g>
                                    </g>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip)"
                                       class="c3-brush"
                                       style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <rect class="background" x="0" width="558"
                                              style="visibility: hidden; cursor: crosshair;"></rect>
                                        <rect class="extent" x="0" width="0" style="cursor: move;"></rect>
                                        <g class="resize e" transform="translate(0,0)"
                                           style="cursor: ew-resize; display: none;">
                                            <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                        </g>
                                        <g class="resize w" transform="translate(0,0)"
                                           style="cursor: ew-resize; display: none;">
                                            <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                        </g>
                                    </g>
                                    <g class="c3-axis-x" transform="translate(0,0)"
                                       clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936501-clip-xaxis)"
                                       style="visibility: hidden; opacity: 1;">
                                        <g class="tick" transform="translate(54, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">0</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(162, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">1</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(269, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">2</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(377, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">3</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(485, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">4</tspan>
                                            </text>
                                        </g>
                                        <path class="domain" d="M0,6V0H538V6"></path>
                                    </g>
                                </g>
                                <g transform="translate(0,270)">
                                    <g class="c3-legend-item c3-legend-item-Growth-Income"
                                       style="visibility: hidden; cursor: pointer;">
                                        <text x="14" y="9" style="pointer-events: none;">Growth Income</text>
                                        <rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0"
                                              style="fill-opacity: 0;"></rect>
                                        <line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10"
                                              style="stroke: rgb(116, 96, 238); pointer-events: none;"></line>
                                    </g>
                                    <g class="c3-legend-item c3-legend-item-Net-Income"
                                       style="visibility: hidden; cursor: pointer;">
                                        <text x="14" y="9" style="pointer-events: none;">Net Income</text>
                                        <rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0"
                                              style="fill-opacity: 0;"></rect>
                                        <line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10"
                                              style="stroke: rgb(0, 158, 251); pointer-events: none;"></line>
                                    </g>
                                </g>
                                <text class="c3-title" x="290" y="0"></text>
                            </svg>
                            <div class="c3-tooltip-container"
                                 style="position: absolute; pointer-events: none; display: none; top: 147.5px; left: 329.5px;">
                                <table class="c3-tooltip">
                                    <tbody>
                                    <tr>
                                        <th colspan="2">2</th>
                                    </tr>
                                    <tr class="c3-tooltip-name--Net-Income">
                                        <td class="name"><span style="background-color:#009efb"></span>Net Income</td>
                                        <td class="value">140</td>
                                    </tr>
                                    <tr class="c3-tooltip-name--Growth-Income">
                                        <td class="name"><span style="background-color:#7460ee"></span>Growth Income
                                        </td>
                                        <td class="value">100</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="list-inline m-t-30 text-center font-12">
                            <li><i class="fa fa-circle text-success"></i> Growth</li>
                            <li><i class="fa fa-circle text-info"></i> Net</li>
                        </ul>
                    </div>
                </div>
                <!-- card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex m-b-30 no-block">
                            <h4 class="card-title m-b-0 align-self-center">Visitors</h4>
                            <div class="ml-auto">
                                <select class="form-control">
                                    <option selected="">Today</option>
                                    <option value="1">Tomorrow</option>
                                </select>
                            </div>
                        </div>
                        <div id="visitor" style="height: 260px; width: 100%; max-height: 260px; position: relative;"
                             class="c3">
                            <svg width="580" height="260" style="overflow: hidden;">
                                <defs>
                                    <clippath id="c3-1597806936400-clip">
                                        <rect width="580" height="236"></rect>
                                    </clippath>
                                    <clippath id="c3-1597806936400-clip-xaxis">
                                        <rect x="-31" y="-20" width="642" height="40"></rect>
                                    </clippath>
                                    <clippath id="c3-1597806936400-clip-yaxis">
                                        <rect x="-29" y="-4" width="20" height="260"></rect>
                                    </clippath>
                                    <clippath id="c3-1597806936400-clip-grid">
                                        <rect width="580" height="236"></rect>
                                    </clippath>
                                    <clippath id="c3-1597806936400-clip-subchart">
                                        <rect width="580"></rect>
                                    </clippath>
                                </defs>
                                <g transform="translate(0.5,4.5)">
                                    <text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle"
                                          x="290" y="118"
                                          style="opacity: 0;"></text>
                                    <rect class="c3-zoom-rect" width="580" height="236" style="opacity: 0;"></rect>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip)"
                                       class="c3-regions" style="visibility: hidden;"></g>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip-grid)"
                                       class="c3-grid" style="visibility: hidden;">
                                        <g class="c3-xgrid-focus">
                                            <line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="236"
                                                  style="visibility: hidden;"></line>
                                        </g>
                                    </g>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip)"
                                       class="c3-chart">
                                        <g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;">
                                            <rect class=" c3-event-rect c3-event-rect-0" x="0" y="0" width="580"
                                                  height="236"></rect>
                                        </g>
                                        <g class="c3-chart-bars">
                                            <g class="c3-chart-bar c3-target c3-target-Other"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Other c3-bars c3-bars-Other"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                            <g class="c3-chart-bar c3-target c3-target-Desktop"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Desktop c3-bars c3-bars-Desktop"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                            <g class="c3-chart-bar c3-target c3-target-Tablet"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Tablet c3-bars c3-bars-Tablet"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                            <g class="c3-chart-bar c3-target c3-target-Mobile"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Mobile c3-bars c3-bars-Mobile"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                        </g>
                                        <g class="c3-chart-lines">
                                            <g class="c3-chart-line c3-target c3-target-Other"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Other c3-lines c3-lines-Other"></g>
                                                <g class=" c3-shapes c3-shapes-Other c3-areas c3-areas-Other"></g>
                                                <g class=" c3-selected-circles c3-selected-circles-Other"></g>
                                                <g class=" c3-shapes c3-shapes-Other c3-circles c3-circles-Other"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                            <g class="c3-chart-line c3-target c3-target-Desktop"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Desktop c3-lines c3-lines-Desktop"></g>
                                                <g class=" c3-shapes c3-shapes-Desktop c3-areas c3-areas-Desktop"></g>
                                                <g class=" c3-selected-circles c3-selected-circles-Desktop"></g>
                                                <g class=" c3-shapes c3-shapes-Desktop c3-circles c3-circles-Desktop"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                            <g class="c3-chart-line c3-target c3-target-Tablet"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Tablet c3-lines c3-lines-Tablet"></g>
                                                <g class=" c3-shapes c3-shapes-Tablet c3-areas c3-areas-Tablet"></g>
                                                <g class=" c3-selected-circles c3-selected-circles-Tablet"></g>
                                                <g class=" c3-shapes c3-shapes-Tablet c3-circles c3-circles-Tablet"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                            <g class="c3-chart-line c3-target c3-target-Mobile"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-shapes c3-shapes-Mobile c3-lines c3-lines-Mobile"></g>
                                                <g class=" c3-shapes c3-shapes-Mobile c3-areas c3-areas-Mobile"></g>
                                                <g class=" c3-selected-circles c3-selected-circles-Mobile"></g>
                                                <g class=" c3-shapes c3-shapes-Mobile c3-circles c3-circles-Mobile"
                                                   style="cursor: pointer;"></g>
                                            </g>
                                        </g>
                                        <g class="c3-chart-arcs" transform="translate(290,113)">
                                            <text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 1;">
                                                Visits
                                            </text>
                                            <g class="c3-chart-arc c3-target c3-target-Other">
                                                <g class=" c3-shapes c3-shapes-Other c3-arcs c3-arcs-Other">
                                                    <path class=" c3-shape c3-shape c3-arc c3-arc-Other" transform=""
                                                          style="fill: rgb(236, 239, 241); cursor: pointer; opacity: 1;"
                                                          d="M-100.37399365227927,38.066834624016224A107.35,107.35 0 0,1 -49.88803251889861,-95.05370435387205L-35.94633735758554,-68.49002358427576A77.35,77.35 0 0,0 -72.32350637171682,27.428688012740146Z"></path>
                                                </g>
                                                <text dy=".35em" class=""
                                                      transform="translate(-80.29919492182343,-30.453467699212958)"
                                                      style="opacity: 1; text-anchor: middle; pointer-events: none;"></text>
                                            </g>
                                            <g class="c3-chart-arc c3-target c3-target-Desktop">
                                                <g class=" c3-shapes c3-shapes-Desktop c3-arcs c3-arcs-Desktop">
                                                    <path class=" c3-shape c3-shape c3-arc c3-arc-Desktop" transform=""
                                                          style="fill: rgb(246, 45, 81); cursor: pointer; opacity: 1;"
                                                          d="M-49.88803251889861,-95.05370435387205A107.35,107.35 0 0,1 -1.150658284380787e-13,-107.35L-8.290956525091185e-14,-77.35A77.35,77.35 0 0,0 -35.94633735758554,-68.49002358427576Z"></path>
                                                </g>
                                                <text dy=".35em" class=""
                                                      transform="translate(-20.552429249015532,-83.38448328054933)"
                                                      style="opacity: 1; text-anchor: middle; pointer-events: none;"></text>
                                            </g>
                                            <g class="c3-chart-arc c3-target c3-target-Tablet">
                                                <g class=" c3-shapes c3-shapes-Tablet c3-arcs c3-arcs-Tablet">
                                                    <path class=" c3-shape c3-shape c3-arc c3-arc-Tablet" transform=""
                                                          style="fill: rgb(103, 114, 229); cursor: pointer; opacity: 1;"
                                                          d="M71.18621736214938,80.35262881616767A107.35,107.35 0 0,1 -100.37399365227927,38.066834624016224L-72.32350637171682,27.428688012740146A77.35,77.35 0 0,0 51.29253761492552,57.897306371034645Z"></path>
                                                </g>
                                                <text dy=".35em" class=""
                                                      transform="translate(-20.552429249015436,83.38448328054935)"
                                                      style="opacity: 1; text-anchor: middle; pointer-events: none;"></text>
                                            </g>
                                            <g class="c3-chart-arc c3-target c3-target-Mobile">
                                                <g class=" c3-shapes c3-shapes-Mobile c3-arcs c3-arcs-Mobile">
                                                    <path class=" c3-shape c3-shape c3-arc c3-arc-Mobile" transform=""
                                                          style="fill: rgb(0, 158, 251); cursor: pointer; opacity: 1;"
                                                          d="M6.573291694423418e-15,-107.35A107.35,107.35 0 0,1 71.18621736214938,80.35262881616767L51.29253761492552,57.897306371034645A77.35,77.35 0 0,0 4.7363214957023885e-15,-77.35Z"></path>
                                                </g>
                                                <text dy=".35em" class=""
                                                      transform="translate(80.29919492182341,-30.45346769921297)"
                                                      style="opacity: 1; text-anchor: middle; pointer-events: none;"></text>
                                            </g>
                                        </g>
                                        <g class="c3-chart-texts">
                                            <g class="c3-chart-text c3-target c3-target-Other"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-texts c3-texts-Other"></g>
                                            </g>
                                            <g class="c3-chart-text c3-target c3-target-Desktop"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-texts c3-texts-Desktop"></g>
                                            </g>
                                            <g class="c3-chart-text c3-target c3-target-Tablet"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-texts c3-texts-Tablet"></g>
                                            </g>
                                            <g class="c3-chart-text c3-target c3-target-Mobile"
                                               style="opacity: 1; pointer-events: none;">
                                                <g class=" c3-texts c3-texts-Mobile"></g>
                                            </g>
                                        </g>
                                    </g>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip-grid)"
                                       class="c3-grid c3-grid-lines">
                                        <g class="c3-xgrid-lines"></g>
                                        <g class="c3-ygrid-lines"></g>
                                    </g>
                                    <g class="c3-axis c3-axis-x"
                                       clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip-xaxis)"
                                       transform="translate(0,236)" style="visibility: visible; opacity: 0;">
                                        <text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="580"
                                              dx="-0.5em"
                                              dy="-0.5em"></text>
                                        <g class="tick" transform="translate(290, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">0</tspan>
                                            </text>
                                        </g>
                                        <path class="domain" d="M0,6V0H580V6"></path>
                                    </g>
                                    <g class="c3-axis c3-axis-y"
                                       clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip-yaxis)"
                                       transform="translate(0,0)" style="visibility: visible; opacity: 0;">
                                        <text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;"
                                              x="0" dx="-0.5em"
                                              dy="1.2em"></text>
                                        <g class="tick" transform="translate(0,217)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">10</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,192)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">15</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,168)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">20</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,143)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">25</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,119)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">30</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,95)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">35</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,70)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">40</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,46)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">45</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,21)" style="opacity: 1;">
                                            <line x2="-6"></line>
                                            <text x="-9" y="0" style="text-anchor: end;">
                                                <tspan x="-9" dy="3">50</tspan>
                                            </text>
                                        </g>
                                        <path class="domain" d="M-6,1H0V236H-6"></path>
                                    </g>
                                    <g class="c3-axis c3-axis-y2" transform="translate(580,0)"
                                       style="visibility: hidden; opacity: 0;">
                                        <text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;"
                                              x="0" dx="-0.5em"
                                              dy="-0.5em"></text>
                                        <g class="tick" transform="translate(0,236)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,213)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.1</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,189)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.2</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,166)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.3</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,142)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.4</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,119)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.5</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,95)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.6</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,72)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.7</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,48)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.8</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,25)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">0.9</tspan>
                                            </text>
                                        </g>
                                        <g class="tick" transform="translate(0,1)" style="opacity: 1;">
                                            <line x2="6" y2="0"></line>
                                            <text x="9" y="0" style="text-anchor: start;">
                                                <tspan x="9" dy="3">1</tspan>
                                            </text>
                                        </g>
                                        <path class="domain" d="M6,1H0V236H6"></path>
                                    </g>
                                </g>
                                <g transform="translate(0.5,260.5)" style="visibility: hidden;">
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip-subchart)"
                                       class="c3-chart">
                                        <g class="c3-chart-bars"></g>
                                        <g class="c3-chart-lines"></g>
                                    </g>
                                    <g clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip)"
                                       class="c3-brush"
                                       style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <rect class="background" x="0" width="580"
                                              style="visibility: hidden; cursor: crosshair;"></rect>
                                        <rect class="extent" x="0" width="0" style="cursor: move;"></rect>
                                        <g class="resize e" transform="translate(0,0)"
                                           style="cursor: ew-resize; display: none;">
                                            <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                        </g>
                                        <g class="resize w" transform="translate(0,0)"
                                           style="cursor: ew-resize; display: none;">
                                            <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                        </g>
                                    </g>
                                    <g class="c3-axis-x" transform="translate(0,0)"
                                       clip-path="url(https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#c3-1597806936400-clip-xaxis)"
                                       style="visibility: hidden; opacity: 0;">
                                        <g class="tick" transform="translate(290, 0)" style="opacity: 1;">
                                            <line y2="6" x1="0" x2="0"></line>
                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                <tspan x="0" dy=".71em" dx="0">0</tspan>
                                            </text>
                                        </g>
                                        <path class="domain" d="M0,6V0H580V6"></path>
                                    </g>
                                </g>
                                <g transform="translate(0,240)">
                                    <g class="c3-legend-item c3-legend-item-Other"
                                       style="visibility: hidden; cursor: pointer;">
                                        <text x="14" y="9" style="pointer-events: none;">Other</text>
                                        <rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0"
                                              style="fill-opacity: 0;"></rect>
                                        <line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10"
                                              style="stroke: rgb(236, 239, 241); pointer-events: none;"></line>
                                    </g>
                                    <g class="c3-legend-item c3-legend-item-Desktop"
                                       style="visibility: hidden; cursor: pointer;">
                                        <text x="14" y="9" style="pointer-events: none;">Desktop</text>
                                        <rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0"
                                              style="fill-opacity: 0;"></rect>
                                        <line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10"
                                              style="stroke: rgb(246, 45, 81); pointer-events: none;"></line>
                                    </g>
                                    <g class="c3-legend-item c3-legend-item-Tablet"
                                       style="visibility: hidden; cursor: pointer;">
                                        <text x="14" y="9" style="pointer-events: none;">Tablet</text>
                                        <rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0"
                                              style="fill-opacity: 0;"></rect>
                                        <line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10"
                                              style="stroke: rgb(103, 114, 229); pointer-events: none;"></line>
                                    </g>
                                    <g class="c3-legend-item c3-legend-item-Mobile"
                                       style="visibility: hidden; cursor: pointer;">
                                        <text x="14" y="9" style="pointer-events: none;">Mobile</text>
                                        <rect class="c3-legend-item-event" x="0" y="-5" width="0" height="0"
                                              style="fill-opacity: 0;"></rect>
                                        <line class="c3-legend-item-tile" x1="-2" y1="4" x2="8" y2="4" stroke-width="10"
                                              style="stroke: rgb(0, 158, 251); pointer-events: none;"></line>
                                    </g>
                                </g>
                                <text class="c3-title" x="290" y="0"></text>
                            </svg>
                            <div class="c3-tooltip-container"
                                 style="position: absolute; pointer-events: none; display: none; top: 41.5px; left: 265.5px;">
                                <table class="c3-tooltip">
                                    <tbody>
                                    <tr class="c3-tooltip-name--Desktop">
                                        <td class="name"><span style="background-color:#f62d51"></span>Desktop</td>
                                        <td class="value">7.7%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="list-inline m-t-30 text-center font-12">
                            <li><i class="fa fa-circle text-primary"></i> Tablet</li>
                            <li><i class="fa fa-circle text-danger"></i> Desktops</li>
                            <li><i class="fa fa-circle text-info"></i> Mobile</li>
                        </ul>
                    </div>
                </div>
                <!-- card -->
                <div class="card">
                    <div class="p-20 p-t-25">
                        <h4 class="card-title">Reports</h4>
                    </div>
                    <div class="d-flex no-block p-15 align-items-center">
                        <div class="round round-info"><i class="icon-wallet font-16"></i></div>
                        <div class="m-l-10 ">
                            <h3 class="m-b-0">$18090</h3>
                            <h6 class="text-muted font-light m-b-0">Your last year total Income</h6></div>
                    </div>
                    <hr>
                    <div class="d-flex no-block p-15 align-items-center">
                        <div class="round round-primary"><i class="icon-umbrella font-16"></i></div>
                        <div class="m-l-10">
                            <h3 class="m-b-0">18%</h3>
                            <h6 class="text-muted font-light m-b-0">Your site bounce rate</h6></div>
                    </div>
                    <hr>
                    <div class="d-flex no-block p-15 m-b-15 align-items-center">
                        <div class="round round-danger"><i class="icon-chart font-16"></i></div>
                        <div class="m-l-10">
                            <h3 class="m-b-0">21090</h3>
                            <h6 class="text-muted font-light m-b-0">Your last year site visits</h6></div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Yearly Sales -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card oh">
                        <div class="card-body">
                            <div class="d-flex m-b-30 align-items-center no-block">
                                <h5 class="card-title ">Yearly Sales</h5>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12">
                                        <li><i class="fa fa-circle text-info"></i> Iphone</li>
                                        <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="morris-area-chart"
                                 style="height: 350px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <svg height="350" version="1.1" width="1195.33" xmlns="http://www.w3.org/2000/svg"
                                     style="overflow: hidden; position: relative;">
                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël
                                        2.2.0
                                    </desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                    <text x="32.859375" y="311" text-anchor="end" font-family="sans-serif"
                                          font-size="12px" stroke="none"
                                          fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                                    </text>
                                    <path fill="none" stroke="#f6f6f6" d="M45.359375,311H1170.33" stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.859375" y="239.5" text-anchor="end" font-family="sans-serif"
                                          font-size="12px"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan>
                                    </text>
                                    <path fill="none" stroke="#f6f6f6" d="M45.359375,239.5H1170.33" stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.859375" y="168" text-anchor="end" font-family="sans-serif"
                                          font-size="12px" stroke="none"
                                          fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan>
                                    </text>
                                    <path fill="none" stroke="#f6f6f6" d="M45.359375,168H1170.33" stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.859375" y="96.5" text-anchor="end" font-family="sans-serif"
                                          font-size="12px" stroke="none"
                                          fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">225</tspan>
                                    </text>
                                    <path fill="none" stroke="#f6f6f6" d="M45.359375,96.5H1170.33" stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="32.859375" y="25" text-anchor="end" font-family="sans-serif"
                                          font-size="12px" stroke="none"
                                          fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan>
                                    </text>
                                    <path fill="none" stroke="#f6f6f6" d="M45.359375,25H1170.33" stroke-width="0.5"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <text x="1170.33" y="323.5" text-anchor="middle" font-family="sans-serif"
                                          font-size="12px"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016
                                        </tspan>
                                    </text>
                                    <text x="982.9204709607484" y="323.5" text-anchor="middle" font-family="sans-serif"
                                          font-size="12px"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015
                                        </tspan>
                                    </text>
                                    <text x="795.510941921497" y="323.5" text-anchor="middle" font-family="sans-serif"
                                          font-size="12px"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014
                                        </tspan>
                                    </text>
                                    <text x="608.1014128822455" y="323.5" text-anchor="middle" font-family="sans-serif"
                                          font-size="12px"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013
                                        </tspan>
                                    </text>
                                    <text x="420.1784330785029" y="323.5" text-anchor="middle" font-family="sans-serif"
                                          font-size="12px"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012
                                        </tspan>
                                    </text>
                                    <text x="232.76890403925145" y="323.5" text-anchor="middle" font-family="sans-serif"
                                          font-size="12px"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011
                                        </tspan>
                                    </text>
                                    <text x="45.359375" y="323.5" text-anchor="middle" font-family="sans-serif"
                                          font-size="12px"
                                          stroke="none" fill="#888888"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                          font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010
                                        </tspan>
                                    </text>
                                    <path fill="#39aff5" stroke="none"
                                          d="M45.359375,311C92.21175725981286,280.01666666666665,185.9165217794386,196.6,232.76890403925145,187.06666666666666C279.6212862990643,177.53333333333333,373.32605081869,227.5931144550844,420.1784330785029,234.73333333333335C467.1591780294386,241.89311445508437,561.1206679313099,256.1996352029184,608.1014128822455,244.26666666666665C654.9537951420584,232.36630186958504,748.6585596616841,143.57083333333333,795.510941921497,139.4C842.3633241813098,135.22916666666669,936.0680887009355,219.24166666666665,982.9204709607484,210.89999999999998C1029.7728532205613,202.5583333333333,1123.477617740187,107.225,1170.33,72.66666666666666L1170.33,311L45.359375,311Z"
                                          fill-opacity="0"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></path>
                                    <path fill="none" stroke="#009efb"
                                          d="M45.359375,311C92.21175725981286,280.01666666666665,185.9165217794386,196.6,232.76890403925145,187.06666666666666C279.6212862990643,177.53333333333333,373.32605081869,227.5931144550844,420.1784330785029,234.73333333333335C467.1591780294386,241.89311445508437,561.1206679313099,256.1996352029184,608.1014128822455,244.26666666666665C654.9537951420584,232.36630186958504,748.6585596616841,143.57083333333333,795.510941921497,139.4C842.3633241813098,135.22916666666669,936.0680887009355,219.24166666666665,982.9204709607484,210.89999999999998C1029.7728532205613,202.5583333333333,1123.477617740187,107.225,1170.33,72.66666666666666"
                                          stroke-width="1"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <circle cx="45.359375" cy="311" r="0" fill="#009efb" stroke="#f62d51"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="232.76890403925145" cy="187.06666666666666" r="0" fill="#009efb"
                                            stroke="#f62d51"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="420.1784330785029" cy="234.73333333333335" r="0" fill="#009efb"
                                            stroke="#f62d51"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="608.1014128822455" cy="244.26666666666665" r="0" fill="#009efb"
                                            stroke="#f62d51"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="795.510941921497" cy="139.4" r="0" fill="#009efb" stroke="#f62d51"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="982.9204709607484" cy="210.89999999999998" r="0" fill="#009efb"
                                            stroke="#f62d51"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="1170.33" cy="72.66666666666666" r="0" fill="#009efb" stroke="#f62d51"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <path fill="#aca1f0" stroke="none"
                                          d="M45.359375,311C92.21175725981286,287.1666666666667,185.9165217794386,222.81666666666666,232.76890403925145,215.66666666666666C279.6212862990643,208.51666666666665,373.32605081869,265.70036479708165,420.1784330785029,253.8C467.1591780294386,241.8670314637483,561.1206679313099,131.07300501595986,608.1014128822455,120.33333333333331C654.9537951420584,109.62300501595985,748.6585596616841,156.08333333333334,795.510941921497,168C842.3633241813098,179.91666666666666,936.0680887009355,215.66666666666666,982.9204709607484,215.66666666666666C1029.7728532205613,215.66666666666666,1123.477617740187,179.91666666666666,1170.33,168L1170.33,311L45.359375,311Z"
                                          fill-opacity="0"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></path>
                                    <path fill="none" stroke="#7460ee"
                                          d="M45.359375,311C92.21175725981286,287.1666666666667,185.9165217794386,222.81666666666666,232.76890403925145,215.66666666666666C279.6212862990643,208.51666666666665,373.32605081869,265.70036479708165,420.1784330785029,253.8C467.1591780294386,241.8670314637483,561.1206679313099,131.07300501595986,608.1014128822455,120.33333333333331C654.9537951420584,109.62300501595985,748.6585596616841,156.08333333333334,795.510941921497,168C842.3633241813098,179.91666666666666,936.0680887009355,215.66666666666666,982.9204709607484,215.66666666666666C1029.7728532205613,215.66666666666666,1123.477617740187,179.91666666666666,1170.33,168"
                                          stroke-width="1"
                                          style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                    <circle cx="45.359375" cy="311" r="0" fill="#7460ee" stroke="#7460ee"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="232.76890403925145" cy="215.66666666666666" r="0" fill="#7460ee"
                                            stroke="#7460ee"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="420.1784330785029" cy="253.8" r="0" fill="#7460ee" stroke="#7460ee"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="608.1014128822455" cy="120.33333333333331" r="0" fill="#7460ee"
                                            stroke="#7460ee"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="795.510941921497" cy="168" r="0" fill="#7460ee" stroke="#7460ee"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="982.9204709607484" cy="215.66666666666666" r="0" fill="#7460ee"
                                            stroke="#7460ee"
                                            stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                    <circle cx="1170.33" cy="168" r="0" fill="#7460ee" stroke="#7460ee" stroke-width="1"
                                            style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                </svg>
                                <div class="morris-hover morris-default-style"
                                     style="left: 2.85938px; top: 208px; display: none;">
                                    <div class="morris-hover-row-label">2010</div>
                                    <div class="morris-hover-point" style="color: #009efb">
                                        iPhone:
                                        0
                                    </div>
                                    <div class="morris-hover-point" style="color: #7460ee">
                                        iPad:
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row text-center m-b-20">
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">6000</h2><span class="text-muted">Total sale</span>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">4000</h2><span class="text-muted">Iphone</span>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h2 class="m-b-0 font-light">2000</h2><span class="text-muted">Ipad</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Schedule</h5>
                            <h6 class="card-subtitle">check out your daily schedule</h6>
                            <div class="steamline m-t-40">
                                <div class="sl-item">
                                    <div class="sl-left bg-success"><i class="ti-user"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                        <div class="desc">you can write anything</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Send documents to Clark</div>
                                        <div class="desc">Lorem Ipsum is simply</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"><img class="img-circle" alt="user"
                                                              src="js/1.jpg"></div>
                                    <div class="sl-right">
                                        <div class="font-medium">John Doe <span class="sl-date"> 5pm</span></div>
                                        <div class="desc">Call today with gohn doe</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"><img class="img-circle" alt="user"
                                                              src="js/2.jpg"></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Go to the Doctor <span
                                                    class="sl-date">5 minutes ago</span></div>
                                        <div class="desc">Contrary to popular belief</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"><img class="img-circle" alt="user"
                                                              src="js/3.jpg"></div>
                                    <div class="sl-right">
                                        <div>
                                            <a href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/#">Tiger
                                                Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                                        <div class="desc">Approve meeting with tiger
                                            <br><a href="javascript:void(0)"
                                                   class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a>
                                            <a
                                                    href="javascript:void(0)"
                                                    class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- News -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- column -->
                    <div class="card news-slide"
                         style="background:url(../assets/images/background/img5.jpg) center center / cover;">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <span class="label label-danger label-rounded">News</span>
                                        <h3 class="m-t-5 font-light">Market Stock exchange status</h3>
                                        <p class="op-5">It has survived not only five centuries, but also the leap into
                                            electronic
                                            typesetting</p>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 m-t-10">
                                                <h4 class="m-b-0 text-success"><i class="ti-arrow-up"></i>350</h4><span
                                                        class="text-muted">Reliance</span>
                                            </div>
                                            <div class="col-lg-4 col-md-4 m-t-10">
                                                <h4 class="m-b-0 text-danger"><i class="ti-arrow-down"></i>-150</h4>
                                                <span class="text-muted">Birla</span>
                                            </div>
                                            <div class="col-lg-4 col-md-4 m-t-10">
                                                <h4 class="m-b-0 text-success"><i class="ti-arrow-up"></i>650</h4><span
                                                        class="text-muted">Tata</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <span class="label label-danger label-rounded">Personal</span>
                                        <h4 class="m-t-10">It has survived not only five centuries, but also the leap
                                            into electronic
                                            typesetting, remaining essentially unchanged.</h4>
                                        <a href="javascript:void(0)" class="btn btn-success btn-sm btn-rounded">Read
                                            More</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <span class="label label-info label-rounded">Design</span>
                                        <h4 class="m-t-10">It has survived not only five centuries, but also the leap
                                            into electronic
                                            typesetting, remaining essentially unchanged.</h4>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-rounded">comming...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-success">Product A Revenue</h5>
                                    <div class="stats-row m-t-20 m-b-20">
                                        <div class="stat-item">
                                            <h6>Growth</h6> <b>80.40%</b></div>
                                        <div class="stat-item">
                                            <h6>Montly</h6> <b>20.40%</b></div>
                                        <div class="stat-item">
                                            <h6>Daily</h6> <b>5.40%</b></div>
                                    </div>
                                </div>
                                <div id="sales1">
                                    <canvas width="450" height="75"
                                            style="display: inline-block; width: 450.75px; height: 75px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-info">Product B Revenue</h5>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="m-t-20 m-b-20">
                                                <h6>Yearly</h6>
                                                <b>80.40%</b>
                                            </div>
                                            <div class="m-t-20 m-b-20">
                                                <h6>Montly</h6>
                                                <b>5.40%</b>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <div id="sales2">
                                                <canvas width="76" height="130"
                                                        style="display: inline-block; width: 76px; height: 130px; vertical-align: top;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                    <!-- column -->
                </div>
                <!-- column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h5 class="card-title">Sales Overview</h5>
                                    <h6 class="card-subtitle">Check the monthly sales </h6>
                                </div>
                                <div class="ml-auto">
                                    <select class="custom-select b-0">
                                        <option>January</option>
                                        <option value="1">February</option>
                                        <option value="2" selected="">March</option>
                                        <option value="3">April</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-6">
                                    <h3>March 2017</h3>
                                    <h5 class="font-light m-t-0">Report for this month</h5></div>
                                <div class="col-6 align-self-center display-6 text-right">
                                    <h2 class="text-success">$3,690</h2></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>NAME</th>
                                    <th>STATUS</th>
                                    <th>DATE</th>
                                    <th>PRICE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td><span class="badge badge-success badge-pill">sale</span></td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="txt-oflo">Real Homes WP Theme</td>
                                    <td><span class="badge badge-info badge-pill">extended</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td><span class="badge badge-info badge-pill">extended</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="txt-oflo">Medical Pro WP Theme</td>
                                    <td><span class="badge badge-danger badge-pill">tax</span></td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="text-danger">-$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="txt-oflo">Hosting press html</td>
                                    <td><span class="badge badge-success badge-pill">sale</span></td>
                                    <td class="txt-oflo">April 21, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="txt-oflo">Digital Agency PSD</td>
                                    <td><span class="badge badge-success badge-pill">sale</span></td>
                                    <td class="txt-oflo">April 23, 2017</td>
                                    <td><span class="text-danger">-$14</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="txt-oflo">Helping Hands WP Theme</td>
                                    <td><span class="badge badge-warning badge-pill">member</span></td>
                                    <td class="txt-oflo">April 22, 2017</td>
                                    <td><span class="text-success">$64</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td class="txt-oflo">Helping Hands WP Theme</td>
                                    <td><span class="badge badge-warning badge-pill">member</span></td>
                                    <td class="txt-oflo">April 22, 2017</td>
                                    <td><span class="text-success">$64</span></td>
                                </tr>
                                <tr>
                                    <td class="text-center">9</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td><span class="badge badge-info badge-pill">extended</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- To do chat and message -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h5 class="card-title m-b-0">Task list</h5>
                                </div>
                                <div class="ml-auto">
                                    <button class="float-right btn btn-circle btn-success" data-toggle="modal"
                                            data-target="#myModal"><i
                                                class="ti-plus"></i></button>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- To do list widgets -->
                            <!-- ============================================================== -->
                            <div class="to-do-widget m-t-20">
                                <!-- .modal for add task -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Task</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Task name</label>
                                                        <input type="text" class="form-control"
                                                               placeholder="Enter Task Name"></div>
                                                    <div class="form-group">
                                                        <label>Assign to</label>
                                                        <select class="custom-select form-control float-right">
                                                            <option selected="">Sachin</option>
                                                            <option value="1">Sehwag</option>
                                                            <option value="2">Pritam</option>
                                                            <option value="3">Alia</option>
                                                            <option value="4">Varun</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-success" data-dismiss="modal">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">
                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span>
                                                <span class="badge badge-pill badge-danger float-right">Today</span>
                                            </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="js/1.jpg" alt="user" data-toggle="tooltip"
                                                     data-placement="top" title="" data-original-title="Steave"></li>
                                            <li><img src="js/2.jpg" alt="user" data-toggle="tooltip"
                                                     data-placement="top" title="" data-original-title="Jessica"></li>
                                            <li><img src="js/3.jpg" alt="user" data-toggle="tooltip"
                                                     data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li><img src="js/4.jpg" alt="user" data-toggle="tooltip"
                                                     data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">
                                                <span>Lorem Ipsum is simply dummy text of the printing</span><span
                                                        class="badge badge-pill badge-primary float-right">1 week </span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">
                                                <span>Give Purchase report to</span> <span
                                                        class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="js/3.jpg" alt="user" data-toggle="tooltip"
                                                     data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li><img src="js/4.jpg" alt="user" data-toggle="tooltip"
                                                     data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">
                                                <span>Lorem Ipsum is simply dummy text of the printing </span> <span
                                                        class="badge badge-pill badge-warning float-right">2 weeks</span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">
                                                <span>Give Purchase report to</span> <span
                                                        class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="js/3.jpg" alt="user" data-toggle="tooltip"
                                                     data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li><img src="js/4.jpg" alt="user" data-toggle="tooltip"
                                                     data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Messages (5 New)</h5>
                            <div class="message-box">
                                <div class="message-widget message-scroll">
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><img src="js/1.jpg" alt="user"
                                                                   class="img-circle"> <span
                                                    class="profile-status online float-right"></span></div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span>
                                            <span class="time">9:30 AM</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><img src="js/2.jpg" alt="user"
                                                                   class="img-circle"> <span
                                                    class="profile-status busy float-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span
                                                    class="mail-desc">I've sung a song! See you at</span> <span
                                                    class="time">9:10 AM</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><span class="round">A</span> <span
                                                    class="profile-status away float-right"></span></div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span>
                                            <span class="time">9:08 AM</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><img src="js/4.jpg" alt="user"
                                                                   class="img-circle"> <span
                                                    class="profile-status offline float-right"></span></div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><img src="js/1.jpg" alt="user"
                                                                   class="img-circle"> <span
                                                    class="profile-status online float-right"></span></div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span
                                                    class="mail-desc">Welcome to the Elite Admin</span> <span
                                                    class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"><img src="js/2.jpg" alt="user"
                                                                   class="img-circle"> <span
                                                    class="profile-status busy float-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span
                                                    class="mail-desc">I've sung a song! See you at</span> <span
                                                    class="time">9:10 AM</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Chat</h5>
                            <div class="chat-box">
                                <!--chat Row -->
                                <ul class="chat-list">
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="js/1.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h5>James Anderson</h5>
                                            <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the
                                                printing &amp; type setting
                                                industry.
                                            </div>
                                        </div>
                                        <div class="chat-time">10:56 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="js/2.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h5>Bianca Doe</h5>
                                            <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="chat-time">10:57 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">I would love to join the team.</div>
                                            <br>
                                        </div>
                                        <div class="chat-time">10:58 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="js/3.jpg" alt="user"></div>
                                        <div class="chat-content">
                                            <h5>Angelina Rhodes</h5>
                                            <div class="box bg-light-info">Well we have good budget for the project
                                            </div>
                                        </div>
                                        <div class="chat-time">11:00 am</div>
                                    </li>
                                    <!--chat Row -->
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-8">
                                    <textarea placeholder="Type your message here"
                                              class="form-control border-0"></textarea>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="button" class="btn btn-info btn-circle btn-lg"><i
                                                class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar ps-container ps-theme-default" data-ps-id="b6ebefa8-f1c7-8bd0-def1-28e4694464e6">
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
                                <a href="javascript:void(0)"><img src="images/1.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Varun Dhavan <small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="images/2.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Genelia Deshmukh <small
                                                class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="images/3.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Ritesh Deshmukh <small
                                                class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="images/4.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Arijit Sinh <small
                                                class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="images/5.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Govinda Star <small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="images/6.jpg" alt="user-img"
                                                                  class="img-circle"> <span>John Abraham<small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="images/7.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Hritik Roshan<small
                                                class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="images/8.jpg" alt="user-img"
                                                                  class="img-circle"> <span>Pwandeep rajan <small
                                                class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                    <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                    <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
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
        © 2019 Elegent Admin by wrappixel.com
    </footer>
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
        <h2 class="jq-toast-heading">Welcome to Elegent Admin</h2>Use the predefined ones, or specify a custom position
        object.
    </div>
</div>
<!-- JavaScripts -->
@yield('before-scripts')
{{ Html::script(mix('js/backend.js')) }}
{{ Html::script(mix('js/backend-custom.js')) }}
@yield('after-scripts')
</body>
</html>