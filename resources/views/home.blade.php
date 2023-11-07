@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-12 text-center">
                    <h1 class="mb-4 animated slideInDown text-white">Sistem Informasi <br>Rumah <i>Restorative Justice
                            Online</i>
                    </h1>
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt=""
                        style="max-width: 350px">
                    <br>
                    <a href="{{ route('pengajuan.index') }}"
                        class="btn btn-light my-3 px-sm-5 rounded-pill animated slideInRight">Pengajuan</a>
                </div>
                {{-- <div class="col-lg-6 text-center text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown text-white">Sistem Informasi Rumah <i>Restorative Justice
                            Online</i>
                    </h1>
                    <img src="https://images.squarespace-cdn.com/content/v1/5d3f241fa4e0350001fa20d5/1636491460338-AIZAXV2978MGIDQE0GT7/qr-code.png?format=2500w"
                        class="img-fluid" style="max-height:125px">
                    <a href="{{ route('pengajuan.index') }}"
                        class="btn btn-light my-3 px-sm-5 rounded-pill animated slideInRight w-100">Pengajuan</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt="">
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h1 class="text-center mb-4">Selamat Datang</h1>
                    <img src="{{ asset('client/img/logo.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-6 col-lg-offset-3 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="bg-light rounded text-center p-4">
                        <h5 class="mb-3">Sistem Informasi Rumah <i>Restorative Justice Online</i></h5>
                        <p class="m-0">Merupakan Sistem informasi yang dibangun untuk Mengoptimalisasi Peran <i>Rumah
                                Restorative Justice</i> (Rj) Berbasis Online Dalam Meningkatkan Pemahaman Dan Kesadaran
                            Hukum Masyarakat Desa Pada Wilayah Kabupaten Luwu Utara.</p>
                    </div>
                </div>
                {{-- <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

                    <h1 class="text-center mb-4">Selamat Datang</h1>
                    <img src="{{ asset('client/img/logo.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="bg-light rounded text-center p-4">
                        <h5 class="mb-3">Sistem Informasi Rumah <i>Restorative Justice Online</i></h5>
                        <p class="m-0"></i>Merupakan Sistem informasi yang dibangun untuk Mengoptimalisasi Peran <i>Rumah
                                Restorative Justice</i> (Rj) Berbasis Online Dalam Meningkatkan Pemahaman Dan Kesadaran
                            Hukum
                            Masyarakat Desa Pada Wilayah Kabupaten Luwu Utara.
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container-xxl newsletter pt-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="text-center mb-4">Navigasi Halaman</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="joypad-container">
                    <div class="joypad-button joypad-top"><a href="{{ route('home.index') }}" class="text-white"><svg
                                width="162" height="53" viewBox="0 0 162 53" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_0_1)">
                                    <path
                                        d="M4 22.5C4 10.0736 11.835 0 21.5 0L140.5 0C150.165 0 158 10.0736 158 22.5V22.5C158 34.9264 150.165 45 140.5 45H21.5C11.835 45 4 34.9264 4 22.5V22.5Z"
                                        fill="#6259CA" />
                                </g>
                                <path
                                    d="M66.33 29H63.864L63.864 16.4H66.33V21.476H69.21V16.4H71.676V29H69.21V23.78H66.33V29ZM78.7909 29H74.8669C73.6669 27.884 73.0669 26.36 73.0669 24.428C73.0669 23.456 73.1989 22.61 73.4629 21.89C73.7389 21.17 74.1709 20.474 74.7589 19.802L78.9709 19.802C79.5949 20.522 80.0209 21.224 80.2489 21.908C80.4769 22.58 80.5909 23.42 80.5909 24.428C80.5909 26.36 79.9909 27.884 78.7909 29ZM76.1449 27.11H77.5129C77.9449 26.27 78.1609 25.316 78.1609 24.248C78.1609 23.18 77.9389 22.328 77.4949 21.692L76.1449 21.692C75.7129 22.304 75.4969 23.174 75.4969 24.302C75.4969 25.418 75.7129 26.354 76.1449 27.11ZM85.8755 19.802H87.1535L87.6035 20.432C87.8555 20.204 88.0955 20.042 88.3235 19.946C88.5635 19.85 88.9175 19.802 89.3855 19.802H91.3835C91.9115 20.474 92.2715 21.146 92.4635 21.818C92.6555 22.49 92.7515 23.33 92.7515 24.338V29H90.3575V24.158C90.3575 23.054 90.1895 22.232 89.8535 21.692H88.1255C88.3895 22.208 88.5215 22.91 88.5215 23.798V29H86.1275V24.158C86.1275 23.018 85.9715 22.196 85.6595 21.692L84.2735 21.692V29H81.8795V19.802H83.7515L84.0755 20.45C84.3395 20.21 84.5855 20.042 84.8135 19.946C85.0535 19.85 85.4075 19.802 85.8755 19.802ZM98.3773 21.692H97.0273C96.8473 21.908 96.6973 22.208 96.5773 22.592C96.4693 22.976 96.4153 23.348 96.4153 23.708H98.9893C99.0133 23.348 98.9653 22.976 98.8453 22.592C98.7253 22.196 98.5693 21.896 98.3773 21.692ZM100.825 27.11V29H96.2533C95.4133 28.436 94.8193 27.74 94.4713 26.912C94.1353 26.072 93.9673 25.226 93.9673 24.374C93.9673 22.406 94.7113 20.882 96.1993 19.802H99.1153C99.9193 20.39 100.465 21.014 100.753 21.674C101.041 22.334 101.185 23 101.185 23.672C101.185 24.344 101.131 24.92 101.023 25.4H96.5413C96.5773 25.676 96.6793 25.994 96.8473 26.354C97.0273 26.702 97.2193 26.954 97.4233 27.11H100.825Z"
                                    fill="white" />
                                <defs>
                                    <filter id="filter0_d_0_1" x="0" y="0" width="162" height="53"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_0_1" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>

                        </a>
                    </div>
                    <div class="joypad-button joypad-left"><a href="{{ route('tentang.index') }}" class="text-white"><svg
                                width="45" height="154" viewBox="0 0 45 154" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="154" width="154" height="45" rx="22.5" transform="rotate(-90 0 154)"
                                    fill="#6259CA" />
                                <path
                                    d="M18.56 98.102V100.82H16.4V92.936H18.56V95.654H29V98.102H18.56ZM21.692 89.2653V90.6153C21.908 90.7953 22.208 90.9453 22.592 91.0653C22.976 91.1733 23.348 91.2273 23.708 91.2273V88.6533C23.348 88.6293 22.976 88.6773 22.592 88.7973C22.196 88.9173 21.896 89.0733 21.692 89.2653ZM27.11 86.8173H29V91.3893C28.436 92.2293 27.74 92.8233 26.912 93.1713C26.072 93.5073 25.226 93.6753 24.374 93.6753C22.406 93.6753 20.882 92.9313 19.802 91.4433V88.5273C20.39 87.7233 21.014 87.1773 21.674 86.8893C22.334 86.6013 23 86.4573 23.672 86.4573C24.344 86.4573 24.92 86.5113 25.4 86.6193V91.1013C25.676 91.0653 25.994 90.9633 26.354 90.7953C26.702 90.6153 26.954 90.4233 27.11 90.2193V86.8173ZM19.802 81.2534V79.3454C20.474 78.8174 21.146 78.4574 21.818 78.2654C22.49 78.0734 23.33 77.9774 24.338 77.9774H29V80.3714H24.158C23.018 80.3714 22.196 80.5274 21.692 80.8394V82.8554H29V85.2494H19.802V83.3774L20.45 83.0534C20.21 82.7894 20.042 82.5434 19.946 82.3154C19.85 82.0754 19.802 81.7214 19.802 81.2534ZM24.986 76.2368H21.692V77.4788H19.802V76.2368H17.3V73.8428H19.802V72.3668H21.692V73.8428H25.562C26.294 73.8428 26.81 73.7168 27.11 73.4648V72.3668H29V74.9228C28.412 75.5588 27.776 75.9428 27.092 76.0748C26.516 76.1828 25.814 76.2368 24.986 76.2368ZM24.842 66.9192V68.8452C25.154 69.0972 25.544 69.2232 26.012 69.2232C26.48 69.2232 26.846 69.0912 27.11 68.8272V66.9192H24.842ZM19.802 70.7892V66.3252C20.234 65.6052 20.732 65.1312 21.296 64.9032C21.848 64.6752 22.604 64.5612 23.564 64.5612H26.264C27.26 64.5612 28.172 64.5372 29 64.4892V66.5412L28.352 66.8652C28.784 67.3332 29 67.9932 29 68.8452V69.9792C28.328 70.9992 27.362 71.5092 26.102 71.5092C24.83 71.5092 23.828 70.9872 23.096 69.9432V68.2512C23.096 67.7832 23.24 67.3452 23.528 66.9372H22.628C22.16 66.9372 21.848 67.1412 21.692 67.5492V70.7892H19.802ZM19.802 59.0171L19.802 57.1091C20.474 56.5811 21.146 56.2211 21.818 56.0291C22.49 55.8371 23.33 55.7411 24.338 55.7411H29V58.1351H24.158C23.018 58.1351 22.196 58.2911 21.692 58.6031V60.6191H29V63.0131H19.802V61.1411L20.45 60.8171C20.21 60.5531 20.042 60.3071 19.946 60.0791C19.85 59.8391 19.802 59.4851 19.802 59.0171ZM19.802 47.2932H28.046C28.958 47.2932 29.69 47.4132 30.242 47.6532C30.794 47.8812 31.28 48.3432 31.7 49.0392V53.1432H29.828V50.0652C29.648 49.7652 29.36 49.6152 28.964 49.6152H27.902C28.274 50.0592 28.46 50.7672 28.46 51.7392V53.0532C27.296 54.0252 25.946 54.5112 24.41 54.5112C23.306 54.5112 22.406 54.3552 21.71 54.0432C21.002 53.7312 20.366 53.2752 19.802 52.6752V51.3432C19.802 50.5632 20.054 49.9452 20.558 49.4892L19.802 49.1652V47.2932ZM21.692 49.6872V51.4332C22.436 51.8652 23.294 52.0812 24.266 52.0812C25.226 52.0812 26.018 51.8952 26.642 51.5232V49.6872H21.692Z"
                                    fill="white" />
                            </svg>
                        </a></div>
                    <div class="joypad-button joypad-center"><a href="{{ route('pengajuan.index') }}"
                            class="text-white"><svg width="99" height="99" viewBox="0 0 99 99" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M99 49.5C99 76.8381 76.8381 99 49.5 99C22.1619 99 0 76.8381 0 49.5C0 22.1619 22.1619 0 49.5 0C76.8381 0 99 22.1619 99 49.5Z"
                                    fill="#6259CA" />
                                <path
                                    d="M16.294 46.56V51.06H17.896C18.556 50.52 18.886 49.728 18.886 48.684C18.886 48.24 18.796 47.82 18.616 47.424C18.448 47.028 18.244 46.74 18.004 46.56H16.294ZM13.864 57V44.4H18.742C19.558 44.76 20.2 45.312 20.668 46.056C21.148 46.8 21.388 47.67 21.388 48.666C21.388 49.65 21.142 50.562 20.65 51.402C20.158 52.242 19.432 52.836 18.472 53.184H16.294V57H13.864ZM26.4222 49.692H25.0722C24.8922 49.908 24.7422 50.208 24.6222 50.592C24.5142 50.976 24.4602 51.348 24.4602 51.708H27.0342C27.0582 51.348 27.0102 50.976 26.8902 50.592C26.7702 50.196 26.6142 49.896 26.4222 49.692ZM28.8702 55.11V57H24.2982C23.4582 56.436 22.8642 55.74 22.5162 54.912C22.1802 54.072 22.0122 53.226 22.0122 52.374C22.0122 50.406 22.7562 48.882 24.2442 47.802H27.1602C27.9642 48.39 28.5102 49.014 28.7982 49.674C29.0862 50.334 29.2302 51 29.2302 51.672C29.2302 52.344 29.1762 52.92 29.0682 53.4H24.5862C24.6222 53.676 24.7242 53.994 24.8922 54.354C25.0722 54.702 25.2642 54.954 25.4682 55.11H28.8702ZM34.4341 47.802H36.3421C36.8701 48.474 37.2301 49.146 37.4221 49.818C37.6141 50.49 37.7101 51.33 37.7101 52.338V57H35.3161V52.158C35.3161 51.018 35.1601 50.196 34.8481 49.692H32.8321V57H30.4381V47.802H32.3101L32.6341 48.45C32.8981 48.21 33.1441 48.042 33.3721 47.946C33.6121 47.85 33.9661 47.802 34.4341 47.802ZM46.158 47.802V56.046C46.158 56.958 46.038 57.69 45.798 58.242C45.57 58.794 45.108 59.28 44.412 59.7H40.308V57.828H43.386C43.686 57.648 43.836 57.36 43.836 56.964V55.902C43.392 56.274 42.684 56.46 41.712 56.46H40.398C39.426 55.296 38.94 53.946 38.94 52.41C38.94 51.306 39.096 50.406 39.408 49.71C39.72 49.002 40.176 48.366 40.776 47.802H42.108C42.888 47.802 43.506 48.054 43.962 48.558L44.286 47.802H46.158ZM43.764 49.692H42.018C41.586 50.436 41.37 51.294 41.37 52.266C41.37 53.226 41.556 54.018 41.928 54.642H43.764V49.692ZM51.9675 52.842H50.0415C49.7895 53.154 49.6635 53.544 49.6635 54.012C49.6635 54.48 49.7955 54.846 50.0595 55.11H51.9675V52.842ZM48.0975 47.802H52.5615C53.2815 48.234 53.7555 48.732 53.9835 49.296C54.2115 49.848 54.3255 50.604 54.3255 51.564V54.264C54.3255 55.26 54.3495 56.172 54.3975 57H52.3455L52.0215 56.352C51.5535 56.784 50.8935 57 50.0415 57H48.9075C47.8875 56.328 47.3775 55.362 47.3775 54.102C47.3775 52.83 47.8995 51.828 48.9435 51.096H50.6355C51.1035 51.096 51.5415 51.24 51.9495 51.528V50.628C51.9495 50.16 51.7455 49.848 51.3375 49.692H48.0975V47.802ZM55.8736 47.802H58.2316V56.082C58.2316 56.994 58.1236 57.72 57.9076 58.26C57.6916 58.8 57.2416 59.28 56.5576 59.7H54.1816V57.81H55.4236C55.7236 57.63 55.8736 57.342 55.8736 56.946V47.802ZM55.8736 44.4H58.2316V47.01H55.8736V44.4ZM62.962 57H61.072C60.544 56.328 60.184 55.656 59.992 54.984C59.8 54.312 59.704 53.472 59.704 52.464V47.802H62.098V52.644C62.098 53.736 62.314 54.558 62.746 55.11H64.42V47.802H66.814V57H64.924L64.6 56.352C64.144 56.784 63.598 57 62.962 57ZM72.6921 52.842H70.7661C70.5141 53.154 70.3881 53.544 70.3881 54.012C70.3881 54.48 70.5201 54.846 70.7841 55.11H72.6921V52.842ZM68.8221 47.802H73.2861C74.0061 48.234 74.4801 48.732 74.7081 49.296C74.9361 49.848 75.0501 50.604 75.0501 51.564V54.264C75.0501 55.26 75.0741 56.172 75.1221 57H73.0701L72.7461 56.352C72.2781 56.784 71.6181 57 70.7661 57H69.6321C68.6121 56.328 68.1021 55.362 68.1021 54.102C68.1021 52.83 68.6241 51.828 69.6681 51.096H71.3601C71.8281 51.096 72.2661 51.24 72.6741 51.528V50.628C72.6741 50.16 72.4701 49.848 72.0621 49.692H68.8221V47.802ZM80.5942 47.802H82.5022C83.0302 48.474 83.3902 49.146 83.5822 49.818C83.7742 50.49 83.8702 51.33 83.8702 52.338V57H81.4762V52.158C81.4762 51.018 81.3202 50.196 81.0082 49.692H78.9922V57H76.5982V47.802H78.4702L78.7942 48.45C79.0582 48.21 79.3042 48.042 79.5322 47.946C79.7722 47.85 80.1262 47.802 80.5942 47.802Z"
                                    fill="white" />
                            </svg>

                        </a></div>
                    <div class="joypad-button joypad-right"><a href="{{ route('cara-pengaduan.index') }}"
                            class="text-white"><svg width="45" height="154" viewBox="0 0 45 154" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.5 154C10.0736 154 0 146.165 0 136.5L0 17.5C0 7.83502 10.0736 0 22.5 0C34.9264 0 45 7.83502 45 17.5L45 136.5C45 146.165 34.9264 154 22.5 154Z"
                                    fill="#6259CA" />
                                <path
                                    d="M29.44 48.898V46.18H31.6V54.064H29.44V51.346H19V48.898H29.44ZM23.158 57.9147V55.9887C22.846 55.7367 22.456 55.6107 21.988 55.6107C21.52 55.6107 21.154 55.7427 20.89 56.0067V57.9147H23.158ZM28.198 54.0447V58.5087C27.766 59.2287 27.268 59.7027 26.704 59.9307C26.152 60.1587 25.396 60.2727 24.436 60.2727H21.736C20.74 60.2727 19.828 60.2967 19 60.3447V58.2927L19.648 57.9687C19.216 57.5007 19 56.8407 19 55.9887L19 54.8547C19.672 53.8347 20.638 53.3247 21.898 53.3247C23.17 53.3247 24.172 53.8467 24.904 54.8907V56.5827C24.904 57.0507 24.76 57.4887 24.472 57.8967H25.372C25.84 57.8967 26.152 57.6927 26.308 57.2847V54.0447H28.198ZM23.014 62.0796H26.308V60.8376H28.198V62.0796H30.7V64.4736H28.198V65.9496H26.308V64.4736H22.438C21.706 64.4736 21.19 64.5996 20.89 64.8516V65.9496H19V63.3936C19.588 62.7576 20.224 62.3736 20.908 62.2416C21.484 62.1336 22.186 62.0796 23.014 62.0796ZM23.158 71.3972L23.158 69.4712C22.846 69.2192 22.456 69.0932 21.988 69.0932C21.52 69.0932 21.154 69.2252 20.89 69.4892V71.3972H23.158ZM28.198 67.5272L28.198 71.9912C27.766 72.7112 27.268 73.1852 26.704 73.4132C26.152 73.6412 25.396 73.7552 24.436 73.7552H21.736C20.74 73.7552 19.828 73.7792 19 73.8272V71.7752L19.648 71.4512C19.216 70.9832 19 70.3232 19 69.4712V68.3372C19.672 67.3172 20.638 66.8072 21.898 66.8072C23.17 66.8072 24.172 67.3292 24.904 68.3732V70.0652C24.904 70.5332 24.76 70.9712 24.472 71.3792H25.372C25.84 71.3792 26.152 71.1752 26.308 70.7672L26.308 67.5272H28.198ZM21.088 81.7681V84.9361H19V80.3641C19.744 79.5721 20.686 78.9721 21.826 78.5641C22.966 78.1561 24.136 77.9521 25.336 77.9521C26.548 77.9521 27.712 78.1801 28.828 78.6361C29.944 79.0921 30.868 79.7701 31.6 80.6701V84.9361H29.44V81.7681C29.068 81.4441 28.468 81.1621 27.64 80.9221C26.812 80.6941 26.02 80.5801 25.264 80.5801C24.508 80.5801 23.716 80.6941 22.888 80.9221C22.06 81.1621 21.46 81.4441 21.088 81.7681ZM23.158 90.3288V88.4028C22.846 88.1508 22.456 88.0248 21.988 88.0248C21.52 88.0248 21.154 88.1568 20.89 88.4208V90.3288H23.158ZM28.198 86.4588V90.9228C27.766 91.6428 27.268 92.1168 26.704 92.3448C26.152 92.5728 25.396 92.6868 24.436 92.6868H21.736C20.74 92.6868 19.828 92.7108 19 92.7588V90.7068L19.648 90.3828C19.216 89.9148 19 89.2548 19 88.4028V87.2688C19.672 86.2488 20.638 85.7388 21.898 85.7388C23.17 85.7388 24.172 86.2608 24.904 87.3048V88.9968C24.904 89.4648 24.76 89.9028 24.472 90.3108H25.372C25.84 90.3108 26.152 90.1068 26.308 89.6988V86.4588H28.198ZM19 94.2529H28.198V95.9629L27.226 96.4129C27.874 96.8929 28.198 97.4989 28.198 98.2309V98.9329H25.786V96.6469H19L19 94.2529ZM23.158 103.952V102.026C22.846 101.774 22.456 101.648 21.988 101.648C21.52 101.648 21.154 101.78 20.89 102.044V103.952H23.158ZM28.198 100.082V104.546C27.766 105.266 27.268 105.74 26.704 105.968C26.152 106.196 25.396 106.31 24.436 106.31H21.736C20.74 106.31 19.828 106.334 19 106.382V104.33L19.648 104.006C19.216 103.538 19 102.878 19 102.026V100.892C19.672 99.8718 20.638 99.3618 21.898 99.3618C23.17 99.3618 24.172 99.8838 24.904 100.928V102.62C24.904 103.088 24.76 103.526 24.472 103.934H25.372C25.84 103.934 26.152 103.73 26.308 103.322V100.082H28.198Z"
                                    fill="white" />
                            </svg>

                        </a>
                    </div>
                    <div class="joypad-button joypad-bottom"><a href="{{ route('kontak.index') }}"
                            class="text-white"><svg width="162" height="53" viewBox="0 0 162 53" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_0_1)">
                                    <path
                                        d="M4 22.5C4 10.0736 11.835 0 21.5 0L140.5 0C150.165 0 158 10.0736 158 22.5V22.5C158 34.9264 150.165 45 140.5 45H21.5C11.835 45 4 34.9264 4 22.5V22.5Z"
                                        fill="#6259CA" />
                                </g>
                                <path
                                    d="M55.864 29L55.864 16.4H58.33V21.71H58.42L60.67 16.4H63.208L60.58 22.412L63.334 29H60.598L58.456 23.492H58.33L58.33 29H55.864ZM69.3144 29H65.3904C64.1904 27.884 63.5904 26.36 63.5904 24.428C63.5904 23.456 63.7224 22.61 63.9864 21.89C64.2624 21.17 64.6944 20.474 65.2824 19.802L69.4944 19.802C70.1184 20.522 70.5444 21.224 70.7724 21.908C71.0004 22.58 71.1144 23.42 71.1144 24.428C71.1144 26.36 70.5144 27.884 69.3144 29ZM66.6684 27.11H68.0364C68.4684 26.27 68.6844 25.316 68.6844 24.248C68.6844 23.18 68.4624 22.328 68.0184 21.692H66.6684C66.2364 22.304 66.0204 23.174 66.0204 24.302C66.0204 25.418 66.2364 26.354 66.6684 27.11ZM76.3989 19.802L78.3069 19.802C78.8349 20.474 79.1949 21.146 79.3869 21.818C79.5789 22.49 79.6749 23.33 79.6749 24.338V29H77.2809V24.158C77.2809 23.018 77.1249 22.196 76.8129 21.692H74.7969V29H72.4029V19.802H74.2749L74.5989 20.45C74.8629 20.21 75.1089 20.042 75.3369 19.946C75.5769 19.85 75.9309 19.802 76.3989 19.802ZM81.4156 24.986V21.692H80.1736V19.802H81.4156V17.3H83.8096V19.802H85.2856V21.692H83.8096V25.562C83.8096 26.294 83.9356 26.81 84.1876 27.11H85.2856V29H82.7296C82.0936 28.412 81.7096 27.776 81.5776 27.092C81.4696 26.516 81.4156 25.814 81.4156 24.986ZM90.7331 24.842H88.8071C88.5551 25.154 88.4291 25.544 88.4291 26.012C88.4291 26.48 88.5611 26.846 88.8251 27.11H90.7331V24.842ZM86.8631 19.802H91.3271C92.0471 20.234 92.5211 20.732 92.7491 21.296C92.9771 21.848 93.0911 22.604 93.0911 23.564V26.264C93.0911 27.26 93.1151 28.172 93.1631 29H91.1111L90.7871 28.352C90.3191 28.784 89.6591 29 88.8071 29H87.6731C86.6531 28.328 86.1431 27.362 86.1431 26.102C86.1431 24.83 86.6651 23.828 87.7091 23.096H89.4011C89.8691 23.096 90.3071 23.24 90.7151 23.528V22.628C90.7151 22.16 90.5111 21.848 90.1031 21.692H86.8631V19.802ZM94.6392 29V16.4H97.0332V23.078H97.2852L98.9772 19.802H101.317L99.1932 23.816L101.335 29L98.9592 29L97.3032 24.968H97.0332V29H94.6392Z"
                                    fill="white" />
                                <defs>
                                    <filter id="filter0_d_0_1" x="0" y="0" width="162" height="53"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_0_1" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_0_1"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>

                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start wow fadeInUp text-center order-2 order-lg-1"
                    data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h1 class="mb-4 animated slideInDown">Apa Itu Restorative Justice?</h1>
                    <p class="pb-3 animated slideInDown">Restorative justice adalah alternatif penyelesaian perkara tindak
                        pidana yang dalam mekanisme tata cara peradilan pidana, berfokus pada pemidanaan yang diubah menjadi
                        proses dialog dan mediasi yang melibatkan pelaku, korban, keluarga pelaku/korban, dan pihak lain
                        yang terkait.
                        <br><br>
                        Hal ini bertujuan untuk bersama-sama menciptakan kesepakatan atas penyelesaian perkara pidana yang
                        adil dan seimbang bagi pihak korban maupun pelaku dengan mengedepankan pemulihan kembali pada
                        keadaan semula dan mengembalikan pola hubungan baik dalam masyarakat.
                    </p>
                    <a href="{{ route('tentang.index') }}"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selengkapnya</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start wow fadeInUp text-center order-1 order-lg-2"
                    data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <img class="img-fluid animated zoomIn" style="border-radius: %" src="{{ 'client/img/img-1.jpg' }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"></p>
                    <h1 class="text-center text-white mb-4">Punya Pertanyaan Seputar Pengajuan Restorative Justice?
                        Hubungi Kami Melalui Whatsapp!
                    </h1>
                    <div class="position-relative w-100 mt-3">
                        <a href="https://wa.me/6281224377189" target="_blank"
                            class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Whatsapp Kami <i
                                class="fab fa-whatsapp"></i></a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown">Tata Cara Pengajuan Restorative Justice</h1>
                    <p class="pb-3 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged</p>
                    <a href="{{ route('pengajuan.index') }}"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Pengajuan</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"></p>
                    <h1 class="text-center text-white mb-4">Punya Pertanyaan Seputar Permasalahan Hukum?</h1>
                    <div class="position-relative w-100 mt-3">
                        <a href="{{ route('kontak.index') }}" target="_blank"
                            class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Tanya Disini</a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl pb-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center mb-5">Galeri Kegiatan</h1>
            </div>
            <div class="row g-4 portfolio-container">
                {{-- @foreach ($galeri as $key) --}}
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="client/img/img-2.jpg" alt=""
                                style="max-height:250px">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="client/img/img-2.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="client/img/img-2.jpg" alt=""
                                style="max-height:250px">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="client/img/img-2.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="client/img/img-2.jpg" alt=""
                                style="max-height:250px">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="client/img/img-2.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
                {{-- <div class="col-lg-12 col-md-6 portfolio-item last wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="{{ route('galeri.index') }}"
                                class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight">Selengkapnya</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"><span></span>Pencarian<span></span></p>
                    <h1 class="text-center text-white mb-4">Lacak Status Pengajuan</h1>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" name="kode"
                            id="kodeInput" placeholder="Kode Unik" style="height: 48px">
                        <a href="" id="link" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                            <i class="fa fa-paper-plane text-primary fs-4"></i>
                        </a>
                        <p class="text-white mt-3">Kode unik yang anda input diterima saat proses pengajuan pertama yag
                            dikirimkan melalui whatsapp ke nomor telepon pelapor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl pt-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <p class="section-title text-secondary justify-content-center"><span></span>Lokasi<span></span></p>
                <h1 class="text-center mb-5">Kejaksaan Negeri Luwu Utara</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <iframe class="embed-responsive-item w-100" height="600"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15943.494813996913!2d120.3449423!3d-2.5479991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d919ab3429f086d%3A0x4e8a598a7c76482c!2sKejaksaan%20Negeri%20Masamba!5e0!3m2!1sen!2sid!4v1698652261227!5m2!1sen!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <a href="https://maps.app.goo.gl/yjVZDDgEYfR8J6Rv9" class="btn btn-primary w-100 py-3 mt-3"
                            type="submit">Get Location</a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl pt-2">
        <div class="container px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1 class="text-center mb-2">Bagikan Kepada Orang lain</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <a href="whatsapp://send?text=Check out this link: https://example.com" target="_blank"
                            class="btn btn-success w-100 py-3 mt-3">
                            Bagikan Melalui Whatsapp <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    @push('custom')
        <!-- SWEET-ALERT JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
        @if (session('success'))
            <script>
                var nama = @json($data->nama_pelapor);
                var alamat = @json($data->alamat_pelapor);

                Swal.fire({
                    icon: 'info',
                    title: 'Sukses',
                    text: 'Nama: ' + nama + '\nAlamat: ' + alamat,
                });
            </script>
        @endif
        <script>
            $(document).ready(function() {
                $("#kodeInput").on("input", function() {
                    var kodeValue = $(this).val();
                    $("#link").attr("href", "/pencarian/" + kodeValue);
                });
            });
        </script>
    @endpush
@endsection
