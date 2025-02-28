
            <!-- Sidebar -->
            <div class="sidebar" data-background-color="dark">
                <div class="sidebar-logo">
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
                </div>
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <ul class="nav nav-secondary">
                            <li class="nav-item active">
                                <a href="{{route('homedasbord')}}"
                                    data-bs-toggle="collapse"
                                    href="#dashboard"
                                    class="collapsed"
                                    aria-expanded="false"
                                >
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Components</h4>
                            </li>

                            <li class="nav-item">
                                <a data-bs-toggle="collapse" href="">
                                    <i class="fas fa-pen-square"></i>
                                    <p>Forms</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="forms">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="forms/forms.html">
                                                <span class="sub-item"
                                                    >Form laporan akhir</span
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-panel">
                <div class="main-header">
                    <div class="main-header-logo">
                        <!-- Logo Header -->
                        <di class="logo-header" data-background-color="dark">
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
                        </di>
                    </div>
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
                                                    href="{{route('logout')}}"
                                                    >Logout</a
                                                >
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>


            </div>
            <!-- End Sidebar -->