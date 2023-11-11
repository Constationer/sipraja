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
                        <h1 class="page-title">Permintaan Sosialisasi</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Data</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Permintaan Sosialisasi</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h3 class="card-title">Permintaan Sosialisasi</h3>
                                @if (auth()->user()->role == 'user')
                                    <a href="{{ route('admin-permintaan.create') }}"
                                        class="btn btn-sm btn-primary">Tambah</a>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-bottom" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-5p border-bottom-0">No</th>
                                                <th class="wd-15p border-bottom-0">Nama Desa</th>
                                                <th class="wd-5p border-bottom-0">Judul</th>
                                                <th class="wd-20p border-bottom-0">Surat</th>
                                                <th class="wd-15p border-bottom-0">Status</th>
                                                @if (auth()->user()->role == 'Admin')
                                                    <th class="wd-15p border-bottom-0">Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $key->user->name }}</td>
                                                    <td>{{ $key->judul }}</td>
                                                    <td><a href="{{ asset('storage/' . $key->keterangan) }}" target="_blank"
                                                            class="btn btn-warning"><i class="fe fe-file"></i> Unduh</a>
                                                    </td>
                                                    </td>
                                                    <td>{{ $key->status }}</td>
                                                    @if (auth()->user()->role == 'Admin')
                                                        <td>
                                                            <a href="https://wa.me/62{{ substr($key->user->handphone, 1) }}"
                                                                class="btn btn-success" target="_blank"><i
                                                                    class="fe fe-send"></i></a>
                                                            <form id="proses-form-{{ $key->id }}"
                                                                style="display: inline !important" method="POST"
                                                                action="{{ route('admin-permintaan.sendProses', ['id' => $key->id]) }}">
                                                                @method('PUT')
                                                                @csrf
                                                                <button type="button" class="btn btn-primary proses-button"
                                                                    data-id="{{ $key->id }}"><i
                                                                        class="fe fe-check"></i></button>
                                                            </form>
                                                            <form id="ditolak-form-{{ $key->id }}"
                                                                style="display: inline !important" method="POST"
                                                                action="{{ route('admin-permintaan.sendDitolak', ['id' => $key->id]) }}">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="text" name="keterangan" hidden />
                                                                <button type="button" class="btn btn-danger ditolak-button"
                                                                    data-id="{{ $key->id }}">
                                                                    <i class="fe fe-x"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
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

        <!-- SWEET-ALERT JS --><!-- SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <!-- SweetAlert2 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    @endpush

    @push('script')
        <script>
            document.querySelectorAll('.proses-button').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: 'Data akan diubah statusnya menjadi Diproses!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Tidak'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit the form when confirmed
                            document.getElementById('proses-form-' + id).submit();
                        }
                    });
                });
            });

            document.querySelectorAll('.ditolak-button').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: `Data akan diubah statusnya menjadi Ditolak!`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Tidak',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('ditolak-form-' + id).submit();
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
