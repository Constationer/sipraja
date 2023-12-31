<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rumah Restorative Justice Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="kejaksaan, restorative justice, rumah restorative justice online, rj" name="keywords">
    <meta
        content="Restorative justice adalah alternatif penyelesaian perkara tindak
    pidana yang dalam mekanisme tata cara peradilan pidana, berfokus pada pemidanaan yang diubah menjadi
    proses dialog dan mediasi yang melibatkan pelaku, korban, keluarga pelaku/korban, dan pihak lain
    yang terkait."
        name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"a>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('client/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('client/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">

    <style>
        /* Custom CSS to style the circular joypad */
        .joypad-container {
            width: 320px;
            height: 320px;
            border-radius: 50%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-content: space-around;
            position: relative;
        }

        .joypad-button {
            width: 85px;
            height: 85px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            position: absolute;
        }

        /* Adjust the button position to create arrow keys effect */
        .joypad-top {
            top: 0;
            left: 100px;
        }

        .joypad-left {
            top: 100px;
            left: 0;
        }

        .joypad-center {
            top: 100px;
            left: 100px;
        }

        .joypad-right {
            top: 100px;
            left: 200px;
        }

        .joypad-bottom {
            top: 200px;
            left: 100px;
        }

        .joypad-button a {
            text-decoration: none;
            position: relative;
            z-index: 1;
            /* Place text above the button */
        }
    </style>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 sticky-top shadow-sm">
                <a href="{{ route('home.index') }}" class="navbar-brand p-0">
                    {{-- <h1 class="m-0">RumahRJ</h1> --}}
                    <img src="{{ asset('client/img/rumahrj.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home.index') }}"
                            class="nav-item nav-link {{ request()->is('home*') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('tentang.index') }}"
                            class="nav-item nav-link {{ request()->is('tentang*') ? 'active' : '' }}">Tentang RJ</a>
                        <a href="{{ route('cara-pengaduan.index') }}"
                            class="nav-item nav-link {{ request()->is('cara-pengaduan*') ? 'active' : '' }}">Tata Cara
                            Pengaduan</a>
                        <a href="{{ route('galeri.index') }}"
                            class="nav-item nav-link {{ request()->is('galeri*') ? 'active' : '' }}">Galeri</a>
                        <a href="{{ route('kontak.index') }}"
                            class="nav-item nav-link {{ request()->is('kontak*') ? 'active' : '' }}">Kontak</a>
                    </div>
                    <a href="{{ route('pengajuan.index') }}"
                        class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Pengajuan</a>
                </div>
            </nav>

            @yield('content')

            <!-- Footer Start -->
            <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-4">
                            <p class="section-title text-white h5 mb-4">Alamat<span></span></p>
                            <p><i class="fa fa-map-marker-alt me-3"></i>Kasimbong, Masamba, North Luwu Regency,
                                South Sulawesi 92961</p>
                            <p><i class="fa fa-phone-alt me-3"></i>0821-4249-3894
                            </p>
                            <p><i class="fa fa-envelope me-3"></i>kejari.masamba@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social"
                                    href="https://instagram.com/kejariluwuutara?igshid=MTZncHF5dHdoZjZk"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <p class="section-title text-white h5 mb-4">Halaman<span></span></p>
                            <a class="btn btn-link" href="{{ route('home.index') }}">Home</a>
                            <a class="btn btn-link" href="{{ route('tentang.index') }}">Tentang RJ</a>
                            <a class="btn btn-link" href="{{ route('cara-pengaduan.index') }}">Tata Cara Pengaduan</a>
                            <a class="btn btn-link" href="{{ route('galeri.index') }}">Galeri</a>
                            <a class="btn btn-link" href="{{ route('kontak.index') }}">Kontak</a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <p class="section-title text-white h5 mb-4">Total Pengunjung<span></span></p>
                            {{-- <h3 class="text-white">Today:</h3>
                            <h4 class="text-white">{{ $visitorToday }}</h4>
                            <h3 class="text-white">Total:</h3> --}}
                            <h4 class="text-white">{{ $visitor }} Pengunjung</h4>
                        </div>
                    </div>
                </div>
                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">RumahRJ</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom"
                                    href="https://www.instagram.com/brainwaves.digital/">Brainwaves Digital</a><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('client/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('client/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('client/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('client/lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('client/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('client/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('client/lib/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('client/js/main.js') }}"></script>
        @stack('custom')


</body>

</html>
