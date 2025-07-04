<nav class="navbar topnavbar navbar-expand-lg navbar-light">
    <!-- START navbar header-->
    <div class="navbar-header">
        <a class="navbar-brand" href="#/">
            <div class="brand-logo">
                <img class="img-fluid" src={{ asset("img/logo.png") }} alt="App Logo">
            </div>
            <div class="brand-logo-collapsed">
                <img class="img-fluid" src={{ asset("img/logo-single.png")}} alt="App Logo">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!-- END navbar header-->
    <!-- START Nav wrapper-->
    <div class="navbar-collapse collapse" id="topnavbar">
        <!-- START Left navbar-->
        <ul class="nav navbar-nav mr-auto flex-column flex-lg-row">
            <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                    href="{{ route('home.index') }}" data-toggle="dropdown">Dashboard</a>
                <div class="dropdown-menu animated fadeIn"><a class="dropdown-item" href="dashboard.html">Dashboard
                        v1</a><a class="dropdown-item" href="dashboard_v2.html">Dashboard v2</a><a class="dropdown-item"
                        href="dashboard_v3.html">Dashboard v3</a>
                </div>
            </li> -->
            <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Dashboard</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#dashboard"
                    data-toggle="dropdown">Danh mục</a>
                <div class="dropdown-menu animated fadeIn">

                    <a class="dropdown-item" href={{ route('shipper.index') }}>Shipper</a>
                    <a class="dropdown-item" href={{ route('employee.index') }}>Employee</a>
                    <a class="dropdown-item" href={{ route('position.index') }}>Position</a>
                    <a class="dropdown-item" href={{ route('itemtype.index') }}>{{ __('itemtype.title') }}</a>
                    <a class="dropdown-item" href={{ route('currency.index') }}>{{ __('currency.title') }}</a>
                    <a class="dropdown-item" href={{ route('port.index') }}>{{ __('port.list') }}</a>

                </div>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" href="widgets.html">Widgets</a>
            </li> -->
        </ul>
        <!-- END Left navbar-->
        <!-- START Right Navbar-->
        <ul class="navbar-nav flex-row">
            <!-- START lock screen-->
            <li class="nav-item">
                <a class="nav-link" href="lock.html" title="Lock screen">
                    <em class="icon-lock"></em>
                </a>
            </li>
            <!-- END lock screen-->
            <li class="nav-item dropdown dropdown-list">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
                    <em class="fa fa-language"></em>

                </a>
                <!-- START Dropdown menu-->
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item">
                        <!-- START list group-->
                        <div class="list-group">
                            <!-- list item-->
                            <div class="list-group-item list-group-item-action">
                                <a href="{{ route('lang.switch', 'en') }}">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fa fa-user text-primary"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">English</p>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- list item-->
                            <div class="list-group-item list-group-item-action">
                                <a href="{{ route('lang.switch', 'vi') }}">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fa fa-lock text-success"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Vietnamese</p>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- last list item-->
                            <!-- END list group-->
                        </div>
                    </div>
                </div>

                <!-- END Dropdown menu-->
            </li>
            <!-- Search icon-->
            <li class="nav-item">
                <a class="nav-link" href="#" data-search-open="">
                    <em class="icon-magnifier"></em>
                </a>
            </li>


            <!-- START Alert menu-->
            <li class="nav-item dropdown dropdown-list">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
                    <em class="icon-bell"></em>
                    <span class="badge badge-danger">11</span>
                </a>
                <!-- START Dropdown menu-->
                <div class="dropdown-menu dropdown-menu-right animated flipInX">
                    <div class="dropdown-item">
                        <!-- START list group-->
                        <div class="list-group">
                            <!-- list item-->
                            <div class="list-group-item list-group-item-action">
                                <div class="media">
                                    <div class="align-self-start mr-2">
                                        <em class="fa fa-twitter fa-2x text-info"></em>
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0">New followers</p>
                                        <p class="m-0 text-muted text-sm">1 new follower</p>
                                    </div>
                                </div>
                            </div>
                            <!-- list item-->
                            <div class="list-group-item list-group-item-action">
                                <div class="media">
                                    <div class="align-self-start mr-2">
                                        <em class="fa fa-envelope fa-2x text-warning"></em>
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0">New e-mails</p>
                                        <p class="m-0 text-muted text-sm">You have 10 new emails</p>
                                    </div>
                                </div>
                            </div>
                            <!-- list item-->
                            <div class="list-group-item list-group-item-action">
                                <div class="media">
                                    <div class="align-self-start mr-2">
                                        <em class="fa fa-tasks fa-2x text-success"></em>
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0">Pending Tasks</p>
                                        <p class="m-0 text-muted text-sm">11 pending task</p>
                                    </div>
                                </div>
                            </div>
                            <!-- last list item-->
                            <div class="list-group-item list-group-item-action">
                                <span class="d-flex align-items-center">
                                    <span class="text-sm">More notifications</span>
                                    <span class="badge badge-danger ml-auto">14</span>
                                </span>
                            </div>
                        </div>
                        <!-- END list group-->
                    </div>
                </div>
                <!-- END Dropdown menu-->
            </li>
            <!-- END Alert menu-->

            <li class="nav-item">
                <a class="nav-link" href={{ route('logout') }}>
                    <em class="icon-logout"></em>
                </a>
            </li>
            <!-- START Offsidebar button-->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                    <em class="icon-notebook"></em>
                </a>
            </li>
            <!-- END Offsidebar menu-->
        </ul>
        <!-- END Right Navbar-->
    </div>
    <!-- END Nav wrapper-->
    <!-- START Search form-->
    <form class="navbar-form" role="search" action="search.html">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Type and hit enter ...">
            <div class="fa fa-times navbar-form-close" data-search-dismiss=""></div>
        </div>
        <button class="d-none" type="submit">Submit</button>
    </form>
    <!-- END Search form-->
</nav>