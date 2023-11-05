@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Tentang RJ</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">Apa Itu Restorative Justice?</h1>
                    <p class="pb-3 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged</p>
                    <a href=""
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt="">
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="mb-4 animated slideInDown">Bagaimana Cara Melakukan Restorative Justice?</h1>
                    <p class="pb-3 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged</p>
                    <a href=""
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">Siapa Yang Dapat Melakukan Restorative Justice?</h1>
                    <p class="pb-3 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged</p>
                    <a href=""
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl pt-3">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <p class="section-title text-secondary justify-content-center">
                        <h2 class="text-center mb-5">Judul</h2>
                    </div>
                    <a href="{{ route('pengajuan.index') }}" target="_blank"
                        class="btn btn-secondary rounded-pill w-100 text-white">Pengajuan</a>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <p class="section-title text-secondary justify-content-center">
                        <h2 class="text-center mb-5">Judul</h2>
                    </div>
                    <a href="whatsapp://send?text=Check out this link: https://example.com" target="_blank"
                        class="btn btn-success rounded-pill w-100">
                        Bagikan Melalui Whatsapp <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
