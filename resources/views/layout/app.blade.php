<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KNN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{url('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{url('css/calendar/fullcalendar.print.min.css')}}">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/editor/select2.css')}}">
    <link rel="stylesheet" href="{{url('css/editor/datetimepicker.css')}}">
    <link rel="stylesheet" href="{{url('css/editor/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{url('css/editor/x-editor-style.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{url('css/data-table/bootstrap-editable.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{route('knn')}}"><img class="main-logo" src="{{url('img/logo/logo.png')}}" alt=""/></a>
            <strong><a href="{{route('knn')}}"><img src="{{url('img/logo/logosn.png')}}" alt=""/></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="{{route('knn')}}">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span class="mini-click-non">KNN</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{route('tambah_knn')}}"><span
                                            class="mini-sub-pro">Tambah Data</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="{{route('knn')}}"><img class="main-logo" src="img/logo/logo.png" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="{{route('knn')}}" class="nav-link">KNN</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="{{route('knn')}}">KNN <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="{{route('tambah_knn')}}">Tambah Data</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
{{--            <div class="container-fluid">--}}
            <div class="row">
                <br>
            </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
{{--                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>--}}
{{--                                        </li>--}}
{{--                                        <li><span class="bread-blod">Dashboard V.1</span>--}}
{{--                                        </li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--            </div>--}}
        </div>
    </div>
    <div class="breadcome-area">
        @yield('content')
    </div>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018. All rights reserved. Template by <a
                                    href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jquery
		============================================ -->
<script src="{{url('js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{url('js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{url('js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{url('js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{url('js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{url('js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{url('js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{url('js/jquery.scrollUp.min.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{url('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="{{url('js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{url('js/metisMenu/metisMenu-active.js')}}"></script>
<!-- data table JS
    ============================================ -->
<script src="{{url('js/data-table/bootstrap-table.js')}}"></script>
<script src="{{url('js/data-table/tableExport.js')}}"></script>
<script src="{{url('js/data-table/data-table-active.js')}}"></script>
<script src="{{url('js/data-table/bootstrap-table-editable.js')}}"></script>
<script src="{{url('js/data-table/bootstrap-editable.js')}}"></script>
<script src="{{url('js/data-table/bootstrap-table-resizable.js')}}"></script>
<script src="{{url('js/data-table/colResizable-1.5.source.js')}}"></script>
<script src="{{url('js/data-table/bootstrap-table-export.js')}}"></script>
<!--  editable JS
    ============================================ -->
<script src="{{url('js/editable/jquery.mockjax.js')}}"></script>
<script src="{{url('js/editable/mock-active.js')}}"></script>
<script src="{{url('js/editable/select2.js')}}"></script>
<script src="{{url('js/editable/moment.min.js')}}"></script>
<script src="{{url('js/editable/bootstrap-datetimepicker.js')}}"></script>
<script src="{{url('js/editable/bootstrap-editable.js')}}"></script>
<script src="{{url('js/editable/xediable-active.js')}}"></script>
<!-- Chart JS
    ============================================ -->
<script src="{{url('js/chart/jquery.peity.min.js')}}"></script>
<script src="{{url('js/peity/peity-active.js')}}"></script>
<!-- tab JS
    ============================================ -->
<script src="{{url('js/tab.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{url('js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{url('js/main.js')}}"></script>
<!-- tawk chat JS
    ============================================ -->
{{--<script src="{{url('js/tawk-chat.js')}}"></script>--}}
</body>

</html>
