@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start order-2 order-lg-1">
                    <h1 class="mb-4 animated slideInDown text-white">Sistem Informasi Dan Pengajuan Restorative Justice
                        Kejaksaan
                    </h1>
                    <img src="https://images.squarespace-cdn.com/content/v1/5d3f241fa4e0350001fa20d5/1636491460338-AIZAXV2978MGIDQE0GT7/qr-code.png?format=2500w"
                        class="img-fluid" style="max-height:100px">
                    <img src="https://images.squarespace-cdn.com/content/v1/5d3f241fa4e0350001fa20d5/1636491460338-AIZAXV2978MGIDQE0GT7/qr-code.png?format=2500w"
                        class="img-fluid" style="max-height:100px">
                    <img src="{{ asset('client/img/logo.png') }}" class="img-fluid" style="max-height:100px"><br><br>
                    <a href="{{ route('pengajuan.index') }}"
                        class="btn btn-light     px-sm-5 rounded-pill animated slideInRight w-100">Pengajuan</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start order-1 order-lg-2">
                    <img class="img-fluid animated zoomIn" src="{{ 'client/img/hero.png' }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-4">
                <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

                    <h1 class="text-center mb-4">Selamat Datang</h1>
                    <img src="{{ asset('client/img/logo.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="bg-light rounded text-center p-4">
                        <h5 class="mb-3">Sistem Informasi Dan Pengajuan Restorative Justice Kejaksaan</h5>
                        <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a galley of type and scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl newsletter py-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="text-center mb-4">Navigasi Halaman</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="joypad-container">
                    <div class="joypad-button joypad-top"><a href="{{ route('home.index') }}" class="text-white"><svg
                                width="154" height="35" viewBox="0 0 154 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="154" height="35" rx="17.5" fill="#6259CA" />
                                <path
                                    d="M60.96 23H58.768V11.8H60.96V16.312H63.52V11.8H65.712V23H63.52V18.36H60.96V23ZM72.0364 23H68.5484C67.4817 22.008 66.9484 20.6533 66.9484 18.936C66.9484 18.072 67.0657 17.32 67.3004 16.68C67.5457 16.04 67.9297 15.4213 68.4524 14.824H72.1964C72.751 15.464 73.1297 16.088 73.3324 16.696C73.535 17.2933 73.6364 18.04 73.6364 18.936C73.6364 20.6533 73.103 22.008 72.0364 23ZM69.6844 21.32H70.9004C71.2844 20.5733 71.4764 19.7253 71.4764 18.776C71.4764 17.8267 71.279 17.0693 70.8844 16.504H69.6844C69.3004 17.048 69.1084 17.8213 69.1084 18.824C69.1084 19.816 69.3004 20.648 69.6844 21.32ZM78.3338 14.824H79.4698L79.8698 15.384C80.0938 15.1813 80.3071 15.0373 80.5098 14.952C80.7231 14.8667 81.0378 14.824 81.4538 14.824H83.2298C83.6991 15.4213 84.0191 16.0187 84.1898 16.616C84.3604 17.2133 84.4458 17.96 84.4458 18.856V23H82.3177V18.696C82.3177 17.7147 82.1684 16.984 81.8698 16.504H80.3338C80.5684 16.9627 80.6858 17.5867 80.6858 18.376V23H78.5578V18.696C78.5578 17.6827 78.4191 16.952 78.1418 16.504H76.9098V23H74.7818V14.824H76.4457L76.7338 15.4C76.9684 15.1867 77.1871 15.0373 77.3898 14.952C77.6031 14.8667 77.9178 14.824 78.3338 14.824ZM89.4465 16.504H88.2465C88.0865 16.696 87.9532 16.9627 87.8465 17.304C87.7505 17.6453 87.7025 17.976 87.7025 18.296H89.9905C90.0118 17.976 89.9692 17.6453 89.8625 17.304C89.7558 16.952 89.6172 16.6853 89.4465 16.504ZM91.6225 21.32V23H87.5585C86.8118 22.4987 86.2838 21.88 85.9745 21.144C85.6758 20.3973 85.5265 19.6453 85.5265 18.888C85.5265 17.1387 86.1878 15.784 87.5105 14.824H90.1025C90.8172 15.3467 91.3025 15.9013 91.5585 16.488C91.8145 17.0747 91.9425 17.6667 91.9425 18.264C91.9425 18.8613 91.8945 19.3733 91.7985 19.8H87.8145C87.8465 20.0453 87.9372 20.328 88.0865 20.648C88.2465 20.9573 88.4172 21.1813 88.5985 21.32H91.6225Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="joypad-button joypad-left"><a href="{{ route('tentang.index') }}" class="text-white"><svg
                                width="35" height="154" viewBox="0 0 35 154" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="154" width="154" height="35" rx="17.5" transform="rotate(-90 0 154)"
                                    fill="#6259CA" />
                                <path
                                    d="M12.72 96.424V98.84H10.8V91.832H12.72V94.248H22V96.424H12.72ZM15.504 88.5691V89.7691C15.696 89.9291 15.9627 90.0625 16.304 90.1691C16.6453 90.2651 16.976 90.3131 17.296 90.3131V88.0251C16.976 88.0038 16.6453 88.0465 16.304 88.1531C15.952 88.2598 15.6853 88.3985 15.504 88.5691ZM20.32 86.3931H22V90.4571C21.4987 91.2038 20.88 91.7318 20.144 92.0411C19.3973 92.3398 18.6453 92.4891 17.888 92.4891C16.1387 92.4891 14.784 91.8278 13.824 90.5051V87.9131C14.3467 87.1985 14.9013 86.7131 15.488 86.4571C16.0747 86.2011 16.6667 86.0731 17.264 86.0731C17.8613 86.0731 18.3733 86.1211 18.8 86.2171V90.2011C19.0453 90.1691 19.328 90.0785 19.648 89.9291C19.9573 89.7691 20.1813 89.5985 20.32 89.4171V86.3931ZM13.824 81.4475V79.7515C14.4213 79.2822 15.0187 78.9622 15.616 78.7915C16.2133 78.6208 16.96 78.5355 17.856 78.5355H22V80.6635H17.696C16.6827 80.6635 15.952 80.8022 15.504 81.0795V82.8715H22V84.9995H13.824L13.824 83.3355L14.4 83.0475C14.1867 82.8128 14.0373 82.5942 13.952 82.3915C13.8667 82.1782 13.824 81.8635 13.824 81.4475ZM18.432 76.9882H15.504V78.0922H13.824V76.9882H11.6V74.8602H13.824V73.5482H15.504V74.8602H18.944C19.5947 74.8602 20.0533 74.7482 20.32 74.5242V73.5482H22V75.8202C21.4773 76.3856 20.912 76.7269 20.304 76.8442C19.792 76.9402 19.168 76.9882 18.432 76.9882ZM18.304 68.706V70.418C18.5813 70.642 18.928 70.754 19.344 70.754C19.76 70.754 20.0853 70.6367 20.32 70.402V68.706H18.304ZM13.824 72.146V68.178C14.208 67.538 14.6507 67.1167 15.152 66.914C15.6427 66.7113 16.3147 66.61 17.168 66.61H19.568C20.4533 66.61 21.264 66.5887 22 66.546V68.37L21.424 68.658C21.808 69.074 22 69.6607 22 70.418V71.426C21.4027 72.3327 20.544 72.786 19.424 72.786C18.2933 72.786 17.4027 72.322 16.752 71.394V69.89C16.752 69.474 16.88 69.0847 17.136 68.722H16.336C15.92 68.722 15.6427 68.9033 15.504 69.266V72.146H13.824ZM13.824 61.6819V59.9859C14.4213 59.5165 15.0187 59.1965 15.616 59.0259C16.2133 58.8552 16.96 58.7699 17.856 58.7699H22V60.8979H17.696C16.6827 60.8979 15.952 61.0365 15.504 61.3139V63.1059H22V65.2339H13.824V63.5699L14.4 63.2819C14.1867 63.0472 14.0373 62.8285 13.952 62.6259C13.8667 62.4125 13.824 62.0979 13.824 61.6819ZM13.824 51.2606H21.152C21.9627 51.2606 22.6133 51.3673 23.104 51.5806C23.5947 51.7833 24.0267 52.194 24.4 52.8126V56.4606H22.736V53.7246C22.576 53.458 22.32 53.3246 21.968 53.3246H21.024C21.3547 53.7193 21.52 54.3486 21.52 55.2126V56.3806C20.4853 57.2446 19.2853 57.6766 17.92 57.6766C16.9387 57.6766 16.1387 57.538 15.52 57.2606C14.8907 56.9833 14.3253 56.578 13.824 56.0446L13.824 54.8606C13.824 54.1673 14.048 53.618 14.496 53.2126L13.824 52.9246V51.2606ZM15.504 53.3886V54.9406C16.1653 55.3246 16.928 55.5166 17.792 55.5166C18.6453 55.5166 19.3493 55.3513 19.904 55.0206V53.3886H15.504Z"
                                    fill="white" />
                            </svg>
                        </a></div>
                    <div class="joypad-button joypad-center"><a href="{{ route('pengajuan.index') }}"
                            class="text-white"><svg width="100" height="100" viewBox="0 0 86 86" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M86 43C86 66.7482 66.7482 86 43 86C19.2518 86 0 66.7482 0 43C0 19.2518 19.2518 0 43 0C66.7482 0 86 19.2518 86 43Z"
                                    fill="#6259CA" />
                                <path
                                    d="M12.928 38.72V42.72H14.352C14.9387 42.24 15.232 41.536 15.232 40.608C15.232 40.2133 15.152 39.84 14.992 39.488C14.8427 39.136 14.6613 38.88 14.448 38.72H12.928ZM10.768 48V36.8H15.104C15.8293 37.12 16.4 37.6107 16.816 38.272C17.2427 38.9333 17.456 39.7067 17.456 40.592C17.456 41.4667 17.2373 42.2773 16.8 43.024C16.3627 43.7707 15.7173 44.2987 14.864 44.608H12.928V48H10.768ZM21.9309 41.504H20.7309C20.5709 41.696 20.4375 41.9627 20.3309 42.304C20.2349 42.6453 20.1869 42.976 20.1869 43.296H22.4749C22.4962 42.976 22.4535 42.6453 22.3469 42.304C22.2402 41.952 22.1015 41.6853 21.9309 41.504ZM24.1069 46.32V48H20.0429C19.2962 47.4987 18.7682 46.88 18.4589 46.144C18.1602 45.3973 18.0109 44.6453 18.0109 43.888C18.0109 42.1387 18.6722 40.784 19.9949 39.824H22.5869C23.3015 40.3467 23.7869 40.9013 24.0429 41.488C24.2989 42.0747 24.4269 42.6667 24.4269 43.264C24.4269 43.8613 24.3789 44.3733 24.2829 44.8H20.2989C20.3309 45.0453 20.4215 45.328 20.5709 45.648C20.7309 45.9573 20.9015 46.1813 21.0829 46.32H24.1069ZM29.0525 39.824H30.7485C31.2178 40.4213 31.5378 41.0187 31.7085 41.616C31.8792 42.2133 31.9645 42.96 31.9645 43.856V48H29.8365V43.696C29.8365 42.6827 29.6978 41.952 29.4205 41.504H27.6285V48H25.5005V39.824H27.1645L27.4525 40.4C27.6872 40.1867 27.9058 40.0373 28.1085 39.952C28.3218 39.8667 28.6365 39.824 29.0525 39.824ZM39.4738 39.824V47.152C39.4738 47.9627 39.3671 48.6133 39.1538 49.104C38.9511 49.5947 38.5404 50.0267 37.9218 50.4H34.2738V48.736H37.0098C37.2764 48.576 37.4098 48.32 37.4098 47.968V47.024C37.0151 47.3547 36.3858 47.52 35.5218 47.52H34.3538C33.4898 46.4853 33.0578 45.2853 33.0578 43.92C33.0578 42.9387 33.1964 42.1387 33.4738 41.52C33.7511 40.8907 34.1564 40.3253 34.6898 39.824H35.8738C36.5671 39.824 37.1164 40.048 37.5218 40.496L37.8098 39.824H39.4738ZM37.3458 41.504H35.7938C35.4098 42.1653 35.2178 42.928 35.2178 43.792C35.2178 44.6453 35.3831 45.3493 35.7138 45.904H37.3458V41.504ZM44.6378 44.304H42.9258C42.7018 44.5813 42.5898 44.928 42.5898 45.344C42.5898 45.76 42.7071 46.0853 42.9418 46.32H44.6378V44.304ZM41.1978 39.824H45.1658C45.8058 40.208 46.2271 40.6507 46.4298 41.152C46.6324 41.6427 46.7338 42.3147 46.7338 43.168V45.568C46.7338 46.4533 46.7551 47.264 46.7978 48H44.9738L44.6858 47.424C44.2698 47.808 43.6831 48 42.9258 48H41.9178C41.0111 47.4027 40.5578 46.544 40.5578 45.424C40.5578 44.2933 41.0218 43.4027 41.9498 42.752H43.4538C43.8698 42.752 44.2591 42.88 44.6218 43.136V42.336C44.6218 41.92 44.4404 41.6427 44.0778 41.504H41.1978V39.824ZM48.1099 39.824H50.2059V47.184C50.2059 47.9947 50.1099 48.64 49.9179 49.12C49.7259 49.6 49.3259 50.0267 48.7179 50.4H46.6059V48.72H47.7099C47.9765 48.56 48.1099 48.304 48.1099 47.952V39.824ZM48.1099 36.8H50.2059V39.12H48.1099V36.8ZM54.4106 48H52.7306C52.2613 47.4027 51.9413 46.8053 51.7706 46.208C51.6 45.6107 51.5146 44.864 51.5146 43.968V39.824H53.6426V44.128C53.6426 45.0987 53.8346 45.8293 54.2186 46.32H55.7066V39.824H57.8346V48H56.1546L55.8666 47.424C55.4613 47.808 54.976 48 54.4106 48ZM63.0596 44.304H61.3476C61.1236 44.5813 61.0116 44.928 61.0116 45.344C61.0116 45.76 61.129 46.0853 61.3636 46.32H63.0596V44.304ZM59.6196 39.824H63.5876C64.2276 40.208 64.649 40.6507 64.8516 41.152C65.0543 41.6427 65.1556 42.3147 65.1556 43.168V45.568C65.1556 46.4533 65.177 47.264 65.2196 48H63.3956L63.1076 47.424C62.6916 47.808 62.105 48 61.3476 48H60.3396C59.433 47.4027 58.9796 46.544 58.9796 45.424C58.9796 44.2933 59.4436 43.4027 60.3716 42.752H61.8756C62.2916 42.752 62.681 42.88 63.0436 43.136V42.336C63.0436 41.92 62.8623 41.6427 62.4996 41.504H59.6196V39.824ZM70.0838 39.824H71.7798C72.2491 40.4213 72.5691 41.0187 72.7398 41.616C72.9104 42.2133 72.9958 42.96 72.9958 43.856V48H70.8678V43.696C70.8678 42.6827 70.7291 41.952 70.4518 41.504H68.6598V48H66.5318V39.824H68.1957L68.4838 40.4C68.7184 40.1867 68.9371 40.0373 69.1398 39.952C69.3531 39.8667 69.6678 39.824 70.0838 39.824Z"
                                    fill="white" />
                            </svg>
                        </a></div>
                    <div class="joypad-button joypad-right"><a href="{{ route('cara-pengaduan.index') }}"
                            class="text-white"><svg width="45" height="154" viewBox="0 0 45 154" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="154" width="154" height="45" rx="17.5" transform="rotate(-90 0 154)"
                                    fill="#6259CA" />
                                <path
                                    d="M21.28 46.576V44.16H23.2V51.168H21.28V48.752H12V46.576H21.28ZM15.696 54.5909V52.8789C15.4187 52.6549 15.072 52.5429 14.656 52.5429C14.24 52.5429 13.9147 52.6602 13.68 52.8949V54.5909H15.696ZM20.176 51.1509V55.1189C19.792 55.7589 19.3493 56.1802 18.848 56.3829C18.3573 56.5855 17.6853 56.6869 16.832 56.6869H14.432C13.5467 56.6869 12.736 56.7082 12 56.7509V54.9269L12.576 54.6389C12.192 54.2229 12 53.6362 12 52.8789V51.8709C12.5973 50.9642 13.456 50.5109 14.576 50.5109C15.7067 50.5109 16.5973 50.9749 17.248 51.9029V53.4069C17.248 53.8229 17.12 54.2122 16.864 54.5749H17.664C18.08 54.5749 18.3573 54.3935 18.496 54.0309V51.1509H20.176ZM15.568 58.293H18.496V57.189H20.176V58.293H22.4V60.421H20.176V61.733H18.496V60.421H15.056C14.4053 60.421 13.9467 60.533 13.68 60.757V61.733H12V59.461C12.5227 58.8957 13.088 58.5543 13.696 58.437C14.208 58.341 14.832 58.293 15.568 58.293ZM15.696 66.5753V64.8633C15.4187 64.6393 15.072 64.5273 14.656 64.5273C14.24 64.5273 13.9147 64.6446 13.68 64.8793V66.5753H15.696ZM20.176 63.1353V67.1033C19.792 67.7433 19.3493 68.1646 18.848 68.3673C18.3573 68.5699 17.6853 68.6713 16.832 68.6713H14.432C13.5467 68.6713 12.736 68.6926 12 68.7353V66.9113L12.576 66.6233C12.192 66.2073 12 65.6206 12 64.8633V63.8553C12.5973 62.9486 13.456 62.4953 14.576 62.4953C15.7067 62.4953 16.5973 62.9593 17.248 63.8873V65.3913C17.248 65.8073 17.12 66.1966 16.864 66.5593H17.664C18.08 66.5593 18.3573 66.3779 18.496 66.0153V63.1353H20.176ZM13.856 75.7939L13.856 78.6099H12V74.5459C12.6613 73.8419 13.4987 73.3085 14.512 72.9459C15.5253 72.5832 16.5653 72.4019 17.632 72.4019C18.7093 72.4019 19.744 72.6045 20.736 73.0099C21.728 73.4152 22.5493 74.0179 23.2 74.8179V78.6099H21.28V75.7939C20.9493 75.5059 20.416 75.2552 19.68 75.0419C18.944 74.8392 18.24 74.7379 17.568 74.7379C16.896 74.7379 16.192 74.8392 15.456 75.0419C14.72 75.2552 14.1867 75.5059 13.856 75.7939ZM15.696 83.4034V81.6914C15.4187 81.4674 15.072 81.3554 14.656 81.3554C14.24 81.3554 13.9147 81.4727 13.68 81.7074V83.4034H15.696ZM20.176 79.9634V83.9314C19.792 84.5714 19.3493 84.9927 18.848 85.1954C18.3573 85.398 17.6853 85.4994 16.832 85.4994H14.432C13.5467 85.4994 12.736 85.5207 12 85.5634V83.7394L12.576 83.4514C12.192 83.0354 12 82.4487 12 81.6914V80.6834C12.5973 79.7767 13.456 79.3234 14.576 79.3234C15.7067 79.3234 16.5973 79.7874 17.248 80.7154V82.2194C17.248 82.6354 17.12 83.0247 16.864 83.3874H17.664C18.08 83.3874 18.3573 83.206 18.496 82.8434V79.9634H20.176ZM12 86.8915H20.176V88.4115L19.312 88.8115C19.888 89.2382 20.176 89.7768 20.176 90.4275V91.0515H18.032V89.0195H12V86.8915ZM15.696 95.5128V93.8008C15.4187 93.5768 15.072 93.4648 14.656 93.4648C14.24 93.4648 13.9147 93.5821 13.68 93.8168V95.5128H15.696ZM20.176 92.0728V96.0408C19.792 96.6808 19.3493 97.1021 18.848 97.3048C18.3573 97.5074 17.6853 97.6088 16.832 97.6088H14.432C13.5467 97.6088 12.736 97.6301 12 97.6728V95.8488L12.576 95.5608C12.192 95.1448 12 94.5581 12 93.8008V92.7928C12.5973 91.8861 13.456 91.4328 14.576 91.4328C15.7067 91.4328 16.5973 91.8968 17.248 92.8248V94.3288C17.248 94.7448 17.12 95.1341 16.864 95.4968H17.664C18.08 95.4968 18.3573 95.3154 18.496 94.9528V92.0728H20.176Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="joypad-button joypad-bottom"><a href="{{ route('kontak.index') }}" class="text-white"><svg
                                width="154" height="35" viewBox="0 0 154 35" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="154" height="35" rx="17.5" fill="#6259CA" />
                                <path
                                    d="M54.768 23V11.8H56.96V16.52H57.04L59.04 11.8H61.296L58.96 17.144L61.408 23H58.976L57.072 18.104H56.96V23H54.768ZM66.7239 23H63.2359C62.1692 22.008 61.6359 20.6533 61.6359 18.936C61.6359 18.072 61.7532 17.32 61.9879 16.68C62.2332 16.04 62.6172 15.4213 63.1399 14.824H66.8839C67.4385 15.464 67.8172 16.088 68.0199 16.696C68.2225 17.2933 68.3239 18.04 68.3239 18.936C68.3239 20.6533 67.7905 22.008 66.7239 23ZM64.3719 21.32H65.5879C65.9719 20.5733 66.1639 19.7253 66.1639 18.776C66.1639 17.8267 65.9665 17.0693 65.5719 16.504H64.3719C63.9879 17.048 63.7959 17.8213 63.7959 18.824C63.7959 19.816 63.9879 20.648 64.3719 21.32ZM73.0213 14.824H74.7173C75.1866 15.4213 75.5066 16.0187 75.6773 16.616C75.8479 17.2133 75.9333 17.96 75.9333 18.856V23H73.8053V18.696C73.8053 17.6827 73.6666 16.952 73.3893 16.504H71.5973V23H69.4693V14.824H71.1332L71.4213 15.4C71.6559 15.1867 71.8746 15.0373 72.0773 14.952C72.2906 14.8667 72.6053 14.824 73.0213 14.824ZM77.4805 19.432V16.504H76.3765V14.824H77.4805V12.6H79.6085V14.824H80.9205V16.504H79.6085V19.944C79.6085 20.5947 79.7205 21.0533 79.9445 21.32H80.9205V23H78.6485C78.0832 22.4773 77.7418 21.912 77.6245 21.304C77.5285 20.792 77.4805 20.168 77.4805 19.432ZM85.7628 19.304H84.0508C83.8268 19.5813 83.7148 19.928 83.7148 20.344C83.7148 20.76 83.8321 21.0853 84.0668 21.32H85.7628V19.304ZM82.3228 14.824H86.2908C86.9308 15.208 87.3521 15.6507 87.5548 16.152C87.7574 16.6427 87.8588 17.3147 87.8588 18.168V20.568C87.8588 21.4533 87.8801 22.264 87.9228 23H86.0988L85.8108 22.424C85.3948 22.808 84.8081 23 84.0508 23H83.0428C82.1361 22.4027 81.6828 21.544 81.6828 20.424C81.6828 19.2933 82.1468 18.4027 83.0748 17.752H84.5788C84.9948 17.752 85.3841 17.88 85.7468 18.136V17.336C85.7468 16.92 85.5654 16.6427 85.2028 16.504H82.3228V14.824ZM89.2349 23V11.8H91.3629V17.736H91.5869L93.0909 14.824H95.1709L93.2829 18.392L95.1869 23H93.0749L91.6029 19.416H91.3629V23H89.2349Z"
                                    fill="white" />
                            </svg>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start wow fadeInUp text-center order-2 order-lg-1"
                    data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h1 class="mb-4 animated slideInDown">Apa Itu Restorative Justice?</h1>
                    <p class="pb-3 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged</p>
                    <a href="{{ route('tentang.index') }}"
                        class="btn btn-primary py-sm-3 px-sm-5 rounded-pill animated slideInRight w-100">Selengkapnya</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start wow fadeInUp text-center order-1 order-lg-2"
                    data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
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
                    <h1 class="text-center text-white mb-4">Memiliki Pertanyaan? Hubungi Kami!</h1>
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
                    <h1 class="text-center text-white mb-4">Memiliki Terkait Pengaduan?</h1>
                    <div class="position-relative w-100 mt-3">
                        <a href="{{ route('kontak.index') }}" target="_blank"
                            class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Ajukan Pertanyaan!</a>
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
                @foreach ($galeri as $key)
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="admin/images/media/1.jpg" alt=""
                                    style="max-height:250px">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href=""
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                                {{-- <img class="img-fluid w-100" src="{{ asset('storage/' . $key->gambar) }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('storage/' . $key->gambar) }}" data-lightbox="portfolio"><i
                                            class="fa fa-eye"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    <h1 class="text-center text-white mb-4">Masukan Kode Pengajuan</h1>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" name="kode"
                            id="kodeInput" placeholder="Kode Akses" style="height: 48px">
                        <a href="" id="link" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                            <i class="fa fa-paper-plane text-primary fs-4"></i>
                        </a>
                        <p class="text-white mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make</p>
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
                <h1 class="text-center mb-2">Beritahu teman mu</h1>
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
