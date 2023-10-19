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
                            <li class="breadcrumb-item active" aria-current="page">Pengajuan Masuk</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Pengajuan Masuk</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">No</th>
                                                <th class="wd-15p border-bottom-0">Nama Pelapor</th>
                                                <th class="wd-20p border-bottom-0">Nama Perkara</th>
                                                <th class="wd-15p border-bottom-0">Jenis Perkara</th>
                                                <th class="wd-10p border-bottom-0">Alamat Tersangka</th>
                                                <th class="wd-25p border-bottom-0">POLRES/POLSEK</th>
                                                <th class="wd-20p border-bottom-0">No Telp Pelapor</th>
                                                <th class="wd-25p border-bottom-0">Deskripsi Perkara</th>
                                                <th class="wd-15p border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Chloe</td>
                                                <td>System Developer</td>
                                                <td>Perkara 1</td>
                                                <td>Jl. Saron VI No.5555</td>
                                                <td>POLRES Ningan</td>
                                                <td>081224377189</td>
                                                <td>Deskripsi...................</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-success">Proses</a>
                                                    <a href="" class="btn btn-sm btn-danger">Batal</a>
                                                </td>
                                            </tr>
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
