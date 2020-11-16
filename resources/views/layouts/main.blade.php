<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/morris/morris.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('stylesheets/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('stylesheets/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('stylesheets/theme-custom.css') }}" />

    <!-- Head Libs -->
    <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>

</head>

<body style="overflow-y:hidden">
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../" class="logo">
                    <img src="{{ asset('images/logo.png') }}" height="35" alt="JSOFT Admin" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">
                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ asset('images/!logged-user.jpg') }}" alt="Joseph Doe" class="img-circle"
                                data-lock-picture="{{ asset('images/!logged-user.jpg') }}" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                        class="fa fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i
                                        class="fa fa-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                    Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title" >
                        BEXZOD UNIVERSAL
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="/home">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Pages</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="{{ route('gallerys') }}">
                                                Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('works') }}">
                                                Works
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections') }}">
                                                Sections
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('datafilters') }}">
                                                Data Filter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-signup.html">
                                                Sign Up
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-signin.html">
                                                Sign In
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-recover-password.html">
                                                Recover Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen.html">
                                                Locked Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-user-profile.html">
                                                User Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="pages-media-gallery.html">
                                                Media Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-invoice.html">
                                                Invoice
                                            </a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                        <span>UI Elements</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="ui-elements-typography.html">
                                                Typography
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-icons.html">
                                                Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-tabs.html">
                                                Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-panels.html">
                                                Panels
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-widgets.html">
                                                Widgets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-portlets.html">
                                                Portlets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-buttons.html">
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-alerts.html">
                                                Alerts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-notifications.html">
                                                Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-modals.html">
                                                Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-lightbox.html">
                                                Lightbox
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-progressbars.html">
                                                Progress Bars
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-sliders.html">
                                                Sliders
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-carousels.html">
                                                Carousels
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-accordions.html">
                                                Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-nestable.html">
                                                Nestable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-tree-view.html">
                                                Tree View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-grid-system.html">
                                                Grid System
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-charts.html">
                                                Charts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-animations.html">
                                                Animations
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-extra.html">
                                                Extra
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        <span>Forms</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="forms-basic.html">
                                                Basic
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-advanced.html">
                                                Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-validation.html">
                                                Validation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-layouts.html">
                                                Layouts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-wizard.html">
                                                Wizard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms-code-editor.html">
                                                Code Editor
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-table" aria-hidden="true"></i>
                                        <span>Tables</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="tables-basic.html">
                                                Basic
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables-advanced.html">
                                                Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables-responsive.html">
                                                Responsive
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables-editable.html">
                                                Editable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables-ajax.html">
                                                Ajax
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables-pricing.html">
                                                Pricing
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Dashboard</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="/home">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Dashboard</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>


                <!-- start: page -->
                @yield('home')
                @yield("name")
                @yield('works')
                @yield("work")
                @yield('content')
                @yield('sections')
                @yield('section')
                @yield('datafilters')
                @yield('datafilter')
                @yield('gallerys')
                @yield('gallery')





                <!-- end: page -->
            </section>
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close visible-xs">
                        Collapse <i class="fa fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>


                        </div>


                    </div>
                </div>
            </div>
        </aside>
    </section>

    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}"></script>
    <script src="{{ asset('vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ asset('vendor/jquery-appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easypiechart/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendor/flot-tooltip/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('vendor/raphael/raphael.js') }}/"></script>
    <script src="{{ asset('vendor/morris/morris.js') }}/"></script>
    <script src="{{ asset('vendor/gauge/gauge.js') }}"></script>
    <script src="{{ asset('vendor/snap-svg/snap.svg.js') }}"></script>
    <script src="{{ asset('vendor/liquid-meter/liquid.meter.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/jquery.vmap.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('javascripts/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('javascripts/theme.custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('javascripts/theme.init.js') }}"></script>


    <!-- Examples -->
    <script src="{{ asset('javascripts/dashboard/examples.dashboard.js') }}"></script>
</body>

</html>
