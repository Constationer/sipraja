@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Pencarian</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            @if ($data == 'none')
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Data<span></span></p>
                    <h1 class="text-center mb-5">Pencarian Tidak Ditemukan!</h1>
                </div>
            @else
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Data<span></span></p>
                    <h1 class="text-center mb-5">Pencarian Data Berdasarkan Kode Unik</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form method="POST" action="{{ route('pengajuan.store') }}" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-12 text-center">
                                        <span>
                                            <h5>Status Pengajuan Restorative Justice
                                                @if ($data->status == 'Masuk')
                                                    <p class="text-primary">Diterima</p>
                                                @elseif ($data->status == 'Proses')
                                                    <p class="text-warning">Diproses</p>
                                                @elseif ($data->status == 'Selesai')
                                                    <p class="text-success">Selesai</p>
                                                @else
                                                    <p class="text-danger">Ditolak</p>
                                                @endif
                                            </h5>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" disabled
                                                value="{{ $data->nama_pelapor }}">
                                            <label for="name">Nama Pelapor</label>
                                            @error('nama_pelapor')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" disabled
                                                value="{{ $data->no_pelapor }}">
                                            <label for="no_pelapor">No Handphone</label>
                                            @error('no_pelapor')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" disabled
                                                value="{{ $data->alamat_pelapor }}">
                                            <label for="alamat_pelapor">Alamat Pelapor</label>
                                            @error('alamat_pelapor')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" disabled
                                                value="{{ $data->nama_perkara }}">
                                            <label for="nama_perkara">Nama Perkara</label>
                                            @error('nama_perkara')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" disabled
                                                value="{{ $data->user->name }}">
                                            <label for="nama_perkara">Desa Tersangka</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" disabled
                                                value="{{ $data->alamat_tersangka }}">
                                            <label for="alamat_tersangka">Alamat Tersangka</label>
                                            @error('alamat_tersangka')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" disabled
                                                value="{{ $data->polisi }}">
                                            <label for="nama_perkara">Polsek/Polres Tersangka</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" disabled style="height: 150px" name="deskripsi">{{ $data->deskripsi }}</textarea>
                                            <label for="deskripsi">Deskripsi</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
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
