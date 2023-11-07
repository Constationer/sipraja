@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Tata Cara Pengaduan</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


    <div class="container-xxl pt-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">Apa Itu Restorative Justice?</h1>
                    <p class="pb-3 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged</p>
                    <a href="{{ route('pengajuan.index') }}"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Ajukan Sekarang</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
