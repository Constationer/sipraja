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
                        <h1 class="page-title">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                @if (auth()->user()->role == 'user')
                    <div class="row">
                        <div class="col-sm-12 col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <a href="{{ route('admin-pengajuan.create') }}"
                                        class="btn btn-primary w-100">Pengajuan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="">Pengajuan Masuk</h6>
                                                <h3 class="mb-2 number-font">{{ $masuk }}</h3>
                                            </div>
                                            <div class="col col-auto">
                                                <div
                                                    class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto">
                                                    <i class="fe fe-book text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="">Pengajuan Proses</h6>
                                                <h3 class="mb-2 number-font">{{ $proses }}</h3>
                                            </div>
                                            <div class="col col-auto">
                                                <div
                                                    class="counter-icon bg-danger-gradient box-shadow-danger brround  ms-auto">
                                                    <i class="fe fe-book text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="">Pengajuan Selesai</h6>
                                                <h3 class="mb-2 number-font">{{ $selesai }}</h3>
                                            </div>
                                            <div class="col col-auto">
                                                <div
                                                    class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto">
                                                    <i class="fe fe-book text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="">Pengajuan Ditolak</h6>
                                                <h3 class="mb-2 number-font">{{ $tolak }}</h3>
                                            </div>
                                            <div class="col col-auto">
                                                <div
                                                    class="counter-icon bg-success-gradient box-shadow-success brround  ms-auto">
                                                    <i class="fe fe-book text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sosialisasi Mendatang</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-wrap">
                                    <div class="example">
                                        @if ($check > 0)
                                            @foreach ($sosialisasi as $key)
                                                <div class="alert alert-success alert-dismissible fade show text-center"
                                                    role="alert">
                                                    <span class="alert-inner--text fw-bold">{{ $key->judul }}</span>
                                                    <br>
                                                    <span
                                                        class="alert-inner--text float-right">{{ $key->deskripsi }}</span><br><br>
                                                    <span class="alert-inner--text float-right fw-bold"><a
                                                            href="{{ $key->link }}" class="link"
                                                            target="_blank">{{ $key->link }}</a></span><br>
                                                    <span class="alert-inner--text fw-bold">{{ $key->tanggal }}</span>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="alert alert-success alert-dismissible fade show text-center"
                                                role="alert">
                                                <span class="alert-inner--text fw-bold">Saat ini tidak ada acara
                                                    terdekat!</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL END -->
                    <div class="col-lg-6">
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title mb-0">Informasi Sosialisasi</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="data-table" class="table table-bordered mb-0 dataTable no-footer"
                                                    role="grid" aria-describedby="data-table_info">
                                                    <thead class="border-top">
                                                        <tr role="row">
                                                            <th class="bg-transparent border-bottom-0 w-5 sorting sorting_asc"
                                                                tabindex="0" aria-controls="data-table" rowspan="1"
                                                                colspan="1" aria-sort="ascending"
                                                                aria-label="No: activate to sort column descending"
                                                                style="width: 31.9688px;">No</th>
                                                            <th class="bg-transparent border-bottom-0 sorting"
                                                                tabindex="0" aria-controls="data-table" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Judul: activate to sort column ascending"
                                                                style="width: 453.953px;">Judul</th>
                                                            <th class="bg-transparent border-bottom-0 sorting"
                                                                tabindex="0" aria-controls="data-table" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Link: activate to sort column ascending"
                                                                style="width: 189.703px;">Link</th>
                                                            <th class="bg-transparent border-bottom-0 sorting"
                                                                tabindex="0" aria-controls="data-table" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Tanggal: activate to sort column ascending"
                                                                style="width: 171.594px;">Tanggal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $key)
                                                            <tr class="border-bottom odd">
                                                                <td class="fs-15 fw-semibold text-center sorting_1">
                                                                    {{ $loop->iteration }}</td>
                                                                <td>{{ $key->judul }}</td>
                                                                <td>
                                                                    <a href="{{ $key->link }}"
                                                                        target="_blank">{{ $key->link }}
                                                                </td>
                                                                <td>
                                                                    {{ $key->tanggal }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- CONTAINER END -->
        </div>
    </div>
    <!--app-content end-->
    </div>
    @push('css')
        <!-- SWEET-ALERT JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    @endpush
    @push('script')
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
