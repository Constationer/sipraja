@extends('admin/template')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Pengajuan</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Data</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pengajuan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <form method="POST" action="{{ route('admin-pengajuan.store') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="nama_pelapor">Nama Pelapor</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="nama_pelapor"
                                                        id="nama_pelapor" required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="no_pelapor">No Handphone
                                                    Pelapor</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="no_pelapor"
                                                        id="no_pelapor" required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="alamat_pelapor">Alamat
                                                    Pelapor</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="alamat_pelapor"
                                                        id="alamat_pelapor" required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="nama_perkara">Nama Perkara</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="nama_perkara"
                                                        id="nama_perkara" required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="desa_tersangka">Pilih Desa</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" type="input" name="desa_tersangka"
                                                        id="desa_tersangka" required>
                                                        <option value="" selected disabled>Pilih Salah Satu</option>
                                                        @foreach ($data as $key)
                                                            <option class="form-control" value="{{ $key->id }}">
                                                                {{ $key->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="alamat_tersangka">Alamat
                                                    Tersangka</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="alamat_tersangka"
                                                        id="alamat_tersangka" required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="deskripsi">Deskripsi</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="deskripsi" id="deskripsi" required></textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="polisi">Pilih
                                                    Polsek/Polres</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" type="input" name="polisi"
                                                        id="polisi" required>
                                                        <option value="" selected disabled>Pilih Salah Satu</option>
                                                        <option value="Polsek Bone">Polsek
                                                            Bone</option>
                                                        <option value="Polsek Sukamaju">
                                                            Polsek Sukamaju
                                                        </option>
                                                        <option value="Polsek Mappadeceng">
                                                            Polsek
                                                            Mappadeceng</option>
                                                        <option value="Polsek Masamba">Polsek
                                                            Masamba
                                                        </option>
                                                        <option value="Polsek Baebunta">
                                                            Polsek Baebunta
                                                        </option>
                                                        <option value="Polsek Malangke">
                                                            Polsek Malangke
                                                        </option>
                                                        <option value="Polsek Malangke Barat">
                                                            Polsek
                                                            Malangke Barat</option>
                                                        <option value="Polsek Limbong">
                                                            Polsek Limbong
                                                        </option>
                                                        <option value="Polsek Sabbang">
                                                            Polsek Sabbang
                                                        </option>

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="mb-0 mt-4 row justify-content-end">
                                                <div class="col-md-9">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="{{ route('admin-dashboard.index') }}"
                                                        class="btn btn-secondary">Cancel</a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
    </div>
@endsection
