@extends('template')

@section('content')
    <!-- Navbar & Hero Start -->

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Pengajuan</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Formulir<span></span></p>
                <h1 class="text-center mb-5">Pengajuan Untuk Restorative Justice</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <form method="POST" action="{{ route('pengajuan.store') }}" class="form-horizontal"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control @error('nama_pelapor') is-invalid @enderror" id="name"
                                            placeholder="Nama Pelapor" name="nama_pelapor"
                                            value="{{ old('nama_pelapor') }}">
                                        <label for="name">Nama Pelapor</label>
                                        @error('nama_pelapor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('no_pelapor') is-invalid @enderror"
                                            id="no_pelapor" placeholder="No Handphone" name="no_pelapor"
                                            value="{{ old('no_pelapor') }}">
                                        <label for="no_pelapor">No Handphone</label>
                                        @error('no_pelapor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control @error('alamat_pelapor') is-invalid @enderror"
                                            id="alamat_pelapor" placeholder="Alamat Pelapor" name="alamat_pelapor"
                                            value="{{ old('alamat_pelapor') }}">
                                        <label for="alamat_pelapor">Alamat Pelapor</label>
                                        @error('alamat_pelapor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control @error('nama_perkara') is-invalid @enderror"
                                            id="nama_perkara" placeholder="Nama Perkara" name="nama_perkara"
                                            value="{{ old('nama_perkara') }}">
                                        <label for="nama_perkara">Nama Perkara</label>
                                        @error('nama_perkara')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select @error('desa_tersangka') is-invalid @enderror"
                                            id="desa_tersangka" aria-label="DESA TERSANGKA" name="desa_tersangka">
                                            <option value="" selected disabled>Pilih Salah Satu</option>
                                            @foreach ($data as $key)
                                                <option value="{{ $key->id }}"
                                                    {{ old('desa_tersangka') == $key->id ? 'selected' : '' }}>
                                                    {{ $key->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="desa_tersangka">Desa Tersangka</label>
                                        @error('desa_tersangka')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control @error('alamat_tersangka') is-invalid @enderror"
                                            id="alamat_tersangka" placeholder="Alamat Tersangka" name="alamat_tersangka"
                                            value="{{ old('alamat_tersangka') }}">
                                        <label for="alamat_tersangka">Alamat Tersangka</label>
                                        @error('alamat_tersangka')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select @error('polisi') is-invalid @enderror" id="polisi"
                                            aria-label="POLRES/POLSEK" name="polisi">
                                            <option value="" selected disabled>Pilih Salah Satu</option>
                                            <option value="Polsek Bone"
                                                {{ old('polisi') == 'Polsek Bone' ? 'selected' : '' }}>Polsek Bone</option>
                                            <option value="Polsek Sukamaju"
                                                {{ old('polisi') == 'Polsek Sukamaju' ? 'selected' : '' }}>Polsek Sukamaju
                                            </option>
                                            <option value="Polsek Mappadeceng"
                                                {{ old('polisi') == 'Polsek Mappadeceng' ? 'selected' : '' }}>Polsek
                                                Mappadeceng</option>
                                            <option value="Polsek Masamba"
                                                {{ old('polisi') == 'Polsek Masamba' ? 'selected' : '' }}>Polsek Masamba
                                            </option>
                                            <option value="Polsek Baebunta"
                                                {{ old('polisi') == 'Polsek Baebunta' ? 'selected' : '' }}>Polsek Baebunta
                                            </option>
                                            <option value="Polsek Malangke"
                                                {{ old('polisi') == 'Polsek Malangke' ? 'selected' : '' }}>Polsek Malangke
                                            </option>
                                            <option value="Polsek Malangke Barat"
                                                {{ old('polisi') == 'Polsek Malangke Barat' ? 'selected' : '' }}>Polsek
                                                Malangke Barat</option>
                                            <option value="Polsek Limbong"
                                                {{ old('polisi') == 'Polsek Limbong' ? 'selected' : '' }}>Polsek Limbong
                                            </option>
                                            <option value="Polsek Sabbang"
                                                {{ old('polisi') == 'Polsek Sabbang' ? 'selected' : '' }}>Polsek Sabbang
                                            </option>
                                        </select>
                                        <label for="polisi">Polres/Polsek</label>
                                        @error('polisi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi Perkara"
                                            id="deskripsi" style="height: 150px" name="deskripsi">{{ old('deskripsi') }}</textarea>
                                        <label for="deskripsi">Deskripsi</label>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">SUBMIT</button>
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
