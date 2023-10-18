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
                        <h1 class="page-title">Galeri</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Data</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h3 class="card-title">Data Galeri</h3>
                                <a href="{{ route('admin-galeri.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">No</th>
                                                <th class="wd-15p border-bottom-0">Gambar</th>
                                                <th class="wd-5p border-bottom-0">Is Pusblish</th>
                                                <th class="wd-20p border-bottom-0">Date</th>
                                                <th class="wd-15p border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img class="img-responsive br-5"
                                                            src="{{ asset('storage/' . $key->gambar) }}" alt="Thumb-1"
                                                            style="max-width: 75px; max-height:75px">

                                                    </td>
                                                    <td>
                                                        @if ($key->publish == 1)
                                                            <i class="fe fe-check-circle text-success"></i>
                                                        @else
                                                            <i class="fe fe-x-circle text-danger"></i>
                                                        @endif
                                                    </td>
                                                    <td>{{ $key->updated_at }}</td>
                                                    <td>
                                                        <form method="POST"
                                                            action="{{ route('admin-galeri.delete', ['id' => $key->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="" class="btn btn-warning"><i
                                                                    class="fe fe-eye"></i></a>
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="fe fe-trash"></i></button>
                                                        </form>
                                                    </td>
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

        <!-- GALLERY JS -->
        <script src="{{ asset('admin/plugins/gallery/picturefill.js') }}"></script>
        <script src="{{ asset('admin/plugins/gallery/lightgallery.js') }}"></script>
        <script src="{{ asset('admin/plugins/gallery/lightgallery-1.js') }}"></script>
        <script src="{{ asset('admin/plugins/gallery/lg-pager.js') }}"></script>
        <script src="{{ asset('admin/plugins/gallery/lg-autoplay.js') }}"></script>
        <script src="{{ asset('admin/plugins/gallery/lg-fullscreen.js') }}"></script>
        <script src="{{ asset('admin/plugins/gallery/lg-zoom.js') }}"></script>
        <script src="{{ asset('admin/plugins/gallery/lg-hash.js') }}"></script>
        <script src="{{ asset('admin/plugins/gallery/lg-share.js') }}"></script>
    @endpush
@endsection


<ul id="lightgallery" class="list-unstyled row" lg-uid="lg0" lg-event-uid="">
    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/1.jpg"
        data-src="../assets/images/media/1.jpg"
        data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>"
        lg-event-uid="&amp;1">
        <a href="">
            <img class="img-responsive br-5" src="../assets/images/media/1.jpg" alt="Thumb-1">
        </a>
    </li>
</ul>
