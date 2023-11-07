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
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">APA ITU RESTORATIVE JUSTICE?</h1>
                    <p class="pb-3 animated slideInDown">Restorative justice adalah alternatif penyelesaian perkara tindak
                        pidana yang dalam mekanisme tata cara peradilan pidana, berfokus pada pemidanaan yang diubah menjadi
                        proses dialog dan mediasi yang melibatkan pelaku, korban, keluarga pelaku/korban, dan pihak lain
                        yang terkait.
                    </p>
                    <p class="pb-3 animated slideInDown">
                        Hal ini bertujuan untuk bersama-sama menciptakan kesepakatan atas penyelesaian perkara pidana yang
                        adil dan seimbang bagi pihak korban maupun pelaku dengan mengedepankan pemulihan kembali pada
                        keadaan semula dan mengembalikan pola hubungan baik dalam masyarakat.
                    </p>
                    <a href="#section-1"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/img-1.jpg' }}" alt=""
                        style="max-height:327px">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-1">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/tentang-3.jpg' }}" alt="">
                </div>
                <div class="col-lg-6 text-lg-start">
                    <h1 class="mb-4 animated slideInDown">DASAR HUKUM</h1>
                    <p class="pb-3 animated slideInDown">
                        • PASAL 139 KUHAP<br>
                        • UU NO. 11 TAHUN 2021 TENTANG PERUBAHAN ATAS UU NO. 16 TAHUN 2004 TENTANG KEJAKSAAN REPUBLIK
                        INDONESIA<br>
                        • PERJA NO. 15 TAHUN 2020 TENTANG PENGHENTIAN PENUNTUTAN BERDASARKAN KEADILAN RESTORATIF<br>
                        • SURAT EDARAN NO. 01/E/EJP/02/2022 TENTANG PELAKSANAAN PENGHENTIAN PENUNTUTAN BERDASARKAN KEADILAN
                        RESTORATIF<br>
                        • PERJA NO. 1 TAHUN 2022 TENTANG PERUBAHAN KETIGA ATAS PERATURAN JAKSA AGUNG NO.
                        PER-006/A/JA/07/2017 TENTANG ORGANISASI DAN TATA KERJA KEJAKSAAN REPUBLIK INDONESIA
                    </p>
                    <a href="#section-2"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-2">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">TUJUAN RESTORATIVE JUSTICE</h1>
                    <p class="pb-3 animated slideInDown">Penghentian penuntutan berdasarkan keadilan restorative dilakukan
                        untuk memenuhi rasa keadilan masyarakat dengan menyeimbangkan antara kepastian hukum
                        (<i>rechtmatigheid</i>) dan kemanfaatan (<i>doelmatigheid</i>) dalam pelaksanaan kewenangan
                        penuntutan berdasarkan
                        hukum dan hati nurani. </p>
                    <a href="#section-3"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/tujuan.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-3">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/syarat.png' }}" alt="">
                </div>
                <div class="col-lg-6 text-lg-start">
                    <h1 class="mb-4 animated slideInDown">SYARAT RESTORATIVE JUSTICE
                    </h1>
                    <h3 class="mb-4 animated slideInDown">
                        (PASAL 5 ayat (1) perja no. 15/2020)
                    </h3>
                    <p class="pb-3 animated slideInDown">
                        • TERSANGKA BARU PERTAMA KALI MELAKUKAN TINDAK PIDANA<br>
                        • TINDAK PIDANA HANYA DIANCAM DENGAN PIDANA DENDA ATAU DIANCAM PIDANA PENJARA TIDAK LEBIH DARI 5
                        (LIMA) TAHUN; DAN<br>
                        • TINDAK PIDANA DILAKUKAN DENGAN NILAI BARANG BUKTI ATAU NILAI KERUGIAN YANG DITIMBULKAN AKIBAT DARI
                        TINDAK PIDANA TIDAK LEBIH DARI Rp. 2.500.000,00 (DUA JUTA LIMA RATUS RIBU RUPIAH).
                    </p>
                    <a href="#section-4"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-4">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">Penghindaran</h1>
                    <h3 class="mb-4 animated slideInDown">"STIGMA NEGATIF"</h3>
                    <p class="pb-3 animated slideInDown">Melalui rj, stigma negatif atau labeling “orang salah” itu
                        dihapuskan. Ia tidak akan diadili di depan umum dan diberi kesempatan untuk bertaubat. Kalau dalam
                        masa kesempatan itu diberikan, orang itu mengulangi perbuatannya, maka dia siap untuk dipenjara.<br>
                        Rj hanya diperuntukkan untuk first offender atau orang yang baru pertama kali melakukan tindak
                        pidana sehingga penuntut umum masih memaafkan.
                    </p>
                    <a href="#section-5"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/stigma.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/pihak.png' }}" alt="">
                </div>
                <div class="col-lg-6 text-lg-start">
                    <h1 class="mb-4 animated slideInDown">PIHAK YANG TERLIBAT DALAM
                        PELAKSANAAN KEADILAN RESTORATIF
                        DI TAHAP PENUNTUTAN
                    </h1>
                    <p class="pb-3 animated slideInDown">
                        Perja no. 15 tahun 2020
                        Dilakukan oleh penuntut umum selaku fasilitator melibatkan pelaku, korban, keluarga pelaku/korban,
                        dan pihak lain yang terkait (anggota/tokoh masyarakat) tanpa melibatkan lembaga penegak hukum lain,
                        tetapi mengundang penyidik dan memberikan tembusan kepada ketua pn setempat.
                    </p>
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
                        <h2 class="text-center mb-5">Ingin melakukan pengajuan?</h2>
                    </div>
                    <a href="{{ route('pengajuan.index') }}" target="_blank"
                        class="btn btn-secondary w-100 text-white py-3">Pengajuan</a>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <p class="section-title text-secondary justify-content-center">
                        <h2 class="text-center mb-5">Bagikan Kepada Orang Lain</h2>
                    </div>
                    <a href="whatsapp://send?text=Check out this link: https://example.com" target="_blank"
                        class="btn btn-success w-100 py-3">
                        Bagikan Melalui Whatsapp <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    @push('script')
        <script>
            $(document).ready(function() {
                $('a[href^="#"]').on('click', function(event) {
                    event.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').animate({
                        'scrollTop': $target.offset().top
                    }, 1000, 'swing');
                });
            });
        </script>
    @endpush
@endsection
