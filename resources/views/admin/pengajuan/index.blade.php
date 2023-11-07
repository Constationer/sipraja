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
                            <li class="breadcrumb-item active" aria-current="page">Pengajuan</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Pengajuan</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                {{-- <th></th> --}}
                                                <th class="wd-15p border-bottom-0">No</th>
                                                <th class="wd-15p border-bottom-0">Nama Pelapor</th>
                                                <th class="wd-20p border-bottom-0">Nama Perkara</th>
                                                <th class="wd-10p border-bottom-0">Alamat Tersangka</th>
                                                <th class="wd-25p border-bottom-0">POLRES/POLSEK</th>
                                                <th class="wd-15p border-bottom-0">No Handphone</th>
                                                <th class="wd-15p border-bottom-0">Status</th>
                                                <th class="wd-15p border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($data->isEmpty())
                                                <tr class="text-center">
                                                    <td colspan="10">No data available</td>
                                                </tr>
                                            @else
                                                @foreach ($data as $key)
                                                    <tr>
                                                        {{-- <td class="control"></td> --}}
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $key->nama_pelapor }}</td>
                                                        <td>{{ $key->nama_perkara }}</td>
                                                        <td>{{ $key->alamat_tersangka }}</td>
                                                        <td>{{ $key->polisi }}</td>
                                                        <td>{{ $key->no_pelapor }}</td>
                                                        <td>{{ $key->status }}</td>
                                                        <!-- Add a button column to open the modal -->
                                                        <td><button class="btn btn-primary view-details">View
                                                                Details</button></td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    <!-- Bootstrap Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Row Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="modal-content"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        <script>
            $(document).ready(function() {
                var table = $('#basic-datatable').DataTable();

                $('#basic-datatable tbody').on('click', 'button.view-details', function() {
                    var data = table.row($(this).closest('tr')).data();

                    // Create HTML for the modal content
                    var modalContent = '<p><strong>Nama Pelapor:</strong> ' + data[1] + '</p>' +
                        '<p><strong>Nama Perkara:</strong> ' + data[2] + '</p>' +
                        '<p><strong>Alamat Tersangka:</strong> ' + data[3] + '</p>' +
                        '<p><strong>POLRES/POLSEK:</strong> ' + data[4] + '</p>' +
                        '<p><strong>No Telp Pelapor:</strong> ' + data[5] + '</p>' +
                        '<p><strong>Deskripsi Perkara:</strong> ' + data[6] + '</p>' +
                        '<p><strong>Keterangan:</strong> ' + data[7] + '</p>' +
                        '<p><strong>Status:</strong> ' + data[8] + '</p>';

                    $('#modal-content').html(modalContent);

                    $('#myModal').modal('show');
                });
            });
        </script>
    @endpush
@endsection
