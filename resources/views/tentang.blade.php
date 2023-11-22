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
                    <h1 class="mb-4 animated slideInDown">LATAR BELAKANG RESTORATIVE JUSTICE</h1>
                    <p class=" animated slideInDown" id="content">
                        Penyelesaian perkara tindak pidana dengan mengedepankan keadilan restoratif / Restorative Justice
                        yang menekankan pemulihan kembali pada keadaan semula dan keseimbangan perlindungan dan kepentingan
                        korban dan pelaku tindak pidana yang tidak berorientasi pada pembalasan merupakan suatu kebutuhan
                        hukum masyarakat dan sebuah mekanisme yang harus dibangun dalam pelaksanaan kewenangan penuntutan
                        dan pembaharuan sistem peradilan pidana
                    </p>

                    <p class=" animated slideInDown" id="extraContent" style="display: none;">
                        Jaksa Agung bertugas dan berwenang mengefektifkan proses penegakan hukum yang diberikan oleh
                        Undang-Undang dengan memperhatikan asas peradilan cepat, sederhana, dan biaya ringan, serta
                        menetapkan dan merumuskan kebijakan penanganan perkara untuk keberhasilan penuntutan yang
                        dilaksanakan secara independen demi keadilan berdasarkan hukum dan hati nurani, termasuk penuntutan
                        dengan menggunakan pendekatan keadilan restoratif yang dilaksanakan sesuai dengan ketentuan
                        peraturan perundang-undangan.
                    </p>
                    <p>
                        <a id="readMoreButton" onclick="toggleReadMore()" class="pb-5">Read More</a>
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
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/2.jpg' }}" alt="">
                </div>
                <div class="col-lg-6 text-lg-start">
                    <h1 class="mb-4 animated slideInDown">DASAR HUKUM RESTORATIVE JUSTICE</h1>
                    <p class="animated slideInDown" id="content2">
                        Penghentian penuntutan berdasarkan keadilan restoratif dilakukan untuk memenuhi rasa keadilan
                        masyarakat dengan menyeimbangkan antara kepastian hukum (rechtmatigheid) dan kemanfaatan
                        (doelmatigheid) dalam pelaksanaan kewenangan penuntutan berdasarkan hukum dan hati nurani. Untuk
                        menyikapi dinamika perkembangan hukum dan kebutuhan hukum masyarakat dimaksud, Jaksa Agung
                        menetapkan Peraturan Kejaksaan Nomor 15 Tahun 2020 tentang Penghentian Penuntutan Berdasarkan
                        Keadilan Restoratif yang telah efektif dilaksanakan dan direspon positif oleh masyarakat
                    </p>
                    <p class="animated slideInDown" id="extraContent2" style="display: none;">Restorative Justice atau
                        Keadilan Restoratif adalah penyelesaian
                        perkara tindak pidana dengan melibatkan pelaku, korban, keluarga pelaku/korban, dan pihak lain yang
                        terkait untuk bersama-sama mencari penyelesaian yang adil dengan melaksanakan <b>pemulihan kembali
                            pada
                            keadaan semula</b>, dan bukan pembalasan (<b>Pasal 1 Angka 1 Perja No. 15 Tahun 2020 tentang
                            Penghentian
                            Penuntutan Berdasarkan Keadilan Restoratif</b>)</p>

                    <p class="animated slideInDown" id="extraContent3" style="display: none;">Dalam penerapan keadilan
                        restoratif (restorative justice) oleh
                        Kejaksaan, hal yang paling utama adalah adanya upaya perdamaian dari kedua belah pihak dan
                        korban/keluarganya memberikan maaf kepada pelaku tindak pidana</p>

                    <p>
                        <a id="readMoreButton2" onclick="toggleReadMore2()" class="pb-5">Read More</a>
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
                        (<i>Rechtmatigheid</i>) dan kemanfaatan (<i>Doelmatigheid</i>) dalam pelaksanaan kewenangan
                        penuntutan berdasarkan
                        hukum dan hati nurani. </p>
                    <a href="#section-3"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/3.jpg' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-3">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/4.jpg' }}" alt="">
                </div>
                <div class="col-lg-6 text-lg-start">
                    <h1 class="mb-4 animated slideInDown">KEADILAN RESTORATIF DILAKSANAKAN DENGAN ASAS
                    </h1>
                    <p class="pb-3 animated slideInDown">
                        a. Keadilan;<br>
                        b. Kepentingan Umum;<br>
                        c. Proposionalitas;<br>
                        d. Pidana sebagai jalan terakhir; dan<br>
                        e. Cepat, sederhana, dan biaya ringan
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
                    <h1 class="mb-4 animated slideInDown">PENGHENTIAN PENUNTUTAN BERDASARKAN KEADILAN RESTORATIF DILAKUKAN
                        DENGAN MEMPERHATIKAN</h1>
                    <p class="pb-3 animated slideInDown">
                        a. Kepentingan Korban dan kepentingan hukum lain yang dilindungi;<br>
                        b. Penghindaran stigma negatif; <br>
                        c. Penghindaran pembalasan;;<br>
                        d. Respon dan keharmonisan masyarakat; dan <br>
                        e. Kepatutan, kesusilaan, dan ketertiban umum
                    </p>
                    <a href="#section-5"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/5.jpg' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/6.jpg' }}" alt="">
                </div>
                <div class="col-lg-6 text-lg-start">
                    <h1 class="mb-4 animated slideInDown">PENGHENTIAN PENUNTUTAN BERDASARKAN KEADILAN RESTORATIF DILAKUKAN
                        DENGAN MEMPERTIMBANGKAN
                    </h1>
                    <p class="pb-3 animated slideInDown">
                        a. Subjek, objek, kategori, dan ancaman tindak pidana; <br>
                        b. Latar belakang terjadinyaj dilakukannya tindak pidana; <br>
                        c. Tingkat ketercelaan;<br>
                        d. Kerugian atau akibat yang ditimbulkan dari tindak pidana;<br>
                        e. Cost and benefit penanganan perkara;<br>
                        f. Pemulihan kembali pada keadaan semula; dan<br>
                        g. Adanya perdamaian antara Korban dan Tersangka

                    </p>
                    <a href="#section-6"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-6">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">PENGHENTIAN PENUNTUTAN BERDASARKAN KEADILAN RESTORATIF DILAKUKAN
                        DENGAN MEMPERTIMBANGKAN</h1>
                    <p class="pb-3 animated slideInDown">a. subjek, objek, kategori, dan ancaman tindak pidana;<br>
                        b. latar belakang terjadinyaj dilakukannya tindak pidana;<br>
                        c. tingkat ketercelaan;<br>
                        d. kerugian atau akibat yang ditimbulkan dari tindak pidana;<br>
                        e. cost and benefit penanganan perkara;<br>
                        f. pemulihan kembali pada keadaan semula; dan<br>
                        g. adanya perdamaian antara Korban dan Tersangka
                    </p>
                    <a href="#section-7"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/7.jpg' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-7">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/8.jpg' }}" alt="">
                </div>
                <div class="col-lg-6 text-lg-start">
                    <h1 class="mb-4 animated slideInDown">SYARAT LAIN YANG HARUS DIPENUHI
                    </h1>
                    <p class="pb-3 animated slideInDown">
                        a. Telah ada pemulihan kembali pada keadaan semula yang dilakukan oleh Tersangka dengan cara:
                    <ul>
                        <li>mengembalikan barang yang diperoleh dari tindak pidana kepada Korban;
                        </li>
                        <li>mengganti kerugian Korban;
                        </li>
                        <li>mengganti biaya yang ditimbulkan dari akibat tindak pidana; dan/ atau
                        </li>
                        <li>
                            memperbaiki kerusakan yang ditimbulkan dari akibat tindak pidana
                        </li>
                    </ul>
                    b. telah ada kesepakatan perdamaian antara Korban dan Tersangka;<br>
                    c. Masyarakat merespon positif
                    </p>
                    <a href="#section-8"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="section-8">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">PENGHENTIAN PENUNTUTAN BERDASARKAN KEADILAN RESTORATIF
                        DIKECUALIKAN UNTUK PERKARA</h1>
                    <p class="pb-3 animated slideInDown">

                        a. tindak pidana terhadap keamanan negara, martabat Presiden dan Wakil Presiden, negara sahabat,
                        kepala negara sahabat serta wakilnya, ketertiban umum, dan kesusilaan;<br>
                        b. tindak pidana yang diancam dengan ancaman pidana minimal;<br>
                        c. tindak pidana narkotika;<br>
                        d. tindak pidana lingkungan hidup; dan<br>
                        e. tindak pidana yang dilakukan oleh korporasi.
                    </p>
                </div>
                <div class="col-lg-6 text-center order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/9.jpg' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <p class="section-title text-secondary justify-content-center">
                        <h2 class="text-center my-3">Ingin melakukan pengajuan?</h2>
                    </div>
                    <a href="{{ route('pengajuan.index') }}" target="_blank"
                        class="btn btn-secondary w-100 text-white py-3">Pengajuan</a>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <p class="section-title text-secondary justify-content-center">
                        <h2 class="text-center my-3">Bagikan Kepada Orang Lain</h2>
                    </div>
                    <a href="whatsapp://send?text=Check out this link: https://rumahrjkejaksaan.luwuutarakab.go.id/"
                        target="_blank" class="btn btn-success w-100 py-3">
                        Bagikan Melalui Whatsapp <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    @push('custom')
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
        <script>
            var isContentVisible = false;

            function toggleReadMore() {
                var extraContent = document.getElementById('extraContent');
                var readMoreButton = document.getElementById('readMoreButton');

                if (!isContentVisible) {
                    extraContent.style.display = 'block';
                    readMoreButton.innerHTML = 'Read Less';
                } else {
                    extraContent.style.display = 'none';
                    readMoreButton.innerHTML = 'Read More';
                }

                isContentVisible = !isContentVisible;
            }
        </script>
        <script>
            var isContentVisible = false;

            function toggleReadMore2() {
                var extraContent2 = document.getElementById('extraContent2');
                var extraContent3 = document.getElementById('extraContent3');
                var readMoreButton2 = document.getElementById('readMoreButton2');

                if (!isContentVisible) {
                    extraContent2.style.display = 'block';
                    extraContent3.style.display = 'block';
                    readMoreButton2.innerHTML = 'Read Less';
                } else {
                    extraContent2.style.display = 'none';
                    extraContent3.style.display = 'none';
                    readMoreButton2.innerHTML = 'Read More';
                }

                isContentVisible = !isContentVisible;
            }
        </script>
    @endpush
@endsection
