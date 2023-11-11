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
                            <li class="breadcrumb-item active" aria-current="page">Pengajuan Selesai</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Pengajuan Selesai</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">No</th>
                                                <th class="wd-15p border-bottom-0">Nama Pelapor</th>
                                                <th class="wd-20p border-bottom-0">Nama Perkara</th>
                                                <th class="wd-10p border-bottom-0">Desa Tersangka</th>
                                                <th class="wd-25p border-bottom-0">POLRES/POLSEK</th>
                                                <th class="wd-15p border-bottom-0">Keterangan</th>
                                                <th class="wd-15p border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($data->isEmpty())
                                                <tr class="text-center">
                                                    <td colspan="7">No data available</td>
                                                </tr>
                                            @else
                                                @foreach ($data as $key)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $key->nama_pelapor }}</td>
                                                        <td>{{ $key->nama_perkara }}</td>
                                                        <td>{{ $key->user->name }}</td>
                                                        <td>{{ $key->polisi }}</td>
                                                        <td>{{ $key->keterangan }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-warning"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal{{ $key->id }}">
                                                                <i class="fe fe-file"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="exampleModal{{ $key->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Detail
                                                                        Data</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div id="detailData">
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                Nama
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->nama_pelapor }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                Alamat
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->alamat_pelapor }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                No Handphone
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->no_pelapor }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                Nama Perkara
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->nama_perkara }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                Desa Tersangka
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->desa_tersangka }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                Alamat Tersangka
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->alamat_tersangka }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                Polsek/Polres
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->polisi }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                Deskripsi Perkara
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->deskripsi }}
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                Keterangan Status
                                                                            </div>
                                                                            <div class="col-8">
                                                                                : {{ $key->keterangan }}
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer"><button type="button"
                                                                        class="btn btn-secondary"
                                                                        id="alternativeCloseButton">
                                                                        Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
    </div>

    @push('css')
        <!-- DATA TABLE JS-->
        <script src="{{ asset('admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin/js/table-data.js') }}"></script>
    @endpush
@endsection
