<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home - Restorative Justice</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('client/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('client/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">

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
            <nav class="navbar navbar-expand-lg navbar-light bg-primary px-4 px-lg-5 py-3 py-lg-0" id="navbar">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">SIPRAJA</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
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
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Alamat<span></span></p>
                            <p><i class="fa fa-map-marker-alt me-3"></i>Kasimbong, Masamba, North Luwu Regency,
                                South Sulawesi 92961</p>
                            <p><i class="fa fa-phone-alt me-3"></i>0811-1300-7290</p>
                            <p><i class="fa fa-envelope me-3"></i>dummy@mail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Halaman<span></span></p>
                            <a class="btn btn-link" href="{{ route('home.index') }}">Home</a>
                            <a class="btn btn-link" href="{{ route('tentang.index') }}">Tentang RJ</a>
                            <a class="btn btn-link" href="{{ route('cara-pengaduan.index') }}">Tata Cara Pengaduan</a>
                            <a class="btn btn-link" href="{{ route('galeri.index') }}">Galeri</a>
                            <a class="btn btn-link" href="{{ route('kontak.index') }}">Kontak</a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Galeri<span></span></p>
                            <div class="row g-2">
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('client/img/portfolio-1.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('client/img/portfolio-2.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('client/img/portfolio-3.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('client/img/portfolio-4.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('client/img/portfolio-5.jpg') }}"
                                        alt="Image">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ asset('client/img/portfolio-6.jpg') }}"
                                        alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Berlangganan<span></span></p>
                            <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                                velit non vulpu</p>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                    placeholder="Your Email" style="height: 48px;">
                                <button type="button"
                                    class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                        class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">SIPRAJA</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML
                                    Codex</a><br><br>
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

        <script>
            // Get a reference to the navbar element
            var navbar = document.getElementById('navbar');

            // Add a scroll event listener
            window.addEventListener('scroll', function() {
                if (window.scrollY > 0) {
                    // If the user has scrolled down, remove the 'bg-primary' class to remove the background color
                    navbar.classList.remove('bg-primary');
                } else {
                    // If the user has scrolled back to the top, add the 'bg-primary' class to restore the background color
                    navbar.classList.add('bg-primary');
                }
            });
        </script>

        @stack('custom')


</body>

</html>
