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
                        <h1 class="page-title">Sosialisasi</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Data</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Sosialisasi</a></li>
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
                                        <form method="POST" action="{{ route('admin-sosialisasi.store') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="user_id">Pilih Desa</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" type="input" name="user_id"
                                                        id="user_id" required>
                                                        @foreach ($data as $key)
                                                            <option class="form-control" value="{{ $key->id }}">
                                                                {{ $key->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="judul">Judul</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="judul" id="judul"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="deskripsi">Deskripsi</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="deskripsi"
                                                        id="deskripsi" required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="link">Link Zoom</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="link" id="link"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="tanggal">Tanggal Acara</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="date" name="tanggal" id="tanggal"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="mb-0 mt-4 row justify-content-end">
                                                <div class="col-md-9">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="{{ route('admin-galeri.index') }}"
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
