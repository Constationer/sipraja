@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Galeri</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Projects Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container pt-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Galeri Kami<span></span></p>
                <h1 class="text-center mb-5">Kegiatan Acara Terkini</h1>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($data as $key)
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="admin/images/media/1.jpg" alt=""
                                    style="max-height:250px">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href=""
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="admin/images/media/1.jpg" alt=""
                                    style="max-height:250px">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href=""
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="container-xxl">
        <div class="container">
            <div class="wow fadeInUp text-center first" data-wow-delay="0.1s">
                <a href="{{ route('pengajuan.index') }}"
                    class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight">Load More</a>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
