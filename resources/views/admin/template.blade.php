<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="admin/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Zanex – Bootstrap Admin & Dashboard Template </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/plugins.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('admin/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex align-items-center">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0);"></a>
                        <div class="responsive-logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('client/img/logo.png') }}" class="mobile-logo logo-1" alt="logo">
                                <img src="{{ asset('client/img/logo.png') }}" class="mobile-logo dark-logo-1"
                                    alt="logo">
                            </a>
                        </div>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{ asset('client/img/logo.png') }}" class="header-brand-img desktop-logo"
                                alt="logo">Admin Kejaksaan
                            <img src="{{ asset('client/img/logo.png') }}" class="header-brand-img light-logo1"
                                alt="logo">Admin Kejaksaan
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->

                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-md-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-md-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button" id="myvideo"></i>
                                            </a>
                                        </div>
                                        <!-- MESSAGE-BOX -->
                                        <div class="dropdown d-md-flex profile-1">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex px-1">
                                                <span>
                                                    <img src="{{ asset('admin/images/users/8.jpg') }}"
                                                        alt="profile-user"
                                                        class="avatar  profile-user brround cover-image">
                                                </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0">{{ auth()->user()->name }}</h5>
                                                        <small class="text-muted">Administrator</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>

                                            </div>
                                        </div>
                                        <!-- SIDE-MENU -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <aside class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="{{ asset('client/img/logo.png') }}" class="header-brand-img desktop-logo"
                                alt="logo">
                            <img src="{{ asset('client/img/logo.png') }}" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="{{ asset('client/img/logo.png') }}" class="header-brand-img light-logo"
                                alt="logo">
                            <img src="{{ asset('client/img/logo.png') }}" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('admin-dashboard.index') }}"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Data Pengajuan</h3>
                            </li>
                            @if (auth()->user()->role == 'Admin')
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-pengajuan.masuk') }}"><i
                                            class="side-menu__icon fe fe-book"></i><span
                                            class="side-menu__label">Pengajuan Masuk</span></a>
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-pengajuan.proses') }}"><i
                                            class="side-menu__icon fe fe-book"></i><span
                                            class="side-menu__label">Pengajuan Proses</span></a>
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-pengajuan.selesai') }}"><i
                                            class="side-menu__icon fe fe-book"></i><span
                                            class="side-menu__label">Pengajuan Selesai</span></a>
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-pengajuan.ditolak') }}"><i
                                            class="side-menu__icon fe fe-book"></i><span
                                            class="side-menu__label">Pengajuan Ditolak</span></a>
                                </li>
                                <li class="sub-category">
                                    <h3>Data Umum</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-desa.index') }}"><i
                                            class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Akun
                                            Desa</span></a>
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-sosialisasi.index') }}"><i
                                            class="side-menu__icon fe fe-users"></i><span
                                            class="side-menu__label">Sosialisasi</span></a>
                                </li>
                                <li class="slide">
                                </li>
                                <li class="sub-category">
                                    <h3>Pages</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-galeri.index') }}"><i
                                            class="side-menu__icon fe fe-map"></i><span
                                            class="side-menu__label">Home</span></a>
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-galeri.index') }}"><i
                                            class="side-menu__icon fe fe-map"></i><span
                                            class="side-menu__label">Tentang
                                            RJ</span></a>
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-carapengaduan.index') }}"><i
                                            class="side-menu__icon fe fe-map"></i><span class="side-menu__label">Tata
                                            Cara
                                            Pengajuan</span></a>
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-galeri.index') }}"><i
                                            class="side-menu__icon fe fe-map"></i><span
                                            class="side-menu__label">Galeri</span></a>
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-kontak.index') }}"><i
                                            class="side-menu__icon fe fe-map"></i><span
                                            class="side-menu__label">Kontak</span></a>
                                </li>
                            @else
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-pengajuan.index') }}"><i
                                            class="side-menu__icon fe fe-book"></i><span
                                            class="side-menu__label">Pengajuan</span></a>
                                </li>
                                <li class="sub-category">
                                    <h3>Data Umum</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide"
                                        href="{{ route('admin-sosialisasi.index') }}"><i
                                            class="side-menu__icon fe fe-users"></i><span
                                            class="side-menu__label">Jadwal Sosialisasi</span></a>
                                </li>
                            @endif
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </aside>
            </div>
            <!--/APP-SIDEBAR-->

            @yield('content')


            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © <span id="year">2023</span> <a href="javascript:void(0);">SIPRAJA</a>.
                            Designed
                            with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);">
                                Brainwaves Digital
                            </a> All rights reserved
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->
        </div>

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JQUERY JS -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('admin/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- SPARKLINE JS-->
        <script src="{{ asset('admin/js/jquery.sparkline.min.js') }}"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="{{ asset('admin/js/circle-progress.min.js') }}"></script>

        <!-- CHARTJS CHART JS-->
        <script src="{{ asset('admin/plugins/chart/Chart.bundle.js') }}"></script>
        <script src="{{ asset('admin/plugins/chart/utils.js') }}"></script>

        <!-- PIETY CHART JS-->
        <script src="{{ asset('admin/plugins/peitychart/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/peitychart/peitychart.init.js') }}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>

        <!-- INTERNAL Data tables js-->
        <script src="{{ asset('admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/dataTables.responsive.min.js') }}"></script>

        <!-- ECHART JS-->
        <script src="{{ asset('admin/plugins/echarts/echarts.js') }}"></script>

        <!-- SIDE-MENU JS-->
        <script src="{{ asset('admin/plugins/sidemenu/sidemenu.js') }}"></script>

        <!-- Sticky js -->
        <script src="{{ asset('admin/js/sticky.js') }}"></script>

        <!-- SIDEBAR JS -->
        <script src="{{ asset('admin/plugins/sidebar/sidebar.js') }}"></script>

        @stack('css')
        @stack('script')

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{ asset('admin/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('admin/plugins/p-scroll/pscroll.js') }}"></script>
        <script src="{{ asset('admin/plugins/p-scroll/pscroll-1.js') }}"></script>

        <!-- APEXCHART JS -->
        <script src="{{ asset('admin/js/apexcharts.js') }}"></script>

        <!-- INDEX JS -->
        <script src="{{ asset('admin/js/index1.js') }}"></script>

        <!-- Color Theme js -->
        <script src="{{ asset('admin/js/themeColors.js') }}"></script>

        <!-- swither styles js -->
        <script src="{{ asset('admin/js/swither-styles.js') }}"></script>

        <!-- CUSTOM JS -->
        <script src="{{ asset('admin/js/custom.js') }}"></script>

</body>

</html>
