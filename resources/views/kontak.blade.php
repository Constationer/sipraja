@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Kontak</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <h3 class="text-white">Hubungi Whatsapp kami di nomor: 082142493894
                    </h3>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->



    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Hubungi Kami<span></span></p>
                <h1 class="text-center mb-5">Punya Pertanyaan Seputar Pengajuan Restorative Justice, atau Permasalahan Hukum
                    Lainnya?</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4">Silahkan isi kolom pertanyaan dibawah ini jika anda memiliki pertanyaan
                            terkait Cara pengajuan Restorative Justice, Atau Permasalahan Hukum lainnya</p>
                        <form method="POST" action="{{ route('kontak.store') }}" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            id="name" placeholder="Nama Pelapor" name="nama"
                                            value="{{ old('nama') }}">
                                        <label for="name">Nama</label>
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('handphone') is-invalid @enderror"
                                            id="handphone" placeholder="No Handphone" name="handphone"
                                            value="{{ old('handphone') }}">
                                        <label for="handphone">No Handphone</label>
                                        @error('handphone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('jenis') is-invalid @enderror"
                                            id="jenis" placeholder="Alamat Pelapor" name="jenis"
                                            value="{{ old('jenis') }}">
                                        <label for="jenis">Judul Permasalahan</label>
                                        @error('jenis')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('pertanyaan') is-invalid @enderror" placeholder="Pertanyaan" id="pertanyaan"
                                            style="height: 150px" name="pertanyaan">{{ old('pertanyaan') }}</textarea>
                                        <label for="pertanyaan">Pertanyaan</label>
                                        @error('pertanyaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @push('custom')
        <!-- SWEET-ALERT JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

        <script>
            // Add an event listener to the delete buttons
            document.querySelectorAll('.delete-button').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: 'Data akan hilang secara permanen!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit the form when confirmed
                            document.getElementById('delete-form-' + id).submit();
                        }
                    });
                });
            });
        </script>

        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'info',
                    title: 'Sukses',
                    text: '{{ session('success') }}',
                });
            </script>
        @endif

        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}',
                });
            </script>
        @endif
    @endpush
@endsection
