@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->

    <div class="container-xxl hero-header">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="mb-4 animated slideInDown">Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan
                    </h1>
                    <p class="pb-3 animated slideInDown">Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan
                        adalah platform yang dirancang untuk memfasilitasi proses pengajuan Restorative Justice di
                        Kejaksaan. Kami berkomitmen untuk menyediakan solusi yang efisien dan efektif untuk memenuhi
                        kebutuhan pengguna kami dalam proses pengajuan tersebut.</p>
                    <a href=""
                        class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Penjelasan</a>
                    <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight">Pengajuan</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
@endsection
