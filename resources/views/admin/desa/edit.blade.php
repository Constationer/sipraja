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
                        <h1 class="page-title">Akun Desa</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Data</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Akun Desa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                                        <form method="POST" action="{{ route('admin-desa.update', $data->id) }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="name">Nama Desa</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="name" id="name"
                                                        value="{{ $data->name }}" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="handphone">No Handphone</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="input" name="handphone"
                                                        value="{{ $data->handphone }}" id="handphone" required>
                                                </div>
                                            </div>

                                            <div class="mb-0 mt-4 row justify-content-end">
                                                <div class="col-md-9">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="{{ route('admin-desa.index') }}"
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
