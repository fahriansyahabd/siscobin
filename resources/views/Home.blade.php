    
    @include('include.heder')
    @include('include.sidebar')
        <!-- End Sidebar -->
        
        <div class="wrapper">
            <!-- Sidebar -->
            <div class="sidebar" data-background-color="dark">
                <div class="sidebar-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img
                                src="assets/img/kaiadmin/logo_light.svg"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="20"
                            />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <ul class="nav nav-secondary">
                            <li class="nav-item active">
                                <a
                                    data-bs-toggle="collapse"
                                    href="#dashboard"
                                    class="collapsed"
                                    aria-expanded="false"
                                >
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="dashboard">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="../demo1/index.html">
                                                <span class="sub-item"
                                                    >Dashboard 1</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Components</h4>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#base">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Base</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="base">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="components/avatars.html">
                                                <span class="sub-item"
                                                    >Avatars</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components/buttons.html">
                                                <span class="sub-item"
                                                    >Buttons</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="components/gridsystem.html"
                                            >
                                                <span class="sub-item"
                                                    >Grid System</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components/panels.html">
                                                <span class="sub-item"
                                                    >Panels</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="components/notifications.html"
                                            >
                                                <span class="sub-item"
                                                    >Notifications</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="components/sweetalert.html"
                                            >
                                                <span class="sub-item"
                                                    >Sweet Alert</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="components/font-awesome-icons.html"
                                            >
                                                <span class="sub-item"
                                                    >Font Awesome Icons</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="components/simple-line-icons.html"
                                            >
                                                <span class="sub-item"
                                                    >Simple Line Icons</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="components/typography.html"
                                            >
                                                <span class="sub-item"
                                                    >Typography</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a
                                    data-bs-toggle="collapse"
                                    href="#sidebarLayouts"
                                >
                                    <i class="fas fa-th-list"></i>
                                    <p>Sidebar Layouts</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="sidebarLayouts">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="sidebar-style-2.html">
                                                <span class="sub-item"
                                                    >Sidebar Style 2</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icon-menu.html">
                                                <span class="sub-item"
                                                    >Icon Menu</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#forms">
                                    <i class="fas fa-pen-square"></i>
                                    <p>Forms</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="forms">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="forms/forms.html">
                                                <span class="sub-item"
                                                    >Basic Form</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#tables">
                                    <i class="fas fa-table"></i>
                                    <p>Tables</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="tables">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="tables/tables.html">
                                                <span class="sub-item"
                                                    >Basic Table</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables/datatables.html">
                                                <span class="sub-item"
                                                    >Datatables</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#maps">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Maps</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="maps">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="maps/googlemaps.html">
                                                <span class="sub-item"
                                                    >Google Maps</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a href="maps/jsvectormap.html">
                                                <span class="sub-item"
                                                    >Jsvectormap</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#charts">
                                    <i class="far fa-chart-bar"></i>
                                    <p>Charts</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="charts">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="charts/charts.html">
                                                <span class="sub-item"
                                                    >Chart Js</span
                                                >
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts/sparkline.html">
                                                <span class="sub-item"
                                                    >Sparkline</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="widgets.html">
                                    <i class="fas fa-desktop"></i>
                                    <p>Widgets</p>
                                    <span class="badge badge-success">4</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../documentation/index.html">
                                    <i class="fas fa-file"></i>
                                    <p>Documentation</p>
                                    <span class="badge badge-secondary">1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="#submenu">
                                    <i class="fas fa-bars"></i>
                                    <p>Menu Levels</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="submenu">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a
                                                data-bs-toggle="collapse"
                                                href="#subnav1"
                                            >
                                                <span class="sub-item"
                                                    >Level 1</span
                                                >
                                                <span class="caret"></span>
                                            </a>
                                            <div class="collapse" id="subnav1">
                                                <ul
                                                    class="nav nav-collapse subnav"
                                                >
                                                    <li>
                                                        <a href="#">
                                                            <span
                                                                class="sub-item"
                                                                >Level 2</span
                                                            >
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span
                                                                class="sub-item"
                                                                >Level 2</span
                                                            >
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a
                                                data-bs-toggle="collapse"
                                                href="#subnav2"
                                            >
                                                <span class="sub-item"
                                                    >Level 1</span
                                                >
                                                <span class="caret"></span>
                                            </a>
                                            <div class="collapse" id="subnav2">
                                                <ul
                                                    class="nav nav-collapse subnav"
                                                >
                                                    <li>
                                                        <a href="#">
                                                            <span
                                                                class="sub-item"
                                                                >Level 2</span
                                                            >
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item"
                                                    >Level 1</span
                                                >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->

            <div class="main-panel">
                <div class="main-header">
                    <div class="main-header-logo">
                        <!-- Logo Header -->
                        <div class="logo-header" data-background-color="dark">
                            <a href="index.html" class="logo">
                                <img
                                    src="assets/img/kaiadmin/logo_light.svg"
                                    alt="navbar brand"
                                    class="navbar-brand"
                                    height="20"
                                />
                            </a>
                            <div class="nav-toggle">
                                <button class="btn btn-toggle toggle-sidebar">
                                    <i class="gg-menu-right"></i>
                                </button>
                                <button class="btn btn-toggle sidenav-toggler">
                                    <i class="gg-menu-left"></i>
                                </button>
                            </div>
                            <button class="topbar-toggler more">
                                <i class="gg-more-vertical-alt"></i>
                            </button>
                        </div>
                        <!-- End Logo Header -->
                    </div>
                    <!-- Navbar Header -->
                    <nav
                        class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
                    >
                        <div class="container-fluid">
                            <nav
                                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
                            >
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button
                                            type="submit"
                                            class="btn btn-search pe-1"
                                        >
                                            <i
                                                class="fa fa-search search-icon"
                                            ></i>
                                        </button>
                                    </div>
                                    <input
                                        type="text"
                                        placeholder="Search ..."
                                        class="form-control"
                                    />
                                </div>
                            </nav>

                            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                                <li class="nav-item topbar-icon dropdown hidden-caret">
                                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell"></i>
                                        <span class="notification">4</span>
                                    </a>
                                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                        <li>
                                            <div class="dropdown-title">
                                                You have 4 new notification
                                            </div>
                                        </li>
                                        <li>
                                            <div class="notif-scroll scrollbar-outer">
                                                <div class="notif-center">
                                                    <a href="#">
                                                        <div class="notif-icon notif-primary">
                                                            <i class="fa fa-user-plus"></i>
                                                        </div>
                                                        <div
                                                            class="notif-content"
                                                        >
                                                            <span class="block">
                                                                New user
                                                                registered
                                                            </span>
                                                            <span class="time"
                                                                >5 minutes
                                                                ago</span
                                                            >
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div
                                                            class="notif-icon notif-success"
                                                        >
                                                            <i
                                                                class="fa fa-comment"
                                                            ></i>
                                                        </div>
                                                        <div
                                                            class="notif-content"
                                                        >
                                                            <span class="block">
                                                                Rahmad commented
                                                                on Admin
                                                            </span>
                                                            <span class="time"
                                                                >12 minutes
                                                                ago</span
                                                            >
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-img">
                                                            <img
                                                                src="assets/img/profile2.jpg"
                                                                alt="Img Profile"
                                                            />
                                                        </div>
                                                        <div
                                                            class="notif-content"
                                                        >
                                                            <span class="block">
                                                                Reza send
                                                                messages to you
                                                            </span>
                                                            <span class="time"
                                                                >12 minutes
                                                                ago</span
                                                            >
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div
                                                            class="notif-icon notif-danger"
                                                        >
                                                            <i
                                                                class="fa fa-heart"
                                                            ></i>
                                                        </div>
                                                        <div
                                                            class="notif-content"
                                                        >
                                                            <span class="block">
                                                                Farrah liked
                                                                Admin
                                                            </span>
                                                            <span class="time"
                                                                >17 minutes
                                                                ago</span
                                                            >
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a
                                                class="see-all"
                                                href="javascript:void(0);"
                                                >See all notifications<i
                                                    class="fa fa-angle-right"
                                                ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li
                                    class="nav-item topbar-user dropdown hidden-caret"
                                >
                                    <a
                                        class="dropdown-toggle profile-pic"
                                        data-bs-toggle="dropdown"
                                        href="#"
                                        aria-expanded="false"
                                    >
                                        <div class="avatar-sm">
                                            <img
                                                src="assets/img/profile.jpg"
                                                alt="..."
                                                class="avatar-img rounded-circle"
                                            />
                                        </div>
                                        <span class="profile-username">
                                            <span class="op-7">Hi,</span>
                                            <span class="fw-bold">Hizrian</span>
                                        </span>
                                    </a>
                                    <ul
                                        class="dropdown-menu dropdown-user animated fadeIn"
                                    >
                                        <div
                                            class="dropdown-user-scroll scrollbar-outer"
                                        >
                                            <li>
                                                <div class="user-box">
                                                    <div class="avatar-lg">
                                                        <img
                                                            src="assets/img/profile.jpg"
                                                            alt="image profile"
                                                            class="avatar-img rounded"
                                                        />
                                                    </div>
                                                    <div class="u-text">
                                                        <h4>Hizrian</h4>
                                                        <p class="text-muted">
                                                            hello@example.com
                                                        </p>
                                                        <a
                                                            href="profile.html"
                                                            class="btn btn-xs btn-secondary btn-sm"
                                                            >View Profile</a
                                                        >
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div
                                                    class="dropdown-divider"
                                                ></div>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >My Profile</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >My Balance</a
                                                >
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Inbox</a
                                                >
                                                <div
                                                    class="dropdown-divider"
                                                ></div>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Account Setting</a
                                                >
                                                <div
                                                    class="dropdown-divider"
                                                ></div>
                                                <a
                                                    class="dropdown-item"
                                                    href="#"
                                                    >Logout</a
                                                >
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>

                <div class="container">
                    <div class="page-inner">
                        <div
                            class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
                        >
                            <div>
                                <h3 class="fw-bold mb-3">Dashboard</h3>
                                <h6 class="op-7 mb-2">
                                    Free Bootstrap 5 Admin Dashboard
                                </h6>
                            </div>
                            <div class="ms-md-auto py-2 py-md-0">
                                <a
                                    href="#"
                                    class="btn btn-label-info btn-round me-2"
                                    >Manage</a
                                >
                                <a href="#" class="btn btn-primary btn-round"
                                    >Add Customer</a
                                >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div
                                                    class="icon-big text-center icon-primary bubble-shadow-small"
                                                >
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-stats ms-3 ms-sm-0"
                                            >
                                                <div class="numbers">
                                                    <p class="card-category">
                                                        Visitors
                                                    </p>
                                                    <h4 class="card-title">
                                                        1,294
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div
                                                    class="icon-big text-center icon-info bubble-shadow-small"
                                                >
                                                    <i
                                                        class="fas fa-user-check"
                                                    ></i>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-stats ms-3 ms-sm-0"
                                            >
                                                <div class="numbers">
                                                    <p class="card-category">
                                                        Subscribers
                                                    </p>
                                                    <h4 class="card-title">
                                                        1303
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div
                                                    class="icon-big text-center icon-success bubble-shadow-small"
                                                >
                                                    <i
                                                        class="fas fa-luggage-cart"
                                                    ></i>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-stats ms-3 ms-sm-0"
                                            >
                                                <div class="numbers">
                                                    <p class="card-category">
                                                        Sales
                                                    </p>
                                                    <h4 class="card-title">
                                                        $ 1,345
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div
                                                    class="icon-big text-center icon-secondary bubble-shadow-small"
                                                >
                                                    <i
                                                        class="far fa-check-circle"
                                                    ></i>
                                                </div>
                                            </div>
                                            <div
                                                class="col col-stats ms-3 ms-sm-0"
                                            >
                                                <div class="numbers">
                                                    <p class="card-category">
                                                        Order
                                                    </p>
                                                    <h4 class="card-title">
                                                        576
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                {{-- footer --}}
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <nav class="pull-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="http://www.themekita.com"
                                    >
                                        ThemeKita
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Help </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Licenses </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright">
                            2024, made with
                            <i class="fa fa-heart heart text-danger"></i> by
                            <a href="http://www.themekita.com">ThemeKita</a>
                        </div>
                        <div>
                            Distributed by
                            <a target="_blank" href="https://themewagon.com/"
                                >ThemeWagon</a
                            >.
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        end
@include('include.footer')