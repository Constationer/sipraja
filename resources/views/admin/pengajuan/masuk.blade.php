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
                                                <th class="wd-10p border-bottom-0">Alamat Tersangka</th>
                                                <th class="wd-25p border-bottom-0">POLRES/POLSEK</th>
                                                <th class="wd-20p border-bottom-0">No Telp Pelapor</th>
                                                <th class="wd-25p border-bottom-0">Deskripsi Perkara</th>
                                                <th class="wd-15p border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($data->isEmpty())
                                                <tr class="text-center">
                                                    <td colspan="9">No data available</td>
                                                </tr>
                                            @else
                                                @foreach ($data as $key)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $key->nama_pelapor }}</td>
                                                        <td>{{ $key->nama_perkara }}</td>
                                                        <td>{{ $key->alamat_tersangka }}</td>
                                                        <td>{{ $key->polisi }}</td>
                                                        <td>{{ $key->no_pelapor }}</td>
                                                        <td>{{ $key->deskripsi }}</td>
                                                        <td>
                                                            <a href="" class="btn btn-warning"><i
                                                                    class="fa fa-list-alt"></i></a>
                                                            <form id="proses-form-{{ $key->id }}" method="POST"
                                                                action="{{ route('admin-pengajuan.sendProses', ['id' => $key->id]) }}">
                                                                @method('PUT')
                                                                @csrf
                                                                <button type="button" class="btn btn-success proses-button"
                                                                    data-id="{{ $key->id }}"><i
                                                                        class="fe fe-check"></i></button>
                                                            </form>
                                                            <form id="ditolak-form-{{ $key->id }}" method="POST"
                                                                action="{{ route('admin-pengajuan.sendDitolak', ['id' => $key->id]) }}">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="text" name="keterangan" hidden />
                                                                <button type="button" class="btn btn-danger ditolak-button"
                                                                    data-id="{{ $key->id }}">
                                                                    <i class="fe fe-x"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
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

        <!-- SWEET-ALERT JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    @endpush

    @push('script')
        <script>
            document.querySelectorAll('.proses-button').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: 'Data akan diubah statusnya menjadi proses!',
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
                        input: 'text',
                        inputPlaceholder: 'Masukkan keterangan penolakan disini', // Placeholder text
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const keterangan = result.value;
                            if (keterangan) {
                                const form = document.getElementById(`ditolak-form-${id}`);
                                form.querySelector('[name="keterangan"]').value = keterangan;
                                form.submit();
                            } else {
                                Swal.fire('Keterangan is required', '', 'error');
                            }
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
