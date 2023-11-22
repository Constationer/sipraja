@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Alur Pengajuan</h1>
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
                <div class="col-lg-12 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/cara.jpg' }}" alt="">
                </div>
                <div class="col-lg-12 text-lg-start">
                    <h4 class="animated slideInDown">Alur Pelaksanaan Restorative Justice</h4>
                    <p class="animated slideInDown">1. Penuntut Umum menawarkan upaya perdamaian kepada Korban dan
                        Tersangka yang dilakukan tanpa tekanan, paksaan, dan intimidasi pada tahap penuntutan;</p>
                    <p class="animated slideInDown">
                        2. Untuk keperluan upaya perdamaian, Penuntut Umum melakukan pemanggilan terhadap Korban secara sah
                        dan patut dengan menyebutkan alasan pemanggilan;</p>
                    <p class="animated slideInDown">3. Jika dianggap perlu upaya perdamaian dapat melibatkan keluaga
                        Korban/Tersangka, tokoh atau
                        perwakilan masyarakat, dan pihak lain yang terkait;</p>
                    <p class="animated slideInDown">4. Penuntut Umum memberitahukan maksud dan tujuan serta hak dan
                        kewajiban Korban dan Tersangka dalam
                        upaya perdamaian, termasuk hak untuk menolak upaya perdamaian;</p>
                    <p class="animated slideInDown">5. Apabila upaya perdamaian diterima oleh Korban dan Tersangka maka
                        dilanjutkan dengan proses
                        perdamaian;</p>
                    <p class="animated slideInDown">6. Proses perdamaian dilakukan secara sukarela, dengan musyawarah untuk
                        mufakat, tanpa tekanan,
                        paksaan, dan intimidasi;</p>
                    <p class="animated slideInDown">7. Dalam proses perdamaian Penuntut Umum berperan sebagai fasilitator,
                        yang tidak mempunyai
                        kepentingan atau keterkaitan dengan perkara, Korban, maupun Tersangka, baik secara pribadi maupun
                        profesi, langsung maupun tidak langsung;</p>
                    <p class="animated slideInDown">8. Proses perdamaian dilaksanakan di kantor Kejaksaan kecuali terdapat
                        kondisi atau keadaan yang
                        tidak memungkinkan karena alasan keamanan, kesehatan, atau kondisi geografis, proses perdamaian
                        dapat dilaksanakan di kantor pemerintah atau tempat lain yang disepakati dengan surat perintah dari
                        Kepala Cabang Kejaksaan Negeri atau Kepala Kejaksaan Negeri;</p>
                    <p class="animated slideInDown">9. Proses perdamaian dan pemenuhan kewajiban dilaksanakan dalam waktu
                        paling lama 14 (empat belas)
                        hari sejak penyerahan tanggung jawab atas tersangka dan barang bukti (tahap dua);</p>
                    <p class="animated slideInDown">10. Dalam hal proses perdamaian tercapai, Korban dan Tersangka membuat
                        kesepakatan perdamaian secara
                        tertulis di hadapan Penuntut Umum, yang berupa:
                        a. sepakat berdamai disertai pemenuhan kewajiban tertentu; atau
                        b. sepakat berdamai tanpa disertai pemenuhan kewajiban tertentu;</p>
                    <p class="animated slideInDown">11. Kesepakatan perdamaian ditandatangani oleh Korban, Tersangka, dan 2
                        (dua) orang saksi dengan
                        diketahui oleh Penuntut Umum;</p>
                    <p class="animated slideInDown">12. Penuntut Umum melaporkan kepada Pimpinan dengan melampirkan berita
                        acara kesepakatan
                        perdamaian;</p>
                    <p class="animated slideInDown">13. Apabila permintaan persetujuan disetujui, maka Penuntut Umum
                        mengeluarkan Surat Ketetapan
                        Penghentian Penuntutan dalam waktu paling lama 2 (dua) hari sejak persetujuan diterima;</p>
                    <p class="animated slideInDown">14. Dalam hal Pimpinan menolak penghentian penuntutan berdasarkan
                        Keadilan Restoratif, Penuntut Umum
                        melimpahkan berkas perkara ke pengadilan
                    </p>
                    <a href="{{ route('pengajuan.index') }}"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Pengajuan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
