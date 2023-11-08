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

    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start order-2 order-lg-1">
                    <h4 class="animated slideInDown">Upaya Perdamaian</h4>
                    <p class="pb-3 animated slideInDown">Dilaksanakan pada Tahap Penerimaan dan Penelitian Pelaku/Tersangka
                        dan BB</p>
                    <h4 class="animated slideInDown">Musyawarah Perdamaian</h4>
                    <p class="pb-3 animated slideInDown">Melibatkan PU sebagai mediator penal atau fasilitator,
                        pelaku/Tersangka, korban dalam hal dianggap perlu Masyarakat</p>
                    <h4 class="animated slideInDown">Persetujuan Pimpinan</h4>
                    <p class="pb-3 animated slideInDown">Dilaksanakan dengan gelar perkara kepada Kajati dan JAMPIDUM</p>
                    <h4 class="animated slideInDown">Pelaksanaan Kesepakatan Perdamaian</h4>
                    <p class="pb-3 animated slideInDown">Dilaksanakan setelah turun persetujuan pimpinan dan ditutup dengan
                        SKP 2</p>
                    <a href="{{ route('pengajuan.index') }}"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Pengajuan</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/tata-cara.jpeg' }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
