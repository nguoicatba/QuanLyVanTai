<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Quản lý vận tải</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href={{ asset("vendor/font-awesome/css/font-awesome.css") }}>
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href={{ asset("vendor/simple-line-icons/css/simple-line-icons.css") }}>
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href={{ asset("vendor/animate.css/animate.css") }}>
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href={{ asset("vendor/whirl/dist/whirl.css") }}>
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- Datatables-->
    <link rel="stylesheet" href={{ asset("vendor/datatables.net-bs4/css/dataTables.bootstrap4.css") }}>
    <link rel="stylesheet" href={{ asset("vendor/datatables.net-keytable-bs/css/keyTable.bootstrap.css") }}>
    <link rel="stylesheet" href={{ asset("vendor/datatables.net-responsive-bs/css/responsive.bootstrap.css") }}>
    <!-- SELECT2-->
    <link rel="stylesheet" href={{asset("vendor/select2/dist/css/select2.css")}} />
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href={{ asset("vendor/weather-icons/css/weather-icons.css") }}>
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href={{ asset("css/bootstrap.css") }} id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href={{ asset("css/app.css") }} id="maincss">
</head>

<body class="layout-h">
    <div class="fluid">
        <!-- top navbar-->
        <header class="topnavbar-wrapper">
            <!-- START Top Navbar-->
            @include('components.topnavbar')
            <!-- END Top Navbar-->
        </header>
        <!-- offsidebar-->
        <aside class="offsidebar d-none">
            <!-- START Off Sidebar (right)-->
            <nav>
                <div role="tabpanel">
                    <!-- Nav tabs-->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="#app-settings" aria-controls="app-settings" role="tab"
                                data-toggle="tab">
                                <em class="icon-equalizer fa-lg"></em>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                                <em class="icon-user fa-lg"></em>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="app-settings" role="tabpanel">
                            <h3 class="text-center text-thin mt-4">Settings</h3>
                            <div class="p-2">
                                <h4 class="text-muted text-thin">Themes</h4>
                                <div class="row row-flush mb-2">
                                    <div class="col mb-2">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-a.css">
                                                <input type="radio" name="setting-theme" checked="checked">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                    <span class="color bg-info"></span>
                                                    <span class="color bg-info-light"></span>
                                                </span>
                                                <span class="color bg-white"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-b.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                    <span class="color bg-green"></span>
                                                    <span class="color bg-green-light"></span>
                                                </span>
                                                <span class="color bg-white"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-c.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                    <span class="color bg-purple"></span>
                                                    <span class="color bg-purple-light"></span>
                                                </span>
                                                <span class="color bg-white"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-d.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                    <span class="color bg-danger"></span>
                                                    <span class="color bg-danger-light"></span>
                                                </span>
                                                <span class="color bg-white"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-flush mb-2">
                                    <div class="col mb-2">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-e.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                    <span class="color bg-info-dark"></span>
                                                    <span class="color bg-info"></span>
                                                </span>
                                                <span class="color bg-gray-dark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-f.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                    <span class="color bg-green-dark"></span>
                                                    <span class="color bg-green"></span>
                                                </span>
                                                <span class="color bg-gray-dark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-g.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                    <span class="color bg-purple-dark"></span>
                                                    <span class="color bg-purple"></span>
                                                </span>
                                                <span class="color bg-gray-dark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-2">
                                        <div class="setting-color">
                                            <label data-load-css="css/theme-h.css">
                                                <input type="radio" name="setting-theme">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                    <span class="color bg-danger-dark"></span>
                                                    <span class="color bg-danger"></span>
                                                </span>
                                                <span class="color bg-gray-dark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <h4 class="text-muted text-thin">Layout</h4>
                                <div class="clearfix">
                                    <p class="float-left">Fixed</p>
                                    <div class="float-right">
                                        <label class="switch">
                                            <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Boxed</p>
                                    <div class="float-right">
                                        <label class="switch">
                                            <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">RTL</p>
                                    <div class="float-right">
                                        <label class="switch">
                                            <input id="chk-rtl" type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <h4 class="text-muted text-thin">Aside</h4>
                                <div class="clearfix">
                                    <p class="float-left">Collapsed</p>
                                    <div class="float-right">
                                        <label class="switch">
                                            <input id="chk-collapsed" type="checkbox"
                                                data-toggle-state="aside-collapsed">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Collapsed Text</p>
                                    <div class="float-right">
                                        <label class="switch">
                                            <input id="chk-collapsed-text" type="checkbox"
                                                data-toggle-state="aside-collapsed-text">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Float</p>
                                    <div class="float-right">
                                        <label class="switch">
                                            <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Hover</p>
                                    <div class="float-right">
                                        <label class="switch">
                                            <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <p class="float-left">Show Scrollbar</p>
                                    <div class="float-right">
                                        <label class="switch">
                                            <input id="chk-scroll" type="checkbox" data-toggle-state="show-scrollbar"
                                                data-target=".sidebar">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="app-chat" role="tabpanel">
                            <h3 class="text-center text-thin mt-4">Connections</h3>
                            <div class="list-group">
                                <!-- START list title-->
                                <div class="list-group-item border-0">
                                    <small class="text-muted">ONLINE</small>
                                </div>
                                <!-- END list title-->
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/05.jpg"
                                            alt="Image">
                                        <div class="media-body text-truncate">
                                            <a href="#">
                                                <strong>Juan Sims</strong>
                                            </a>
                                            <br>
                                            <small class="text-muted">Designeer</small>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="circle bg-success circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/06.jpg"
                                            alt="Image">
                                        <div class="media-body text-truncate">
                                            <a href="#">
                                                <strong>Maureen Jenkins</strong>
                                            </a>
                                            <br>
                                            <small class="text-muted">Designeer</small>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="circle bg-success circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/07.jpg"
                                            alt="Image">
                                        <div class="media-body text-truncate">
                                            <a href="#">
                                                <strong>Billie Dunn</strong>
                                            </a>
                                            <br>
                                            <small class="text-muted">Designeer</small>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="circle bg-danger circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/08.jpg"
                                            alt="Image">
                                        <div class="media-body text-truncate">
                                            <a href="#">
                                                <strong>Tomothy Roberts</strong>
                                            </a>
                                            <br>
                                            <small class="text-muted">Designeer</small>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="circle bg-warning circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- START list title-->
                                <div class="list-group-item border-0">
                                    <small class="text-muted">OFFLINE</small>
                                </div>
                                <!-- END list title-->
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/09.jpg"
                                            alt="Image">
                                        <div class="media-body text-truncate">
                                            <a href="#">
                                                <strong>Lawrence Robinson</strong>
                                            </a>
                                            <br>
                                            <small class="text-muted">Designeer</small>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="circle bg-warning circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action border-0">
                                    <div class="media">
                                        <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/10.jpg"
                                            alt="Image">
                                        <div class="media-body text-truncate">
                                            <a href="#">
                                                <strong>Tyrone Owens</strong>
                                            </a>
                                            <br>
                                            <small class="text-muted">Designeer</small>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="circle bg-warning circle-lg"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-4 text-center">
                                <!-- Optional link to list more users-->
                                <a class="btn btn-purple btn-sm" href="#" title="See more contacts">
                                    <strong>Load more..</strong>
                                </a>
                            </div>
                            <!-- Extra items-->
                            <div class="px-3 py-2">
                                <p>
                                    <small class="text-muted">Tasks completion</small>
                                </p>
                                <div class="progress progress-xs m-0">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 py-2">
                                <p>
                                    <small class="text-muted">Upload quota</small>
                                </p>
                                <div class="progress progress-xs m-0">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- END Off Sidebar (right)-->
        </aside>
        <!-- Main section-->
        <section class="section-container">
            <!-- Page content-->
            <div class="content-wrapper">
                <!-- Page content-->
                @yield('content')
            </div>
        </section>

        <!-- Page footer-->
        <!-- <footer>
            <span>&copy; 2018 - Angle</span>
        </footer> -->
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="{{ asset('vendor/modernizr/modernizr.custom.js') }}"></script>
    <!-- JQUERY-->
    <script src="{{ asset('vendor/jquery/dist/jquery.js') }}"></script>
    <!-- BOOTSTRAP-->
    <script src="{{ asset('vendor/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
    <!-- STORAGE API-->
    <script src="{{ asset('vendor/js-storage/js.storage.js') }}"></script>
    <!-- JQUERY EASING-->
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.js') }}"></script>
    <!-- ANIMO-->
    <script src="{{ asset('vendor/animo/animo.js') }}"></script>
    <!-- SCREENFULL-->
    <script src="{{ asset('vendor/screenfull/dist/screenfull.js') }}"></script>
    <!-- LOCALIZE-->
    <script src="{{ asset('vendor/jquery-localize/dist/jquery.localize.js') }}"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- Datatables-->
    <script src={{ asset('vendor/datatables.net/js/jquery.dataTables.js') }}></script>
    <script src={{ asset("vendor/datatables.net-bs4/js/dataTables.bootstrap4.js") }}></script>
    <script src={{ asset("vendor/datatables.net-buttons/js/dataTables.buttons.js") }}></script>
    <script src={{ asset("vendor/datatables.net-buttons-bs/js/buttons.bootstrap.js") }}></script>
    <script src={{ asset("vendor/datatables.net-buttons/js/buttons.colVis.js") }}></script>
    <script src={{ asset("vendor/datatables.net-buttons/js/buttons.flash.js") }}></script>
    <script src={{ asset("vendor/datatables.net-buttons/js/buttons.html5.js") }}></script>
    <script src={{ asset("vendor/datatables.net-buttons/js/buttons.print.js") }}></script>
    <script src={{ asset("vendor/datatables.net-keytable/js/dataTables.keyTable.js") }}></script>
    <script src={{ asset("vendor/datatables.net-responsive/js/dataTables.responsive.js") }}></script>
    <script src={{ asset("vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js") }}></script>
    <!-- SELECT2-->
    <script src={{ asset("vendor/select2/dist/js/select2.full.js")}}></script>
    <!-- SPARKLINE-->
    <script src="{{ asset('vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- FLOT CHART-->
    <script src="{{ asset('vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('vendor/jquery.flot.spline/jquery.flot.spline.js') }}"></script>
    <!-- EASY PIE CHART-->
    <script src="{{ asset('vendor/easy-pie-chart/dist/jquery.easypiechart.js') }}"></script>
    <!-- MOMENT JS-->
    <script src="{{ asset('vendor/moment/min/moment-with-locales.js') }}"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>

</html>